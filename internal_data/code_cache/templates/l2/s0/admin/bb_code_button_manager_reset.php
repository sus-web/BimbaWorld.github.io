<?php
// FROM HASH: 39cf51384669813e639d5aaa0caa5e1e
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Сбросить конфигурацию кнопок');
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Пожалуйста, подтвердите то, что Вы хотите сбросить следующую конфигурацию кнопок' . $__vars['xf']['language']['label_separator'] . '
				<strong><a href="' . $__templater->func('link', array('button-manager/edit', null, array('type' => $__vars['type'], ), ), true) . '">' . $__templater->escape($__vars['typeTitle']) . '</a></strong>
			', array(
		'rowtype' => 'confirm close',
	)) . '
			' . $__templater->formInfoRow('
				<p class="block-rowMessage block-rowMessage--warning block-rowMessage--iconic">
					<strong>' . 'Примечание' . $__vars['xf']['language']['label_separator'] . '</strong>
					' . 'Это действие невозможно отменить. Конфигурация кнопок для этой панели инструментов будет сброшена до состояния по умолчанию.' . '
				</p>
			', array(
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'refresh',
		'submit' => 'Сбросить конфигурацию кнопок',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('button-manager/reset', null, array('type' => $__vars['type'], ), ), false),
		'ajax' => 'true',
		'class' => 'block',
		'data-force-flash-message' => 'on',
	));
	return $__finalCompiled;
}
);