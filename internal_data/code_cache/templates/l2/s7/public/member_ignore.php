<?php
// FROM HASH: bf0e9802e61944f15c0fab32327cd5f5
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped(($__vars['isIgnoring'] ? 'Больше не игнорировать ' . $__templater->escape($__vars['user']['username']) . '' : 'Игнорировать пользователя ' . $__templater->escape($__vars['user']['username']) . ''));
	$__finalCompiled .= '

';
	$__templater->breadcrumb($__templater->preEscaped($__templater->escape($__vars['user']['username'])), $__templater->func('link', array('members', $__vars['user'], ), false), array(
	));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['isIgnoring']) {
		$__compilerTemp1 .= '
					' . 'Пожалуйста, подтвердите прекращение игнорирования этого пользователя' . $__vars['xf']['language']['label_separator'] . '
				';
	} else {
		$__compilerTemp1 .= '
					' . 'Пожалуйста, подтвердите, что Вы хотите игнорировать этого пользователя' . $__vars['xf']['language']['label_separator'] . '
				';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . $__compilerTemp1 . '
				<strong><a href="' . $__templater->func('link', array('members', $__vars['user'], ), true) . '">' . $__templater->escape($__vars['user']['username']) . '</a></strong>
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => ($__vars['isIgnoring'] ? '- Игнор.' : '+ Игнор.'),
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>

	' . $__templater->func('redirect_input', array(null, null, true)) . '
', array(
		'action' => $__templater->func('link', array('members/ignore', $__vars['user'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);