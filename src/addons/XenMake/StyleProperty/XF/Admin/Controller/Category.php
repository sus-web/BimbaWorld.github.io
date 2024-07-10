<?php

/*
 * Created on 01.11.2019
 * HomePage: https://xentr.net
 * Copyright (c) 2019 XENTR | XenForo Add-ons - Styles -  All Rights Reserved
 */
 
namespace XenMake\StyleProperty\XF\Admin\Controller;

use XF\Mvc\ParameterBag;

class Category extends XFCP_Category
{
    protected function nodeSaveProcess(\XF\Entity\Node $node)
    {
        if ($upload = $this->request->getFile('upload', false, false))
        {
            $this->repository('XenMake\StyleProperty:Node')->setNodeImageFromUpload($node, $upload);
        }

        return parent::nodeSaveProcess($node);
    }
}