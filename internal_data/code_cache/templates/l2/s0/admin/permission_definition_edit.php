<?php
// FROM HASH: 87198be969eb2ee8be0892903f55c4c5
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['permission'], 'isInsert', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Добавить право');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактировать права' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['permission']['title']));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['permission'], 'isUpdate', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('', array(
			'href' => $__templater->func('link', array('permission-definitions/permissions/delete', $__vars['permission'], ), false),
			'icon' => 'delete',
			'overlay' => 'true',
		), '', array(
		)) . '
');
	}
	$__finalCompiled .= '

';
	$__compilerTemp1 = array(array(
		'value' => '',
		'_type' => 'option',
	));
	if ($__templater->isTraversable($__vars['interfaceGroups'])) {
		foreach ($__vars['interfaceGroups'] AS $__vars['interfaceGroup']) {
			$__compilerTemp1[] = array(
				'value' => $__vars['interfaceGroup']['interface_group_id'],
				'label' => $__templater->escape($__vars['interfaceGroup']['title']),
				'_type' => 'option',
			);
		}
	}
	$__finalCompiled .= $__templater->form('

	<div class="block-container">
		<div class="block-body">
			' . $__templater->formTextBoxRow(array(
		'name' => 'permission_group_id',
		'value' => $__vars['permission']['permission_group_id'],
		'maxlength' => $__templater->func('max_length', array($__vars['permission'], 'permission_group_id', ), false),
		'dir' => 'ltr',
	), array(
		'label' => 'Группа прав',
	)) . '
			' . $__templater->formTextBoxRow(array(
		'name' => 'permission_id',
		'value' => $__vars['permission']['permission_id'],
		'maxlength' => $__templater->func('max_length', array($__vars['permission'], 'permission_id', ), false),
		'dir' => 'ltr',
	), array(
		'label' => 'ID права доступа',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'title',
		'value' => ($__templater->method($__vars['permission'], 'exists', array()) ? $__vars['permission']['MasterTitle']['phrase_text'] : ''),
	), array(
		'label' => 'Заголовок',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'depend_permission_id',
		'value' => $__vars['permission']['depend_permission_id'],
		'maxlength' => $__templater->func('max_length', array($__vars['permission'], 'depend_permission_id', ), false),
	), array(
		'label' => 'Зависит от ID права доступа',
		'hint' => 'Должно быть в такой же группе прав.',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->formRadioRow(array(
		'name' => 'permission_type',
		'value' => $__vars['permission']['permission_type'],
	), array(array(
		'value' => 'flag',
		'label' => 'Флаг',
		'_type' => 'option',
	),
	array(
		'value' => 'integer',
		'label' => 'Целое (Integer)',
		'_type' => 'option',
	)), array(
		'label' => 'Тип прав',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->formSelectRow(array(
		'name' => 'interface_group_id',
		'value' => $__vars['permission']['interface_group_id'],
	), $__compilerTemp1, array(
		'label' => 'Интерфейсная группа',
	)) . '

			' . $__templater->callMacro('display_order_macros', 'row', array(
		'value' => $__vars['permission']['display_order'],
	), $__vars) . '

			<hr class="formRowSep" />

			' . $__templater->callMacro('addon_macros', 'addon_edit', array(
		'addOnId' => $__vars['permission']['addon_id'],
	), $__vars) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'save',
	), array(
	)) . '
	</div>

', array(
		'action' => $__templater->func('link', array('permission-definitions/permissions/save', $__vars['permission'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);