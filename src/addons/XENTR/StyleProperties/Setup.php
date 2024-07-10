<?php

/*
 * Created on 25.05.2020
 * HomePage: https://xentr.net
 * Copyright (c) 2019 XENTR | XenForo Add-ons - Styles -  All Rights Reserved
 */

namespace XENTR\StyleProperties;

use XF\AddOn\AbstractSetup;
use XF\AddOn\StepRunnerInstallTrait;
use XF\AddOn\StepRunnerUninstallTrait;
use XF\AddOn\StepRunnerUpgradeTrait;

class Setup extends AbstractSetup
{
	use StepRunnerInstallTrait;
	use StepRunnerUpgradeTrait;
	use StepRunnerUninstallTrait;
	
	public function installStep1()
    {
        $this->createWidget(

            'xtr_newsTicker',
            'xentr_newsTicker_widget',
            [
                'positions' => []
            ]

        );
    }
	
	public function upgrade(array $stepParams = [])
    {
        // TODO: Implement upgrade() method.
    }

    public function uninstallStep1()
    {
        $this->deleteWidget('xtr_newsTicker');
    }
	
}