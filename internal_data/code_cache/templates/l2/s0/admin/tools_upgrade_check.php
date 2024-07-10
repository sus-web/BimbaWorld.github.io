<?php
// FROM HASH: 4dd5511eb52a5f2bab8f236a6bdbcdbd
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Проверить обновления');
	$__finalCompiled .= '

';
	if ($__vars['failed']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--error">
		' . 'Последняя проверка на обновления не выполнена. Дополнительную информацию смотрите в журнале ошибок сервера.' . '
	</div>
';
	}
	$__finalCompiled .= '

';
	if ($__vars['upgradeCheck']) {
		$__finalCompiled .= '
	' . $__templater->callMacro('upgrade_check_macros', 'full_status', array(
			'upgradeCheck' => $__vars['upgradeCheck'],
			'showSuccess' => true,
		), $__vars) . '
';
	}
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['upgradeCheck']['check_date']) {
		$__compilerTemp1 .= '
					' . 'Последняя проверка на обновления: ' . $__templater->func('date_dynamic', array($__vars['upgradeCheck']['check_date'], ), true) . '' . '
				';
	} else {
		$__compilerTemp1 .= '
					' . 'Проверка обновления не проводилась.' . '
				';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body block-row">
			' . $__templater->formInfoRow('
				' . $__compilerTemp1 . '
			', array(
		'rowtype' => 'close',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Проверить сейчас' . $__vars['xf']['language']['ellipsis'],
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('tools/upgrade-check', ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
}
);