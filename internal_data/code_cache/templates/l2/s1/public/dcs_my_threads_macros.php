<?php
// FROM HASH: e95aedd09f0a88dda6b20188192fe4be
return array(
'macros' => array('threads' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'threads' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	
	';
	if ($__templater->func('count', array($__vars['threads'], ), false) > 0) {
		$__finalCompiled .= '
		<div class="structItemContainer">
			';
		if ($__templater->isTraversable($__vars['threads'])) {
			foreach ($__vars['threads'] AS $__vars['thread']) {
				$__finalCompiled .= '
				' . $__templater->callMacro('thread_list_macros', 'item', array(
					'thread' => $__vars['thread'],
				), $__vars) . '
			';
			}
		}
		$__finalCompiled .= '
		</div>
	';
	} else {
		$__finalCompiled .= '
		<div class="block-row">
				' . 'Результаты не найдены.' . '
		</div>
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';

	return $__finalCompiled;
}
);