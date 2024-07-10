<?php
// FROM HASH: c5a1f5c9c8f1c1f107d56f8f1328c9f8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['category'], 'isInsert', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Добавить категорию');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактировать категорию' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['node']['title']));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['category'], 'isUpdate', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('', array(
			'href' => $__templater->func('link', array('categories/delete', $__vars['node'], ), false),
			'icon' => 'delete',
			'overlay' => 'true',
		), '', array(
		)) . '
');
	}
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['xf']['options']['xm_node_image_enable']) {
		$__compilerTemp1 .= '
' . $__templater->formUploadRow(array(
			'name' => 'upload',
			'accept' => '.gif,.jpeg,.jpg,.jpe,.png',
			'value' => $__vars['node']['node_background'],
		), array(
			'label' => 'Select the category header image',
			'explain' => 'Select the image you want to show in the category blocks. The image you select will apply to the category blocks.',
		)) . '

';
		if ($__templater->method($__vars['node'], 'getNodeImage', array())) {
			$__compilerTemp1 .= '
	' . $__templater->formRow('
		<img src="' . $__templater->func('base_url', array($__templater->method($__vars['node'], 'getNodeImage', array()), ), true) . '" />
	', array(
				'label' => 'Category block header image',
			)) . '
';
		} else {
			$__compilerTemp1 .= '
	' . $__templater->formRow('
		' . 'No images were selected for the category block header' . '
	', array(
				'label' => 'Category block header image',
			)) . '
';
		}
		$__compilerTemp1 .= '
';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->callMacro('node_edit_macros', 'title', array(
		'node' => $__vars['node'],
	), $__vars) . '
			' . $__templater->callMacro('node_edit_macros', 'description', array(
		'node' => $__vars['node'],
	), $__vars) . '
' . $__compilerTemp1 . '
' . $__templater->formTextBoxRow(array(
		'name' => 'node[node_background]',
		'value' => $__vars['node']['node_background'],
	), array(
		'label' => 'Node background',
	)) . '

			<hr class="formRowSep" />
			' . $__templater->callMacro('node_edit_macros', 'node_name', array(
		'node' => $__vars['node'],
		'additionalExplain' => 'Актуально, только если включена опция: <a href="' . $__templater->func('link', array('options/categoryOwnPage/view', ), true) . '">Создавать страницы для категорий</a>.',
	), $__vars) . '
			' . $__templater->callMacro('node_edit_macros', 'position', array(
		'node' => $__vars['node'],
		'nodeTree' => $__vars['nodeTree'],
	), $__vars) . '
			' . $__templater->callMacro('node_edit_macros', 'navigation', array(
		'node' => $__vars['node'],
		'navChoices' => $__vars['navChoices'],
	), $__vars) . '
			' . $__templater->callMacro('node_edit_macros', 'style', array(
		'node' => $__vars['node'],
		'styleTree' => $__vars['styleTree'],
	), $__vars) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('categories/save', $__vars['node'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);