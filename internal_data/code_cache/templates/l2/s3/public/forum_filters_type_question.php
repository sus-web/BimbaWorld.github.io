<?php
// FROM HASH: b73685ea8d2068966672fc7bc1791589
return array(
'extends' => function($__templater, array $__vars) { return 'forum_filters'; },
'extensions' => array('before_date_limit' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
	<div class="menu-row menu-row--separated">
		';
	$__compilerTemp1 = array(array(
		'name' => 'unsolved',
		'selected' => $__vars['filters']['unsolved'],
		'label' => 'Показывать только нерешённые вопросы',
		'_type' => 'option',
	)
,array(
		'name' => 'unanswered',
		'selected' => $__vars['filters']['unanswered'],
		'label' => 'Показывать только вопросы, не имеющие ответов',
		'_type' => 'option',
	));
	if ($__vars['xf']['visitor']['user_id']) {
		$__compilerTemp1[] = array(
			'name' => 'your_answers',
			'selected' => $__vars['filters']['your_answers'],
			'label' => 'Показывать только вопросы с моими ответами',
			'_type' => 'option',
		);
	}
	$__finalCompiled .= $__templater->formCheckBox(array(
	), $__compilerTemp1) . '
	</div>
';
	return $__finalCompiled;
}),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . $__templater->renderExtension('before_date_limit', $__vars, $__extensions);
	return $__finalCompiled;
}
);