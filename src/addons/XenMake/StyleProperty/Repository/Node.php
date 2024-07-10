<?php

/*
 * Created on 01.11.2019
 * HomePage: https://xentr.net
 * Copyright (c) 2019 XENTR | XenForo Add-ons - Styles -  All Rights Reserved
 */
 
namespace XenMake\StyleProperty\Repository;

use XF\Mvc\Entity\AbstractCollection;
use XF\Mvc\Entity\Repository;

class Node extends Repository
{
    public function setNodeImageFromUpload($node, $upload)
    {
        $upload->requireImage();

        if (!$upload->isValid($errors))
		{
			throw new \XF\PrintableException(reset($errors));
        }
        
        $target = 'data://blockImages/'.$node->node_id.'.jpg';

        try
		{
			$image = \XF::app()->imageManager->imageFromFile($upload->getTempFile());
			
			$tempFile = \XF\Util\File::getTempFile();
			if ($tempFile && $image->save($tempFile))
			{
				$output = $tempFile;
			}
			unset($image);
			
			\XF\Util\File::copyFileToAbstractedPath($output, $target);
		}
		catch (Exception $e)
		{
			throw new \XF\PrintableException(\XF::phrase('unexpected_error_occurred'));
		}
	}
}