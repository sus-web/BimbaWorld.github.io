<?php
// FROM HASH: d20c043f71239f616b471886f17f2cc9
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped(($__vars['isStarred'] ? 'Снять пометку' : 'Пометить'));
	$__finalCompiled .= '

';
	$__templater->breadcrumb($__templater->preEscaped('Переписки'), $__templater->func('link', array('conversations', ), false), array(
	));
	$__finalCompiled .= '
';
	$__templater->breadcrumb($__templater->preEscaped($__templater->escape($__vars['conversation']['title'])), $__templater->func('link', array('conversations', $__vars['conversation'], ), false), array(
	));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['isStarred']) {
		$__compilerTemp1 .= '
					' . 'Пожалуйста, подтвердите, что Вы хотите снять пометку со следующей переписки' . $__vars['xf']['language']['label_separator'] . '
				';
	} else {
		$__compilerTemp1 .= '
					' . 'Пожалуйста, подтвердите, что Вы хотите пометить следующую переписку' . $__vars['xf']['language']['label_separator'] . '
				';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . $__compilerTemp1 . '
				<strong><a href="' . $__templater->func('link', array('conversations', $__vars['conversation'], ), true) . '">' . $__templater->escape($__vars['conversation']['title']) . '</a></strong>
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => ($__vars['isStarred'] ? 'Снять пометку' : 'Пометить'),
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>

	' . $__templater->func('redirect_input', array(null, null, true)) . '
', array(
		'action' => $__templater->func('link', array('conversations/star', $__vars['userConv'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);