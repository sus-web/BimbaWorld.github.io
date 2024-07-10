<?php
// FROM HASH: ba4c9f788b7b94b12a8c90d4edd363c6
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['extra']['comment']) {
		$__finalCompiled .= '
	' . 'К сожалению, Ваша недавняя жалоба была отклонена: ' . (((('<a href="' . $__templater->escape($__vars['extra']['link'])) . '" class="fauxBlockLink-blockLink">') . $__templater->escape($__vars['extra']['title'])) . '</a>') . ' - ' . $__templater->escape($__vars['extra']['comment']) . '' . '
';
	} else {
		$__finalCompiled .= '
	' . 'К сожалению, Ваша недавняя жалоба была отклонена: "' . (((('<a href="' . $__templater->escape($__vars['extra']['link'])) . '" class="fauxBlockLink-blockLink">') . $__templater->escape($__vars['extra']['title'])) . '</a>') . '"' . '
';
	}
	return $__finalCompiled;
}
);