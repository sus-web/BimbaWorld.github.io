<?php
// FROM HASH: ca7abba3885657c900accf598e3c8e6a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => $__vars['inputName'] . '[showStaff]',
		'selected' => $__vars['option']['option_value']['showStaff'],
		'label' => 'Показывать баннер участника команды форума',
		'hint' => 'Если включено, участники команды форума автоматически будут иметь баннер с наивысшим приоритетом.',
		'_type' => 'option',
	),
	array(
		'name' => $__vars['inputName'] . '[displayMultiple]',
		'selected' => $__vars['option']['option_value']['displayMultiple'],
		'label' => 'Разрешить несколько баннеров',
		'hint' => 'Если включено, будут отображены все баннеры пользователя. Если отключено, то будет отображён только один баннер с наибольшим приоритетом.',
		'_type' => 'option',
	),
	array(
		'name' => $__vars['inputName'] . '[showStaffAndOther]',
		'selected' => $__vars['option']['option_value']['showStaffAndOther'],
		'label' => 'Показывать баннер участника команды форума и группы',
		'hint' => 'Если опция нескольких баннеров выключена, участники команды форума будут иметь только баннер команды. Если эта опция включена, то у них будет баннер участника команды форума и баннер группы с наивысшим приоритетом.',
		'_type' => 'option',
	),
	array(
		'name' => $__vars['inputName'] . '[hideUserTitle]',
		'selected' => $__vars['option']['option_value']['hideUserTitle'],
		'label' => 'Скрывать стандартное звание пользователя',
		'hint' => 'Если включено, то звание пользователя будет скрыто и отображено в баннере. Пользовательские, нестандартные звания никогда не будут скрыты.',
		'_type' => 'option',
	)), array(
		'label' => $__templater->escape($__vars['option']['title']),
		'hint' => $__templater->escape($__vars['hintHtml']),
		'explain' => $__templater->escape($__vars['explainHtml']),
		'html' => $__templater->escape($__vars['listedHtml']),
		'rowclass' => $__vars['rowClass'],
	));
	return $__finalCompiled;
}
);