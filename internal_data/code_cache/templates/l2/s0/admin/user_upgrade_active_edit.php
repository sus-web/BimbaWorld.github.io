<?php
// FROM HASH: 51d8cec24913b6c1cc0f51053702173b
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактирование активного повышения прав пользователя');
	$__finalCompiled .= '

' . $__templater->form('

	<div class="block-container">
		<div class="block-body">
			' . $__templater->formRow($__templater->escape($__vars['activeUpgrade']['User']['username']), array(
		'label' => 'Имя пользователя',
	)) . '

			' . $__templater->formRow($__templater->escape($__vars['activeUpgrade']['Upgrade']['title']), array(
		'label' => 'Название повышения',
	)) . '

			' . $__templater->formRadioRow(array(
		'name' => 'end_type',
	), array(array(
		'value' => 'permanent',
		'selected' => !$__vars['activeUpgrade']['end_date'],
		'label' => 'Постоянно',
		'_type' => 'option',
	),
	array(
		'value' => 'date',
		'selected' => $__vars['activeUpgrade']['end_date'],
		'label' => 'Дата' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formDateInput(array(
		'name' => 'end_date',
		'value' => ($__vars['activeUpgrade']['end_date'] ? $__templater->func('date', array($__vars['activeUpgrade']['end_date'], 'picker', ), false) : $__templater->func('date', array($__vars['xf']['time'], 'picker', ), false)),
	))),
		'_type' => 'option',
	)), array(
		'label' => 'Повышение истекает',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('user-upgrades/edit-active', null, array('user_upgrade_record_id' => $__vars['activeUpgrade']['user_upgrade_record_id'], ), ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);