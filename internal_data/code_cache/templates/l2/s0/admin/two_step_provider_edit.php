<?php
// FROM HASH: 6bb7ed53993f2ec4898a594513d45812
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактировать' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['provider']['title']));
	$__finalCompiled .= '

';
	if ((!$__templater->method($__vars['provider'], 'canEdit', array()))) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--important blockMessage--iconic">
		' . 'Для данного элемента может быть отредактировано только ограниченное количество полей.' . '
	</div>
';
	}
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
					' . $__templater->filter($__templater->method($__vars['provider'], 'renderOptions', array()), array(array('raw', array()),), true) . '
				';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__compilerTemp1 .= '
				<hr class="formRowSep" />
				' . $__compilerTemp2 . '
			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formRow('
				' . $__templater->escape($__vars['provider']['provider_id']) . '
			', array(
		'label' => 'ID поставщика',
	)) . '

			' . $__templater->formRow('
				' . $__templater->escape($__vars['provider']['provider_class']) . '
			', array(
		'label' => 'Класс поставщика',
	)) . '

			' . $__templater->formRow('
				' . $__templater->escape($__vars['provider']['title']) . '
			', array(
		'label' => 'Заголовок',
	)) . '

			' . $__templater->formRow('
				' . $__templater->escape($__vars['provider']['description']) . '
			', array(
		'label' => 'Описание',
	)) . '

			' . $__templater->callMacro('display_order_macros', 'row', array(
		'name' => 'priority',
		'value' => $__vars['provider']['priority'],
	), $__vars) . '

			' . $__compilerTemp1 . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('two-step/save', $__vars['provider'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);