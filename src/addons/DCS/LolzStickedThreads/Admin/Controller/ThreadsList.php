<?php

namespace DCS\LolzStickedThreads\Admin\Controller;
use XF\Admin\Controller\AbstractController;
use XF\Mvc\ParameterBag;
use DCS\LolzStickedThreads\Entity\StickedThread;
use XF;
use XF\Mvc\FormAction;
class ThreadsList extends AbstractController
{
    public function actionIndex() {

        $threadsFinder = XF::finder("DCS\LolzStickedThreads:StickedThread");
        $threads = $threadsFinder->fetch();

        $viewParams = [
            'threads' => $threads
        ];

        return $this->view('DCS\LolzStickedThreads:ThreadsList', 'dcs_sticked_threads_list_index', $viewParams);
    }

    public function actionView(ParameterBag $params)
    {
        $threadsFinder = XF::finder("DCS\LolzStickedThreads:StickedThread");

        /** @var StickedThread $thread */
        $thread = $threadsFinder->where("count", "=", $params->count)->fetchOne();

        $viewParams = [
            'thread'      => $thread,
        ];

        return $this->view('DCS\LolzStickedThreads:ThreadsList', 'dcs_sticked_threads_list_view', $viewParams);
    }

    public function actionSave(ParameterBag $params)
    {
        $threadsFinder = XF::finder("DCS\LolzStickedThreads:StickedThread");

        /** @var StickedThread $thread */
        $thread = $threadsFinder->where("count", "=", $params->count)->fetchOne();

        $this->StickedThreadSaveProcess($thread)->run();

        return $this->redirect($this->buildLink('dcs-sticked-threads/list') . $this->buildLinkHash($thread->count));
    }

    public function actionDelete(ParameterBag $params)
    {
        $threadsFinder = XF::finder("DCS\LolzStickedThreads:StickedThread");

        /** @var StickedThread $thread */
        $thread = $threadsFinder->where("count", "=", $params->count)->fetchOne();
        $thread->delete();

        return $this->redirect($this->buildLink('dcs-sticked-threads/list'));
    }

    public function actionAdd()
    {
        return $this->view("DCS\LolzStickedThreads:ThreadsList", "dcs_sticked_threads_list_add", []);
    }

    public function actionAddthread()
    {
        $name = $this->filter("name", 'str');
        $link = $this->filter('link', 'str');

        if (empty($name))
        {
            return $this->error(XF::phrase("dcs_name_is_required_param"));
        }

        if (empty($link))
        {
            return $this->error(XF::phrase("dcs_link_is_required_param"));
        }

        if (!empty($name) AND !empty($link))
        {
            $thread = $this->em()->create("DCS\LolzStickedThreads:StickedThread");
            $thread->bulkSet([
                "name"     => $name,
                "link"     => $link,
            ]);
            $thread->save();

            return $this->redirect($this->buildLink('dcs-sticked-threads/list'));

        }

    }

    protected function StickedThreadSaveProcess(StickedThread $thread): FormAction
    {
        $form = $this->formAction();

        $input['name'] = $this->filter('name', 'str');
        $input['link'] = $this->filter('link', 'str');

        $form->basicEntitySave($thread, $input);

        return $form;
    }


}