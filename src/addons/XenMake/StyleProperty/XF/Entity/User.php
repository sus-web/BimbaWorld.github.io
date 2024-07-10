<?php

/*
 * Created on 05.10.2019
 * HomePage: https://xentr.net
 * Copyright (c) 2019 XENTR | XenForo Add-ons - Styles -  All Rights Reserved
 */
 
namespace XenMake\StyleProperty\XF\Entity;

use XF\Mvc\Entity\Entity;

class User extends XFCP_User
{
    public function canEditImage(&$error = null)
    {
        $visitor = \XF::visitor();

        if ($visitor->hasPermission('forum', 'canEditImage'))
        {
            return true;
        }

        return false;
    }
}