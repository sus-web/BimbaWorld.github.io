<?php
// FROM HASH: 8c0dca4c0b93dce3dbc60ef31b5a9cb8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Управление отслеживаемыми темами');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['state'] == 'delete') {
		$__compilerTemp1 .= '
					' . 'Вы уверены, что хотите прекратить отслеживание <b>всех</b> тем?' . '
				';
	} else {
		$__compilerTemp1 .= '
					' . 'Вы уверены, что хотите обновить свои настройки уведомлений по электронной почте для <b>всех</b> тем?' . '
				';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-row">
			' . $__templater->formInfoRow('
				' . $__compilerTemp1 . '
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'notificationsOff',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('watched/threads/manage', null, array('state' => $__vars['state'], ), ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);