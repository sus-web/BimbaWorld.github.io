<?php
// FROM HASH: 244e288eb2fadfbe7c9e43fd465c2fb1
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Подтверждение действия');
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Пожалуйста, подтвердите удаление' . $__vars['xf']['language']['label_separator'] . '
				<strong><a href="' . $__templater->func('link', array($__vars['groupLinkPrefix'] . '/edit', $__vars['prefixGroup'], ), true) . '" data-xf-click="overlay">' . $__templater->escape($__vars['prefixGroup']['title']) . '</a></strong>
				' . 'Префиксы, принадлежащие этой группе, будут отделены, а не удалены.' . '
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'delete',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array($__vars['groupLinkPrefix'] . '/delete', $__vars['prefixGroup'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);