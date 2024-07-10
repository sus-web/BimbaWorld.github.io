<?php

/*
 * Created on 25.05.2020
 * HomePage: https://xentr.net
 * Copyright (c) 2019 XENTR | XenForo Add-ons - Styles -  All Rights Reserved
 */

namespace XENTR\StyleProperties\Widget;

use \XF\Widget\AbstractWidget;

class NewThreads extends AbstractWidget

{
    protected $defaultOptions = [
        'limit' => 5,
        'node_ids' => '',
        'source' => 'current',
        'threadUser' => 'all',
        'username' => '',
        'type' => 'latestThreads',
        'sticky' => 'none',
        'order' => 'date',
        'timeLapse' => 'alltime',
        'customTime' => 1,
        'widgetTypes' => 'default',
		'style' => 'simple',
        'template' => '',
		'show_expanded_title' => false
    ];
    
    protected function getDefaultTemplateParams($context)
	{
		$params = parent::getDefaultTemplateParams($context);
		if ($context == 'options')
		{
			$nodeRepo = $this->app->repository('XF:Node');
			$params['nodeTree'] = $nodeRepo->createNodeTree($nodeRepo->getFullNodeList());
		}
		return $params;
    }
    
    public function render()
	{
		$visitor = \XF::visitor();
		
        $options = $this->options;
		$style = $options['style'];
        $type = $options['type'];
        $sticky = $options['sticky'];
        $order = $options['order'];
        $limit = $options['limit'];
        $timeLapse = $options['timeLapse'];
        $customTime = $options['customTime'];
        $nodeIds = $options['node_ids'];
        $source = $options['source'];
        $threadUser = $options['threadUser'];
        $username = $options['username'];
        $widgetTypes = $options['widgetTypes'];
        $template = $options['template'];
        $titleLink = $options['titleLink'];

		$router = $this->app->router('public');

		/** @var \XF\Repository\Thread $threadRepo */
		$threadRepo = $this->repository('XF:Thread');

        if ($type == 'latestThreads')
        {
            $threadFinder = $threadRepo->findLatestThreads();
        } else if ($type == 'latestReplies')
        {
            $threadFinder = $threadRepo->findThreadsWithLatestPosts()->where('reply_count', '>', 0);
        } else if ($type == 'latestUnread')
        {
            $threadFinder = $threadRepo->findThreadsWithUnreadPosts();
        } else if ($type == 'latestWatched')
        {
            $threadFinder = $threadRepo->findThreadsForWatchedList();
        }
		
        $title = \XF::phrase('latest_threads');
        if ($titleLink)
        {
            $link = $titleLink;
        } else {
            $link = $router->buildLink('whats-new');
        }

		$threadFinder
            ->with('Forum.Node.Permissions|' . $visitor->permission_combination_id)
            ->where('discussion_state', 'visible')
			->where('discussion_type', '<>', 'redirect')
            ->limit(max($limit * 4, 20));
        
        if ($source == 'current' || $source == 'currentChild')
        {
            if (isset($this->contextParams['thread']))
            {
                $thread = $this->contextParams['thread'];
                $forum = $thread->Forum;
                $threadFinder->where('thread_id', '<>', $thread->thread_id);

                if ($source == 'currentChild')
                {
                    /** @var \XF\Repository\Node $nodeRepo */
                    $nodeRepo = $this->app->repository('XF:Node');
                    $children = $nodeRepo->findChildren($forum->Node)->fetch();
                    $childrenIds = [$forum->Node->node_id];
                    if(count($children) > 0)
                        foreach($children as $child)
                            $childrenIds[] = $child->node_id;
                    
                    $threadFinder->whereOr([["node_id", $childrenIds]]);
                } else {
                    $threadFinder->where('node_id', $forum->node_id);
                }
            } else if (isset($this->contextParams['forum']))
            {
                $forum = $this->contextParams['forum'];
                if ($source == 'currentChild')
                {
                    /** @var \XF\Repository\Node $nodeRepo */
                    $nodeRepo = $this->app->repository('XF:Node');
                    $children = $nodeRepo->findChildren($forum->Node)->fetch();
                    $childrenIds = [$forum->Node->node_id];
                    if(count($children) > 0)
                        foreach($children as $child)
                            $childrenIds[] = $child->node_id;
                    
                    $threadFinder->whereOr([["node_id", $childrenIds]]);
                } else {
                    $threadFinder->where('node_id', $forum->node_id);
                }
            }
        } else {
            if ($nodeIds && !in_array(0, $nodeIds))
            {
                $threadFinder->where('node_id', $nodeIds);
            }
        }

        if ($threadUser == 'current')
        {
            if (isset($this->contextParams['thread']))
            {
                $thread = $this->contextParams['threads'];
                $user = $thread->User;
                $threadFinder->where('user_id', $user->user_id);
            }
        } else if ($threadUser == 'custom')
        {
            $threadFinder->where('username', $username);
        }

        if ($sticky == 'yes')
        {
            $threadFinder->where('sticky', 1);
        } else if ($sticky == 'no')
        {
            $threadFinder->where('sticky', 0);
        }
        if ($order == 'reactions')
        {
            $threadFinder->where('first_post_reaction_score', '>', 0)->order('first_post_reaction_score', 'DESC');
        } else if ($order == 'replies')
        {
            $threadFinder->where('reply_count', '>', 0)->order('reply_count', 'DESC');
        } else if ($order == 'views')
        {
            $threadFinder->where('view_count', '>', 0)->order('view_count', 'DESC');
        }
        if ($timeLapse == 'custom')
        {
            $date = new \DateTime();
            $now = $date->getTimestamp();
            $optionsDays = $customTime * 86400;
            $days = $now - $optionsDays;
            $threadFinder->where('post_date', '>=', $days);
        }

        $threadFinder
            ->with('fullForum')
            ->with('FirstPost')
            ->with('LastPoster')
            ->withReadData();

		/** @var \XF\Entity\Thread $thread */
		foreach ($threads = $threadFinder->fetch() AS $threadId => $thread)
		{
			if (!$thread->canView()
				|| $visitor->isIgnoring($thread->user_id)
			)
			{
				unset($threads[$threadId]);
			}
        }
        $threads = $threads->slice(0, $limit, true);
        
        if ($widgetTypes == 'custom')
        {
            $template = $options['template'];
        } else {
            $template = 'xentr_newsTicker_widget';
        }

		$viewParams = [
            'widgetTypes' => $widgetTypes,
			'title' => $this->getTitle() ?: $title,
			'style' => $options['style'],
			'link' => $link,
            'threads' => $threads,
			'showExpandedTitle' => $options['show_expanded_title']
		];
		return $this->renderer($template, $viewParams);
	}

	public function verifyOptions(\XF\Http\Request $request, array &$options, &$error = null)
	{
		$options = $request->filter([
			'limit' => 'uint',
            'node_ids' => 'array-uint',
            'type' => 'str',
            'sticky' => 'str',
			'style' => 'str',
            'order' => 'str',
            'timeLapse' => 'str',
            'customTime' => 'uint',
            'widgetTypes' => 'str',
            'template' => 'str',
            'titleLink' => 'str',
            'source' => 'str',
            'threadUser' => 'str',
            'username' => 'str',
			'show_expanded_title' => 'bool'
		]);

		if (in_array(0, $options['node_ids']))
		{
			$options['node_ids'] = [0];
        }

		if ($options['limit'] < 1)
		{
			$options['limit'] = 1;
        }

        if ($options['timeLapse'] != 'custom')
		{
			$options['customTime'] = 1;
        }
        
        if ($options['template'] == '' && $options['widgetTypes'] == 'custom')
		{
			$options['template'] = 'xentr_newsTicker_widget';
		}
		
		if ($options['style'] != 'expanded')
		{
			$options['show_expanded_title'] = false;
		}
		
		return true;
	}
}