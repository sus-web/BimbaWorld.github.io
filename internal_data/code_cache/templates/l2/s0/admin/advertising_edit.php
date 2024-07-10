<?php
// FROM HASH: f93ac72b52bf6aa6a45dffa9809fe1a8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['ad'], 'isInsert', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Добавить рекламу');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактировать рекламу' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['ad']['title']));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['ad'], 'isUpdate', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('', array(
			'href' => $__templater->func('link', array('advertising/delete', $__vars['ad'], ), false),
			'icon' => 'delete',
			'overlay' => 'true',
		), '', array(
		)) . '
');
	}
	$__finalCompiled .= '

';
	$__compilerTemp1 = array(array(
		'_type' => 'option',
	));
	$__compilerTemp1 = $__templater->mergeChoiceOptions($__compilerTemp1, $__vars['advertisingPositions']);
	$__compilerTemp2 = array();
	if ($__templater->isTraversable($__vars['userGroups'])) {
		foreach ($__vars['userGroups'] AS $__vars['userGroupId'] => $__vars['userGroupTitle']) {
			$__compilerTemp2[] = array(
				'value' => $__vars['userGroupId'],
				'label' => $__templater->escape($__vars['userGroupTitle']),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp3 = array();
	if ($__templater->isTraversable($__vars['userGroups'])) {
		foreach ($__vars['userGroups'] AS $__vars['userGroupId'] => $__vars['userGroupTitle']) {
			$__compilerTemp3[] = array(
				'value' => $__vars['userGroupId'],
				'label' => $__templater->escape($__vars['userGroupTitle']),
				'_type' => 'option',
			);
		}
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">

			' . $__templater->formTextBoxRow(array(
		'name' => 'title',
		'value' => $__vars['ad']['title'],
		'maxlength' => $__templater->func('max_length', array($__vars['ad'], 'title', ), false),
	), array(
		'label' => 'Заголовок',
		'explain' => 'Укажите короткий заголовок для этой рекламы. Он будет отображён на странице списка.',
	)) . '

			' . $__templater->formSelectRow(array(
		'name' => 'position_id',
		'value' => $__vars['ad']['position_id'],
		'data-xf-init' => 'desc-loader',
		'data-desc-url' => $__templater->func('link', array('advertising/get-position-description', ), false),
	), $__compilerTemp1, array(
		'label' => 'Позиция',
		'html' => '
					<div class="js-descTarget formRow-explain">' . $__templater->filter($__vars['ad']['AdvertisingPosition']['description'], array(array('raw', array()),), true) . '</div>
				',
	)) . '

			' . $__templater->formCodeEditorRow(array(
		'name' => 'ad_html',
		'value' => $__vars['ad']['ad_html'],
		'class' => 'codeEditor--short',
		'mode' => 'html',
	), array(
		'label' => 'HTML',
		'explain' => 'Здесь Вы можете использовать синтаксис шаблонов XenForo.',
	)) . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'selected' => $__vars['ad']['display_criteria']['user_groups'],
		'label' => 'Пользователь является участником любой из выбранных групп' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'display_criteria[user_groups]',
		'size' => '4',
		'multiple' => 'true',
		'value' => $__vars['ad']['display_criteria']['user_groups'],
	), $__compilerTemp2)),
		'_type' => 'option',
	),
	array(
		'selected' => $__vars['ad']['display_criteria']['not_user_groups'],
		'label' => 'Пользователь НЕ является участником любой из выбранных групп' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'display_criteria[not_user_groups]',
		'size' => '4',
		'multiple' => 'true',
		'value' => $__vars['ad']['display_criteria']['not_user_groups'],
	), $__compilerTemp3)),
		'_type' => 'option',
	)), array(
		'label' => 'Критерии отображения',
		'explain' => 'Используйте приведённые выше критерии, чтобы ограничить показ этой рекламы определенным пользователям.',
	)) . '

			' . $__templater->callMacro('display_order_macros', 'row', array(
		'value' => $__vars['ad']['display_order'],
		'explain' => 'Укажите порядок отображения относительно другой рекламы в той же позиции.',
	), $__vars) . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'active',
		'value' => '1',
		'selected' => $__vars['ad']['active'],
		'label' => 'Реклама активна',
		'_type' => 'option',
	)), array(
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('advertising/save', $__vars['ad'], ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);