<?php
// FROM HASH: 6c00071105515d4ed619e1833ebd2320
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Подтверждение действия');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['errors']) {
		$__compilerTemp1 .= '
					' . 'Мы обнаружили некоторые ошибки при попытке обновления следующего плагина' . $__vars['xf']['language']['label_separator'] . '
				';
	} else if ($__vars['warnings']) {
		$__compilerTemp1 .= '
					' . 'Пожалуйста, ознакомьтесь с предупреждениями и подтвердите, что Вы хотите продолжить процесс обновления следующего плагина' . $__vars['xf']['language']['label_separator'] . '
				';
	} else {
		$__compilerTemp1 .= '
					' . 'Пожалуйста, подтвердите, что Вы хотите обновить следующий плагин' . $__vars['xf']['language']['label_separator'] . '
				';
	}
	$__finalCompiled .= $__templater->form('

	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . $__compilerTemp1 . '
				<strong>' . $__templater->escape($__vars['addOn']['title']) . ' &middot; ' . $__templater->escape($__vars['addOn']['version_string']) . ' -&gt; ' . $__templater->escape($__vars['addOn']['json_version_string']) . '</strong>
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>

		' . $__templater->callMacro('addon_action_macros', 'summary', array(
		'errors' => $__vars['errors'],
		'warnings' => $__vars['warnings'],
	), $__vars) . '

		' . $__templater->callMacro('addon_action_macros', 'action', array(
		'errors' => $__vars['errors'],
		'warnings' => $__vars['warnings'],
		'submit' => 'Обновить',
	), $__vars) . '
	</div>

	' . $__templater->func('redirect_input', array(null, null, true)) . '

', array(
		'action' => $__templater->func('link', array('add-ons/upgrade', $__vars['addOn'], ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
}
);