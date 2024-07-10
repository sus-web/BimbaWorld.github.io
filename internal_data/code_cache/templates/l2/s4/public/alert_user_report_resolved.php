<?php
// FROM HASH: d1bc3bfc220e71b86c68a1d5a7744891
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['extra']['comment']) {
		$__finalCompiled .= '
	' . 'Ваша последняя жалоба была решена: ' . (((('<a href="' . $__templater->escape($__vars['extra']['link'])) . '" class="fauxBlockLink-blockLink">') . $__templater->escape($__vars['extra']['title'])) . '</a>') . ' - ' . $__templater->escape($__vars['extra']['comment']) . '' . '
';
	} else {
		$__finalCompiled .= '
	' . 'Ваша последняя жалоба была решена: ' . (((('<a href="' . $__templater->escape($__vars['extra']['link'])) . '" class="fauxBlockLink-blockLink">') . $__templater->escape($__vars['extra']['title'])) . '</a>') . '' . '
';
	}
	return $__finalCompiled;
}
);