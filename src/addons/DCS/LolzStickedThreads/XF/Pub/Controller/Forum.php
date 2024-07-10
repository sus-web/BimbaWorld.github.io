<?php

namespace DCS\LolzStickedThreads\XF\Pub\Controller;

use XF;
use XF\Mvc\ParameterBag;

class Forum extends XFCP_Forum
{
    public function actionNewposts(ParameterBag $params)
    {
        $parent = parent::actionNewposts($params);

        $threadsFinder = XF::finder("DCS\LolzStickedThreads:StickedThread");
        $threads = $threadsFinder->fetch();

        $parent->setParams([
                's'                 => 2,
                'sticked_threads'   => $threads,
        ]);

        return $parent;
    }
}