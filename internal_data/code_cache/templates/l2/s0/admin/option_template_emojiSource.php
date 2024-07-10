<?php
// FROM HASH: 9cc401a8212a4ff400effa751f59762e
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formRadioRow(array(
		'name' => $__vars['inputName'] . '[source]',
		'value' => $__vars['option']['option_value']['source'],
	), array(array(
		'value' => 'cdn',
		'label' => 'Работать с предпочтительным CDN',
		'_type' => 'option',
	),
	array(
		'value' => 'local',
		'label' => 'Хост из следующей локации',
		'_dependent' => array('
			' . $__templater->formTextBox(array(
		'name' => $__vars['inputName'] . '[path]',
		'value' => $__vars['option']['option_value']['path'],
		'size' => '30',
	)) . '
			<dfn class="inputChoices-explain">' . 'Значение выше должно быть относительным или абсолютным URL-адресом к директории, в которой хранятся соответствующие PNG-файлы.' . '</dfn>
		'),
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