<?php
// FROM HASH: c594cf4a6a336f020ef3e0f66e212865
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Threads by ' . $__templater->escape($__vars['user']['username']) . '');
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