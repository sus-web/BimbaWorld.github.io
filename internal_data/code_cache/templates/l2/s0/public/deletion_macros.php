<?php
// FROM HASH: 0a3b4279c69adf6bbf4c27e3fa6791ff
return array(
'macros' => array('notice' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'log' => '!',
		'message' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<ul class="listInline listInline--bullet listInline--selfInline">
		';
	if (!$__templater->test($__vars['message'], 'empty', array())) {
		$__finalCompiled .= '
			<li>' . $__templater->escape($__vars['message']) . '</li>
		';
	}
	$__finalCompiled .= '
		<li>' . 'Удалил(а) ' . ($__templater->escape($__vars['log']['delete_username']) ?: 'Н/Д') . '' . '</li>
		';
	if ($__vars['log']) {
		$__finalCompiled .= '
			<li>' . $__templater->func('date_dynamic', array($__vars['log']['delete_date'], array(
		))) . '</li>
			';
		if ($__vars['log']['delete_reason']) {
			$__finalCompiled .= '
				<li>' . 'Причина' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['log']['delete_reason']) . '</li>
			';
		}
		$__finalCompiled .= '
		';
	}
	$__finalCompiled .= '
	</ul>
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