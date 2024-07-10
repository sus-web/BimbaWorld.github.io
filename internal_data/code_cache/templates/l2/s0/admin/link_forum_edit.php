<?php
// FROM HASH: 8775b28dc3091f40b14d335af847fc57
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['node'], 'isInsert', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Добавить форум-ссылку');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактировать форум-ссылку' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['node']['title']));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['node'], 'isUpdate', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('', array(
			'href' => $__templater->func('link', array('link-forums/delete', $__vars['node'], ), false),
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
			'label' => 'Select the link node image',
			'explain' => 'Select the image you want to show in the links nodes. The image you select will apply to the forum link nodes.',
		)) . '

';
		if ($__templater->method($__vars['node'], 'getNodeImage', array())) {
			$__compilerTemp1 .= '
	' . $__templater->formRow('
		<img src="' . $__templater->func('base_url', array($__templater->method($__vars['node'], 'getNodeImage', array()), ), true) . '" />
	', array(
				'label' => 'Node block image',
			)) . '
';
		} else {
			$__compilerTemp1 .= '
	' . $__templater->formRow('
		' . 'No images were selected for the link node.' . '
	', array(
				'label' => 'Node block image',
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

			' . $__templater->formTextBoxRow(array(
		'name' => 'link_url',
		'value' => $__vars['link']['link_url'],
	), array(
		'label' => 'Ссылка',
		'explain' => 'При нажатии на этот форум, пользователи будут перенаправлены по указанной ссылке.',
	)) . '

			' . $__templater->callMacro('node_edit_macros', 'position', array(
		'node' => $__vars['node'],
		'nodeTree' => $__vars['nodeTree'],
	), $__vars) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('link-forums/save', $__vars['node'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);