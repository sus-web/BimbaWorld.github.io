<?php

/*
 * Created on 05.10.2019
 * HomePage: https://xentr.net
 * Copyright (c) 2019 XENTR | XenForo Add-ons - Styles -  All Rights Reserved
 */
 
namespace XenMake\StyleProperty\XF\Entity;

use XF\Mvc\Entity\Entity;
use XF\Mvc\Entity\Structure;

class Node extends \XF\Entity\Node
{
    public function getNodeImage()
    {
        $nodeImage = 'data://blockImages/'.$this->node_id.'.jpg';
		
		if (\XF\Util\File::abstractedPathExists($nodeImage))
		{
			return $this->app()->applyExternalDataUrl('blockImages/' . $this->node_id . '.jpg?' . $this->node_background, true);
		}
	
		return;
    }

    protected function _preSave()
    {
        $this->node_background = \XF::$time;
    }

    protected function _postDelete()
	{
        \XF\Util\File::deleteFromAbstractedPath('data://blockImages/'.$this->node_id.'.jpg');
    }
    
    public static function getStructure(Structure $structure)
    {
        $structure = parent::getStructure($structure);

        $structure->columns['node_background'] = ['type' => self::INT, 'default' => 0];

        return $structure;
    }
}