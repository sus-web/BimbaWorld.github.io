<?php
// FROM HASH: 29524f1c14da9b16c94a9fea23b0411d
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Импортировать язык');
	$__finalCompiled .= '

';
	$__compilerTemp1 = array(array(
		'label' => $__vars['xf']['language']['parenthesis_open'] . 'Нет родителя' . $__vars['xf']['language']['parenthesis_close'],
		'_type' => 'option',
	));
	$__compilerTemp2 = $__templater->method($__vars['languageTree'], 'getFlattened', array(0, ));
	if ($__templater->isTraversable($__compilerTemp2)) {
		foreach ($__compilerTemp2 AS $__vars['treeEntry']) {
			$__compilerTemp1[] = array(
				'value' => $__vars['treeEntry']['record']['language_id'],
				'label' => $__templater->func('repeat', array('--', $__vars['treeEntry']['depth'], ), true) . '
								' . $__templater->escape($__vars['treeEntry']['record']['title']) . '
							',
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp3 = array();
	$__compilerTemp4 = $__templater->method($__vars['languageTree'], 'getFlattened', array(0, ));
	if ($__templater->isTraversable($__compilerTemp4)) {
		foreach ($__compilerTemp4 AS $__vars['treeEntry']) {
			$__compilerTemp3[] = array(
				'value' => $__vars['treeEntry']['record']['language_id'],
				'label' => $__templater->func('repeat', array('--', $__vars['treeEntry']['depth'], ), true) . '
								' . $__templater->escape($__vars['treeEntry']['record']['title']) . '
							',
				'_type' => 'option',
			);
		}
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formUploadRow(array(
		'name' => 'upload',
		'accept' => '.xml',
	), array(
		'label' => 'Импорт из загруженного XML-файла',
	)) . '

			' . $__templater->formRadioRow(array(
		'name' => 'target',
	), array(array(
		'value' => 'new',
		'checked' => 'checked',
		'label' => 'Родительский язык' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'parent_language_id',
	), $__compilerTemp1)),
		'_type' => 'option',
	),
	array(
		'value' => 'overwrite',
		'label' => 'Перезаписать язык',
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'overwrite_language_id',
	), $__compilerTemp3)),
		'html' => '<div class="formRow-explain">' . 'Перезапись языка заменяет только фразы в нём. Все остальные языковые свойства останутся неизменными.' . '</div>',
		'_type' => 'option',
	)), array(
		'label' => 'Импортировать как',
	)) . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'force',
		'label' => 'Пропустить проверки совместимости',
		'hint' => 'Выбор этого параметра позволит игнорировать проверки совместимости, выполняемые в процессе импорта. Включайте данную опцию только в том случае, если действительно понимаете, что делаете.',
		'_type' => 'option',
	)), array(
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'import',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('languages/import', ), false),
		'upload' => 'true',
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);