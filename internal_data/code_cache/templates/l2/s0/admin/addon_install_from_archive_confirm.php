<?php
// FROM HASH: ef2765f2c15ca51f8f9a396a3881b7db
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Установить/обновить из архива');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__templater->isTraversable($__vars['plannedActions'])) {
		foreach ($__vars['plannedActions'] AS $__vars['addOnId'] => $__vars['action']) {
			$__compilerTemp1 .= '
					';
			$__compilerTemp2 = '';
			if ($__vars['action']['action'] == 'install') {
				$__compilerTemp2 .= '
								' . 'Установить' . '
							';
			} else if ($__vars['action']['action'] == 'upgrade') {
				$__compilerTemp2 .= '
								' . 'Обновить' . '
								';
				$__vars['displayAdvanced'] = true;
				$__compilerTemp2 .= '
							';
			} else if ($__vars['action']['action'] == 'rebuild') {
				$__compilerTemp2 .= '
								' . 'Перестроить данные' . '
								';
				$__vars['displayAdvanced'] = true;
				$__compilerTemp2 .= '
							';
			}
			$__compilerTemp3 = '';
			if ($__vars['action']['action'] == 'upgrade') {
				$__compilerTemp3 .= '
								' . $__templater->escape($__vars['action']['oldVersion']) . ' -&gt; ' . $__templater->escape($__vars['action']['version']) . '
							';
			} else {
				$__compilerTemp3 .= '
								' . $__templater->escape($__vars['action']['version']) . '
							';
			}
			$__compilerTemp1 .= $__templater->dataRow(array(
				'rowclass' => 'dataList-row--noHover',
			), array(array(
				'_type' => 'cell',
				'html' => '<span data-xf-init="tooltip" title="' . $__templater->escape($__vars['addOnId']) . '">' . $__templater->escape($__vars['action']['title']) . '</span>',
			),
			array(
				'_type' => 'cell',
				'html' => '
							' . $__compilerTemp2 . '
						',
			),
			array(
				'_type' => 'cell',
				'html' => '
							' . $__compilerTemp3 . '
						',
			))) . '
				';
		}
	}
	$__compilerTemp4 = '';
	if ($__vars['displayAdvanced']) {
		$__compilerTemp4 .= '
			<h3 class="block-formSectionHeader">
				' . 'Расширенные настройки' . '
			</h3>
			<div class="block-body">
				' . $__templater->formCheckBoxRow(array(
		), array(array(
			'name' => 'force_overwrite',
			'label' => 'Перезаписать существующие файлы для перестроения/обновления плагина',
			'hint' => 'По умолчанию только изменённые файлы будут скопированы из архива плагина. Чтобы перезаписать все существующие файлы, отметьте эту опцию.',
			'_type' => 'option',
		)), array(
			'rowtype' => 'fullWidth',
		)) . '
			</div>
		';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->dataList('
				' . $__templater->dataRow(array(
		'rowtype' => 'header',
	), array(array(
		'_type' => 'cell',
		'html' => 'Плагин',
	),
	array(
		'_type' => 'cell',
		'html' => 'Действие',
	),
	array(
		'_type' => 'cell',
		'html' => 'Версия',
	))) . '
				' . $__compilerTemp1 . '
			', array(
		'data-xf-init' => 'responsive-data-list',
	)) . '
		</div>
		' . $__compilerTemp4 . '
		' . $__templater->formSubmitRow(array(
		'submit' => 'Подтвердить действия',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
	' . $__templater->formHiddenVal('batch_id', $__vars['batch']['batch_id'], array(
	)) . '
', array(
		'action' => $__templater->func('link', array('add-ons/install-from-archive-confirm', ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
}
);