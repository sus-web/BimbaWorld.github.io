<?php
// FROM HASH: dd11bbc6cd326fffeed366eda978df78
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Мои темы');
	$__finalCompiled .= '

';
	$__templater->wrapTemplate('account_wrapper', $__vars);
	$__finalCompiled .= '

<div class="block" data-type="thread">
	<div class="block-container">
		' . $__templater->callMacro('dcs_my_threads_macros', 'threads', array(
		'threads' => $__vars['threads'],
	), $__vars) . '
	</div>
</div>';
	return $__finalCompiled;
}
);