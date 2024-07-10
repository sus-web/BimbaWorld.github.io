<?php
// FROM HASH: 0ba26ed027ba2fd69f7f3314fbff40a3
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Thread' . ' #' . $__templater->escape($__vars['thread']['count']));
	$__finalCompiled .= '

' . $__templater->form('
<div class="block">
	<div class="block-container">
		<div class="block-body">
				' . $__templater->formTextBoxRow(array(
		'name' => 'name',
		'value' => $__vars['thread']['name'],
		'required' => 'true',
	), array(
		'label' => 'Name',
	)) . '
				' . $__templater->formTextBoxRow(array(
		'name' => 'link',
		'value' => $__vars['thread']['link'],
		'required' => 'true',
	), array(
		'label' => 'Link',
	)) . '
		</div>
	' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'save',
	), array(
	)) . '
	</div>
</div>
', array(
		'action' => $__templater->func('link', array('dcs-sticked-threads/list/save', $__vars['thread'], ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);