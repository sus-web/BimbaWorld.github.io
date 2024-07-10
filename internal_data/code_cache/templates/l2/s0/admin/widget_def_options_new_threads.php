<?php
// FROM HASH: ff0df4d873e7db43f4be0b170d4f70c2
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
		'hint' => 'Полный стиль отображается в виде стандартного списка тем.',
		'_type' => 'option',
	),
	array(
		'value' => 'expanded',
		'label' => 'Расширенный',
		'hint' => 'Расширенное отображение, показывается в виде списка отформатированных первых сообщений.',
		'_dependent' => array($__templater->formCheckBox(array(
	), array(array(
		'name' => 'options[show_expanded_title]',
		'selected' => $__vars['options']['show_expanded_title'],
		'label' => '
				' . 'Отображение названия виджета над списком тем.' . '
			',
		'_type' => 'option',
	)))),
		'_type' => 'option',
	)), array(
		'label' => 'Стиль отображения',
	)) . '

';
	$__compilerTemp1 = array(array(
		'value' => '',
		'label' => 'Все форумы',
		'_type' => 'option',
	));
	$__compilerTemp2 = $__templater->method($__vars['nodeTree'], 'getFlattened', array(0, ));
	if ($__templater->isTraversable($__compilerTemp2)) {
		foreach ($__compilerTemp2 AS $__vars['treeEntry']) {
			$__compilerTemp1[] = array(
				'value' => $__vars['treeEntry']['record']['node_id'],
				'disabled' => ($__vars['treeEntry']['record']['node_type_id'] != 'Forum'),
				'label' => '
			' . $__templater->filter($__templater->func('repeat', array('&nbsp;&nbsp;', $__vars['treeEntry']['depth'], ), false), array(array('raw', array()),), true) . ' ' . $__templater->escape($__vars['treeEntry']['record']['title']) . '
		',
				'_type' => 'option',
			);
		}
	}
	$__finalCompiled .= $__templater->formSelectRow(array(
		'name' => 'options[node_ids][]',
		'value' => ($__vars['options']['node_ids'] ?: ''),
		'multiple' => 'multiple',
		'size' => '7',
	), $__compilerTemp1, array(
		'label' => 'Форумы',
		'explain' => 'Отображать темы только из выбранных форумов.',
	)) . '

' . $__templater->formSelectRow(array(
		'name' => 'options[date_limit_days]',
		'value' => $__vars['options']['date_limit_days'],
	), array(array(
		'value' => '0',
		'label' => 'Нет',
		'_type' => 'option',
	),
	array(
		'value' => '7',
		'label' => '' . '7' . ' дней',
		'_type' => 'option',
	),
	array(
		'value' => '14',
		'label' => '' . '14' . ' дней',
		'_type' => 'option',
	),
	array(
		'value' => '30',
		'label' => '' . '30' . ' дней',
		'_type' => 'option',
	),
	array(
		'value' => '60',
		'label' => '' . '2' . ' месяцев',
		'_type' => 'option',
	),
	array(
		'value' => '90',
		'label' => '' . '3' . ' месяцев',
		'_type' => 'option',
	),
	array(
		'value' => '182',
		'label' => '' . '6' . ' месяцев',
		'_type' => 'option',
	),
	array(
		'value' => '365',
		'label' => '1 год',
		'_type' => 'option',
	)), array(
		'label' => 'Лимит даты',
		'explain' => 'Это можно использовать на загруженных форумах для повышения производительности, по умолчанию перечисляя только недавно опубликованные темы.',
	));
	return $__finalCompiled;
}
);