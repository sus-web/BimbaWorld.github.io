<?php
// FROM HASH: e1a62c0928ee5f91c3c66d33f37a1cd7
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Подтверждение действия');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['template']['style_id']) {
		$__compilerTemp1 .= '
					' . 'Пожалуйста, подтвердите то, что Вы хотите вернуть изменения, сделанные в' . $__vars['xf']['language']['label_separator'] . '
				';
	} else {
		$__compilerTemp1 .= '
					' . 'Пожалуйста, подтвердите удаление' . $__vars['xf']['language']['label_separator'] . '
				';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . $__compilerTemp1 . '
				<strong>
					' . ($__vars['template']['style_id'] ? (('<em class="u-dimmed">' . $__templater->escape($__vars['template']['Style']['title'])) . ':</em> ') : '') . '
					<a href="' . $__templater->func('link', array('templates/edit', $__vars['template'], ), true) . '">' . $__templater->escape($__vars['template']['title']) . '</a>
				</strong>
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => ($__vars['template']['style_id'] ? 'Вернуть' : 'Удалить'),
		'icon' => ((!$__vars['template']['style_id']) ? 'delete' : ''),
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
	' . $__templater->func('redirect_input', array(null, null, true)) . '
', array(
		'action' => $__templater->func('link', array('templates/delete', $__vars['template'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);