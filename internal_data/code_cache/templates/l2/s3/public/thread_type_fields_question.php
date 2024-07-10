<?php
// FROM HASH: dbc35f63dbd20cfeeb2a4f035859acce
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if (($__vars['context'] == 'create') AND ($__vars['subContext'] == 'quick')) {
		$__finalCompiled .= '
	';
		$__vars['rowType'] = 'fullWidth noGutter mergeNext';
		$__finalCompiled .= '
';
	} else if (($__vars['context'] == 'edit') AND ($__vars['subContext'] == 'first_post_quick')) {
		$__finalCompiled .= '
	';
		$__vars['rowType'] = 'fullWidth mergeNext';
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__vars['rowType'] = '';
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['thread'], 'canEditModeratorFields', array())) {
		$__finalCompiled .= '
	' . $__templater->formRadioRow(array(
			'name' => 'question[allow_question_actions]',
			'value' => $__vars['typeData']['allow_question_actions'],
		), array(array(
			'value' => 'yes',
			'label' => 'Да',
			'_type' => 'option',
		),
		array(
			'value' => 'no',
			'label' => 'Нет',
			'hint' => 'Голосования и/или решения не будут отображаться. Это в первую очередь полезно для объявлений или закреплённых тем, которые не являются непосредственно вопросами.',
			'_type' => 'option',
		),
		array(
			'value' => 'paused',
			'label' => 'Пауза',
			'hint' => 'Голосование не будет разрешено, и решение не может быть выбрано, но будут отображены существующие значения.',
			'_type' => 'option',
		)), array(
			'label' => 'Разрешить использование системы ответов',
			'rowtype' => $__vars['rowType'],
		)) . '
';
	}
	return $__finalCompiled;
}
);