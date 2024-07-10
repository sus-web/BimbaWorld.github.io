<?php
// FROM HASH: 4d2c21e7b440311a164435643c85cc1f
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['extra']['wasVisible'] AND $__vars['extra']['isVisible']) {
		$__finalCompiled .= '
	' . 'Ваше сообщение из темы ' . $__templater->escape($__vars['extra']['title']) . ' было перемещено в ' . ($__templater->func('prefix', array('thread', $__vars['extra']['prefix_id'], 'plain', ), true) . $__templater->escape($__vars['extra']['targetTitle'])) . '.' . '
';
	} else if ($__vars['extra']['wasVisible']) {
		$__finalCompiled .= '
	' . 'Ваше сообщение в теме ' . $__templater->escape($__vars['extra']['title']) . ' было перемещено в другую тему.' . '
';
	} else if ($__vars['extra']['isVisible']) {
		$__finalCompiled .= '
	' . 'Ваше сообщение в другой теме было перемещено в ' . ($__templater->func('prefix', array('thread', $__vars['extra']['prefix_id'], 'plain', ), true) . $__templater->escape($__vars['extra']['targetTitle'])) . '.' . '
';
	}
	$__finalCompiled .= '

';
	if ($__vars['extra']['reason']) {
		$__finalCompiled .= 'Причина' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['extra']['reason']);
	}
	$__finalCompiled .= '

';
	if ($__vars['extra']['isVisible']) {
		$__finalCompiled .= '
	<push:url>' . $__templater->func('base_url', array($__vars['extra']['targetLink'], 'canonical', ), true) . '</push:url>
';
	}
	return $__finalCompiled;
}
);