<?php
// FROM HASH: 3998b65f38c2ee8fa5989a2c717edd96
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
		'explain' => 'Включать только сообщения в выбранных форумах.',
	)) . '

' . $__templater->formCheckBoxRow(array(
	), array(array(
		'label' => 'Оценка реакций не менее X',
		'selected' => $__vars['options']['min_reaction_score'] !== null,
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'options[min_reaction_score]',
		'value' => ($__vars['options']['min_reaction_score'] ?: 0),
	))),
		'_type' => 'option',
	)), array(
		'label' => 'Включать только сообщения с' . '...',
		'rowtype' => 'noColon',
	)) . '

';
	$__compilerTemp3 = $__templater->mergeChoiceOptions(array(), $__vars['sortOrders']);
	$__finalCompiled .= $__templater->formRow('

	<div class="inputPair">
		' . $__templater->formSelect(array(
		'name' => 'options[order]',
		'value' => $__vars['options']['order'],
	), $__compilerTemp3) . '
		' . $__templater->formSelect(array(
		'name' => 'options[direction]',
		'value' => $__vars['options']['direction'],
	), array(array(
		'value' => 'ASC',
		'label' => 'По возрастанию',
		'_type' => 'option',
	),
	array(
		'value' => 'DESC',
		'label' => 'По убыванию',
		'_type' => 'option',
	))) . '
	</div>
', array(
		'rowtype' => 'input',
		'label' => 'Сортировка',
	));
	return $__finalCompiled;
}
);