<?php
// FROM HASH: 16ecf247420cc1304c76c54d3af6906d
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['userBan'], 'isInsert', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Заблокировать пользователя');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактировать заблокированного пользователя' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['userBan']['User']['username']));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['userBan'], 'isUpdate', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('Снять блокировку', array(
			'href' => $__templater->func('link', array('banning/users/lift', $__vars['userBan'], ), false),
			'overlay' => 'true',
		), '', array(
		)) . '
');
	}
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if (!$__vars['userBan']['user_id']) {
		$__compilerTemp1 .= '
				' . $__templater->formTextBoxRow(array(
			'name' => 'username',
			'ac' => 'single',
			'value' => $__vars['addName'],
		), array(
			'label' => 'Имя пользователя',
		)) . '
			';
	} else {
		$__compilerTemp1 .= '
				' . $__templater->formRow($__templater->escape($__vars['userBan']['User']['username']), array(
			'label' => 'Имя пользователя',
		)) . '

				' . $__templater->formRow($__templater->escape($__vars['userBan']['BanUser']['username']), array(
			'label' => 'Заблокировал(а)',
		)) . '

				' . $__templater->formRow($__templater->func('date', array($__vars['userBan']['ban_date'], ), true), array(
			'label' => 'Дата блокировки',
		)) . '

				';
		$__compilerTemp2 = '';
		if ($__vars['userBan']['end_date']) {
			$__compilerTemp2 .= '
						' . $__templater->func('date', array($__vars['userBan']['end_date'], ), true) . '
					';
		} else {
			$__compilerTemp2 .= '
						' . 'Никогда' . '
					';
		}
		$__compilerTemp1 .= $__templater->formRow('
					' . $__compilerTemp2 . '
				', array(
			'label' => 'Окончание блокировки',
		)) . '
			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__compilerTemp1 . '

			' . $__templater->formRadioRow(array(
		'name' => 'ban_length',
		'value' => ((!$__vars['userBan']['end_date']) ? 'permanent' : 'temporary'),
	), array(array(
		'label' => 'Постоянно',
		'value' => 'permanent',
		'_type' => 'option',
	),
	array(
		'label' => 'До' . $__vars['xf']['language']['label_separator'],
		'value' => 'temporary',
		'_dependent' => array($__templater->formDateInput(array(
		'name' => 'end_date',
		'value' => ($__vars['userBan']['end_date'] ? $__templater->func('date', array($__vars['userBan']['end_date'], 'Y-m-d', ), false) : ''),
	))),
		'_type' => 'option',
	)), array(
		'label' => 'Длительность блокировки',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'user_reason',
		'value' => $__vars['userBan']['user_reason'],
		'maxlength' => $__templater->func('max_length', array($__vars['userBan'], 'user_reason', ), false),
	), array(
		'label' => 'Причина блокировки',
		'explain' => 'Если указано, то будет отображаться пользователю.',
	)) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'icon' => 'save',
		'sticky' => 'true',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('banning/users/save', $__vars['userBan'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);