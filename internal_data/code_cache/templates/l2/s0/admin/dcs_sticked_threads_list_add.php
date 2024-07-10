<?php
// FROM HASH: 292312981439bf5c3bafcdbae13d7f4d
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Add thread');
	$__finalCompiled .= '

' . $__templater->form('
<div class="block">
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formTextBoxRow(array(
		'name' => 'name',
		'required' => 'true',
	), array(
		'label' => 'Name',
	)) . '
			' . $__templater->formTextBoxRow(array(
		'name' => 'link',
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
		'action' => $__templater->func('link', array('dcs-sticked-threads/list/add-thread', ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);