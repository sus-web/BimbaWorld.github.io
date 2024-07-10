<?php
// FROM HASH: 18b9a4d6141170646eb821d09b362521
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formRadioRow(array(
		'name' => $__vars['inputName'] . '[type]',
	), array(array(
		'selected' => $__vars['option']['option_value']['type'] == '',
		'label' => 'Нет политики конфиденциальности',
		'_type' => 'option',
	),
	array(
		'value' => 'default',
		'selected' => $__vars['option']['option_value']['type'] == 'default',
		'label' => 'URL-адрес по умолчанию' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->func('link_type', array('public', 'canonical:help/privacy-policy', ), true),
		'_type' => 'option',
	),
	array(
		'value' => 'custom',
		'selected' => $__vars['option']['option_value']['type'] == 'custom',
		'label' => 'Собственный URL-адрес',
		'_dependent' => array($__templater->formTextBox(array(
		'name' => $__vars['inputName'] . '[custom]',
		'value' => $__vars['option']['option_value']['custom'],
	))),
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