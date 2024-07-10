<?php

namespace DCS\LolzStickedThreads;

use XF\AddOn\AbstractSetup;
use XF\AddOn\StepRunnerInstallTrait;
use XF\AddOn\StepRunnerUninstallTrait;
use XF\AddOn\StepRunnerUpgradeTrait;
use XF\Db\Schema\Create;

class Setup extends AbstractSetup
{
	use StepRunnerInstallTrait;
	use StepRunnerUpgradeTrait;
	use StepRunnerUninstallTrait;

    public function installStep1() {
        $this->schemaManager()->createTable("xf_dcs_lolz_sticked_threads", function (Create $table){
            $table->addColumn('count', 'int')->autoIncrement();
            $table->addColumn('name', 'text');
            $table->addColumn('link', 'text');
        });
    }
}