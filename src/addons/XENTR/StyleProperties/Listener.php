<?php

namespace XENTR\StyleProperties;

use XF\Mvc\Entity\Entity;

class Listener
{

	public static function adminOptionControllerPostDispatch(\XF\Mvc\Controller $controller, $action, \XF\Mvc\ParameterBag $params, \XF\Mvc\Reply\AbstractReply &$reply)
    {
        if ($params['group_id'] == 'xentr_styleProperties')
        {
            $reply->setSectionContext('xtr_style_properties_settings');
        }
        if ($params['group_id'] == 'xentr_newTicker')
        {
            $reply->setSectionContext('xtr_news_ticker_settings');
        }
		if ($params['group_id'] == 'xentr_userReactions')
        {
            $reply->setSectionContext('xtr_user_reactions_settings');
        }
    }
	
	public static function preRender(\XF\Template\Templater $templater, &$type, &$template, array &$params)
    {
        $params['xentr_forum_statistics'] = \XF::app()->forumStatistics;
		
		$visitor = \XF::visitor();
        if($visitor['user_id']){
			/** @var \XF\Repository\Reaction $reactionRepo */
			$reactionRepo = \XF::repository('XF:Reaction');
			$params['userReactionRecieved'] = $reactionRepo->getUserReactionsTabSummary($visitor);
        }
    }

}