<?php
// FROM HASH: 569be6191f3414bcd86d6db539eaebf6
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['widgetPosition'], 'isInsert', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Добавить позицию виджета');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактировать позицию виджета' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['widgetPosition']['title']));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['widgetPosition'], 'isUpdate', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('', array(
			'href' => $__templater->func('link', array('widgets/positions/delete', $__vars['widgetPosition'], ), false),
			'icon' => 'delete',
			'overlay' => 'true',
		), '', array(
		)) . '
');
	}
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formTextBoxRow(array(
		'name' => 'position_id',
		'value' => $__vars['widgetPosition']['position_id'],
		'maxlength' => $__templater->func('max_length', array($__vars['widgetPosition'], 'position_id', ), false),
		'dir' => 'ltr',
	), array(
		'label' => 'ID позиции',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'title',
		'value' => $__vars['widgetPosition']['MasterTitle']['phrase_text'],
	), array(
		'label' => 'Заголовок',
	)) . '

			' . $__templater->formCodeEditorRow(array(
		'name' => 'description',
		'value' => $__vars['widgetPosition']['MasterDescription']['phrase_text'],
		'mode' => 'html',
		'data-line-wrapping' => 'true',
		'class' => 'codeEditor--autoSize codeEditor--proportional',
	), array(
		'label' => 'Описание',
		'hint' => 'Вы можете использовать HTML',
	)) . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'active',
		'value' => '1',
		'selected' => $__vars['widgetPosition']['active'],
		'label' => 'Позиция виджета активна',
		'_type' => 'option',
	)), array(
	)) . '

			' . $__templater->callMacro('addon_macros', 'addon_edit', array(
		'addOnId' => $__vars['widgetPosition']['addon_id'],
	), $__vars) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('widgets/positions/save', $__vars['widgetPosition'], ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);