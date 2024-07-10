<?php

return function($__templater, array $__vars, array $__options = [])
{
	$__widget = \XF::app()->widget()->widget('xtr_newsTicker', $__options)->render();

	return $__widget;
};