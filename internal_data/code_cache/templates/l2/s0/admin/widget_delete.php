<?php
// FROM HASH: b036b7e6c422477920de74f624c5880d
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Подтверждение действия');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['positionId']) {
		$__compilerTemp1 .= '
					' . 'Пожалуйста, подтвердите то, что Вы хотите удалить следующий виджет с позиции \'' . $__templater->escape($__vars['positionId']) . '\'.' . '
				';
	} else {
		$__compilerTemp1 .= '
					' . 'Пожалуйста, подтвердите удаление' . $__vars['xf']['language']['label_separator'] . '
				';
	}
	$__compilerTemp2 = '';
	if ($__templater->func('count', array($__vars['widget']['positions'], ), false) == 1) {
		$__compilerTemp2 .= '
			<div class="block-body">
				' . $__templater->formCheckBoxRow(array(
		), array(array(
			'name' => 'delete',
			'label' => 'Это последняя позиция для данного виджета. Навсегда удалить виджет.',
			'_type' => 'option',
		)), array(
			'rowtype' => 'fullWidth noLabel',
		)) . '
			</div>
		';
	} else if ((!$__vars['positionId']) AND $__templater->func('count', array($__vars['widget']['positions'], ), false)) {
		$__compilerTemp2 .= '
			<div class="block-row">
				<div class="blockMessage blockMessage--close blockMessage--warning blockMessage--iconic blockMessage--iconic">
					' . 'Этот виджет в настоящее время используется в ' . $__templater->func('count', array($__vars['widget']['positions'], ), true) . ' позиции(ях).' . '
				</div>
			</div>
		';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . $__compilerTemp1 . '
				<strong><a href="' . $__templater->func('link', array('widgets/edit', $__vars['widget'], ), true) . '">' . $__templater->escape($__vars['widget']['title']) . '</a></strong>
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__compilerTemp2 . '
		' . $__templater->formSubmitRow(array(
		'icon' => 'delete',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('widgets/delete', $__vars['widget'], array('position_id' => $__vars['positionId'], ), ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);