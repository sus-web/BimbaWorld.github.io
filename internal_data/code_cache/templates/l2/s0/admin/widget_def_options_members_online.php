<?php
// FROM HASH: 954b0a7c43209674a124e132e0db00cb
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<hr class="formRowSep" />

' . $__templater->formNumberBoxRow(array(
		'name' => 'options[limit]',
		'value' => $__vars['options']['limit'],
		'min' => '0',
	), array(
		'label' => 'Максимальное количество имён пользователей',
		'explain' => 'Слишком длинный список онлайн пользователей может вызвать дополнительную нагрузку на посещаемых форумах, Вы можете ограничить количество отображаемых имён пользователей до того, как в блок будет добавлена ссылка  \'...и ещё X\'. Значение 0 отключает лимит.',
	)) . '

' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'options[followedOnline]',
		'selected' => $__vars['options']['followedOnline'],
		'label' => 'Включить дополнительную для отображения строку "Люди, на которых Вы подписаны"',
		'_type' => 'option',
	),
	array(
		'name' => 'options[staffOnline]',
		'selected' => $__vars['options']['staffOnline'],
		'label' => 'Включить блок "Команда форума онлайн"',
		'_dependent' => array($__templater->formCheckBox(array(
	), array(array(
		'name' => 'options[staffQuery]',
		'selected' => $__vars['options']['staffQuery'],
		'label' => 'Выполнять специальный запрос на отображение участников команды форума',
		'hint' => 'Когда больше пользователей находятся онлайн, чем разрешено показывать (см. выше), некоторые пользователи из команды форума могут не отображаться в списке. Включение этой опции приведет к необходимости выполнения дополнительного запроса к базе данных, чтобы обеспечить отображение всех участников команды.',
		'_type' => 'option',
	)))),
		'_type' => 'option',
	)), array(
	));
	return $__finalCompiled;
}
);