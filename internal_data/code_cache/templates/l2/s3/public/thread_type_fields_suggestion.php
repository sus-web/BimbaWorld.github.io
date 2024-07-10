<?php
// FROM HASH: d2a138a079a0edcd60aa15ac086d5145
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
			'name' => 'suggestion[allow_voting]',
			'value' => $__vars['typeData']['allow_voting'],
		), array(array(
			'value' => 'yes',
			'label' => 'Да',
			'_type' => 'option',
		),
		array(
			'value' => 'no',
			'label' => 'Нет',
			'hint' => 'Опции голосования не будет отображаться. Это в первую очередь полезно для объявлений или заккреплённых тем, которые не являются прямыми предложениями.',
			'_type' => 'option',
		),
		array(
			'value' => 'paused',
			'label' => 'Пауза',
			'hint' => 'Новые голоса не будут разрешены, но будут отображены существующие. Обратите внимание, что для реализованных и закрытых предложений новые голоса никогда не принимаются.',
			'_type' => 'option',
		)), array(
			'label' => 'Разрешить голосовать за предложения',
			'rowtype' => $__vars['rowType'],
		)) . '
';
	}
	return $__finalCompiled;
}
);