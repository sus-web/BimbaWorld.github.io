<?php
// FROM HASH: fa810186c892bfd5b21df450088b5649
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'Ваша тема ' . ($__templater->func('prefix', array('thread', $__vars['extra']['prefix_id'], 'plain', ), true) . $__templater->escape($__vars['extra']['title'])) . ' была перемещена в другой форум.' . '
';
	if ($__vars['extra']['reason']) {
		$__finalCompiled .= 'Причина' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['extra']['reason']);
	}
	$__finalCompiled .= '
<push:url>' . $__templater->func('base_url', array($__vars['extra']['link'], 'canonical', ), true) . '</push:url>';
	return $__finalCompiled;
}
);