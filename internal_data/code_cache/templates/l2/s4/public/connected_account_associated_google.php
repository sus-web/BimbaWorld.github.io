<?php
// FROM HASH: e0bcb202d94ad29fddd90d66c08e84d7
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['providerData']['avatar_url']) {
		$__finalCompiled .= '
	<img src="' . $__templater->escape($__vars['providerData']['avatar_url']) . '" width="48" alt="" />
';
	}
	$__finalCompiled .= '
<div>' . ($__templater->escape($__vars['providerData']['username']) ?: 'Учётная запись привязана') . '</div>';
	return $__finalCompiled;
}
);