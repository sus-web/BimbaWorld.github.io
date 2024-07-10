<?php
// FROM HASH: c236d6076b1c7e8ee84dd10260f521ef
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
	$__finalCompiled .= $__templater->formRadioRow(array(
		'name' => 'options[source]',
		'value' => $__vars['options']['source'],
	), array(array(
		'value' => 'current',
		'checked' => 'checked',
		'label' => 'Current all forum',
		'_type' => 'option',
	),
	array(
		'value' => 'currentChild',
		'label' => 'Current all forum and child nodes',
		'_type' => 'option',
	),
	array(
		'value' => 'custom',
		'label' => 'Select custom',
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'options[node_ids][]',
		'value' => ($__vars['options']['node_ids'] ?: ''),
		'multiple' => 'multiple',
		'size' => '7',
	), $__compilerTemp1)),
		'_type' => 'option',
	)), array(
		'label' => 'Select threads sources',
		'explain' => 'Отображать темы только из выбранных форумов.',
	)) . '
' . $__templater->formRadioRow(array(
		'name' => 'options[threadUser]',
		'value' => $__vars['options']['threadUser'],
	), array(array(
		'value' => 'all',
		'checked' => 'checked',
		'label' => 'All users',
		'_type' => 'option',
	),
	array(
		'value' => 'custom',
		'label' => 'Custom user',
		'_dependent' => array($__templater->formTextBox(array(
		'name' => 'options[username]',
		'value' => $__vars['options']['username'],
		'ac' => 'single',
		'autocomplete' => 'on',
		'maxlength' => $__templater->func('max_length', array($__vars['xf']['visitor'], 'username', ), false),
		'placeholder' => 'username' . '...',
	))),
		'_type' => 'option',
	)), array(
		'label' => 'Threads user(s)',
		'explain' => 'Only include threads by...',
	)) . '

' . $__templater->formSelectRow(array(
		'name' => 'options[type]',
		'value' => $__vars['options']['type'],
	), array(array(
		'value' => 'latestThreads',
		'checked' => 'checked',
		'label' => 'Последние темы',
		'_type' => 'option',
	),
	array(
		'value' => 'latestReplies',
		'label' => 'Latest replies',
		'_type' => 'option',
	),
	array(
		'value' => 'latestUnread',
		'label' => 'Latest unread',
		'_type' => 'option',
	)), array(
		'label' => 'Отфильтровать',
		'explain' => 'Select filter type to news ticker.',
	)) . '

' . $__templater->formSelectRow(array(
		'name' => 'options[sticky]',
		'value' => $__vars['options']['sticky'],
	), array(array(
		'value' => 'none',
		'checked' => 'checked',
		'hint' => 'select_both_sticky_and_non_sticky_threads',
		'label' => 'Нет',
		'_type' => 'option',
	),
	array(
		'value' => 'yes',
		'hint' => 'only_select_sticky_threads',
		'label' => 'Да',
		'_type' => 'option',
	),
	array(
		'value' => 'no',
		'hint' => 'only_select_non_sticky_threads',
		'label' => 'Нет',
		'_type' => 'option',
	)), array(
		'label' => 'Sticky threads',
	)) . '

' . $__templater->formRadioRow(array(
		'name' => 'options[timeLapse]',
		'value' => $__vars['options']['timeLapse'],
	), array(array(
		'value' => 'allTime',
		'checked' => 'checked',
		'label' => 'Всё время',
		'_type' => 'option',
	),
	array(
		'value' => 'custom',
		'label' => 'Select custom',
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'options[customTime]',
		'value' => $__vars['options']['customTime'],
	))),
		'_type' => 'option',
	)), array(
		'label' => 'Thread Date Cut Off (days)',
		'explain' => 'Enter the number of days to cut off the list of threads. Select all If you want to include all threads from beginning.',
	));
	return $__finalCompiled;
}
);