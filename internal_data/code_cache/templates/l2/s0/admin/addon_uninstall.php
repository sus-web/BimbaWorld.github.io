<?php
// FROM HASH: 3cca502c783f29af106c25142fff16da
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Подтверждение действия');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__templater->method($__vars['addOn'], 'isLegacy', array())) {
		$__compilerTemp1 .= '
					<div class="blockMessage blockMessage--warning blockMessage--iconic">
						' . 'Удаление устаревших плагинов может оставить осиротевшие данные. Обновите плагин до совместимости с новой версией XenForo перед удалением, если это возможно.' . '
					</div>
				';
	} else {
		$__compilerTemp1 .= '
					<div class="blockMessage blockMessage--important blockMessage--iconic">
						' . 'Это действие удалит все данные, созданные плагином.' . '
					</div>
				';
	}
	$__finalCompiled .= $__templater->form('

	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Пожалуйста, подтвердите удаление следующего плагина' . $__vars['xf']['language']['label_separator'] . '
				<strong>' . $__templater->escape($__vars['addOn']['title']) . ' ' . $__templater->escape($__vars['addOn']['version_string']) . '</strong>
				' . $__compilerTemp1 . '
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'submit' => 'Удалить',
		'icon' => 'delete',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>

	' . $__templater->func('redirect_input', array(null, null, true)) . '

', array(
		'action' => $__templater->func('link', array('add-ons/uninstall', $__vars['addOn'], ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
}
);