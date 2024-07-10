<?php
// FROM HASH: 294de767ab7b47fd31d9a9b68f2fb3ba
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['extra']['wasVisible'] AND $__vars['extra']['isVisible']) {
		$__finalCompiled .= '
	' . 'Ваше сообщение из темы ' . $__templater->escape($__vars['extra']['sourceTitle']) . ' было перемещено в ' . ((((('<a href="' . $__templater->func('base_url', array($__vars['extra']['targetLink'], ), true)) . '" class="fauxBlockLink-blockLink">') . $__templater->func('prefix', array('thread', $__vars['extra']['prefix_id'], ), true)) . $__templater->escape($__vars['extra']['title'])) . '</a>') . '.' . '
';
	} else if ($__vars['extra']['wasVisible']) {
		$__finalCompiled .= '
	' . 'Ваше сообщение в теме ' . $__templater->escape($__vars['extra']['sourceTitle']) . ' было перемещено в другую тему.' . '
';
	} else if ($__vars['extra']['isVisible']) {
		$__finalCompiled .= '
	' . 'Ваше сообщение в другой теме было перемещено в ' . ((((('<a href="' . $__templater->func('base_url', array($__vars['extra']['targetLink'], ), true)) . '" class="fauxBlockLink-blockLink">') . $__templater->func('prefix', array('thread', $__vars['extra']['prefix_id'], ), true)) . $__templater->escape($__vars['extra']['title'])) . '</a>') . '.' . '
';
	}
	$__finalCompiled .= '

';
	if ($__vars['extra']['reason']) {
		$__finalCompiled .= 'Причина' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['extra']['reason']);
	}
	return $__finalCompiled;
}
);