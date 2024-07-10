<?php

namespace DCS\LolzMyThreads\XF\Pub\Controller;

use XF;

class Forum extends XFCP_Forum {

    public function actionMythreads() {

        $user_id = $this->filter("user_id", 'uint');
        $finder_user = XF::finder('XF:User');
        $user = $finder_user->where('user_id', $user_id)->fetchOne();

        if ($user == null) {
            return $this->error(XF::phrase("this_user_does_not_exist"));
        }

        $finder = \XF::finder('XF:Thread');
        $threads = $finder
            ->with('Forum.Node')
            ->where('user_id', '=', $user->user_id)
            ->where('discussion_state', '=', 'visible')
            ->order('title', 'ASC')
            ->fetch();


        $viewParams = [
            "user"      => $user,
            "threads"   => $threads
        ];

        return $this->view('DCS/LolzMyThreads:MyThreads', 'dcs_my_threads', $viewParams);

    }

}