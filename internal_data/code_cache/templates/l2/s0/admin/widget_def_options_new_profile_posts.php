<?php
// FROM HASH: 995868c4e457d86c04bdb0f2461e2adb
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<hr class="formRowSep" />

' . $__templater->formNumberBoxRow(array(
		'name' => 'options[limit]',
		'value' => $__vars['options']['limit'],
		'min' => '1',
	), array(
		'label' => 'Максимальное количество записей',
	)) . '

' . $__templater->formRadioRow(array(
		'name' => 'options[style]',
		'value' => ($__vars['options']['style'] ?: 'simple'),
	), array(array(
		'value' => 'simple',
		'label' => 'Простой',
		'hint' => 'Простой вид, предназначен для узких пространств, таких как боковые панели.',
		'_type' => 'option',
	),
	array(
		'value' => 'full',
		'label' => 'Стандартный',
		'hint' => 'Отображается так же, как при просмотре профиля пользователя.',
		'_type' => 'option',
	)), array(
		'label' => 'Стиль отображения',
	)) . '

' . $__templater->formRadioRow(array(
		'name' => 'options[filter]',
		'value' => ($__vars['options']['filter'] ?: 'latest'),
	), array(array(
		'value' => 'latest',
		'label' => 'Последние',
		'hint' => 'Список всех последних сообщений профилей (по умолчанию для гостей).',
		'_type' => 'option',
	),
	array(
		'value' => 'followed',
		'label' => 'Подписчики',
		'hint' => 'Список сообщений профилей пользователей, на которых автор или человек подписан.',
		'_type' => 'option',
	)), array(
		'label' => 'Отфильтровать',
	));
	return $__finalCompiled;
}
);