<?php
// FROM HASH: e3ed7a0d0d5501a4b179c41c2f71fbb5
return array(
'macros' => array('number_dependent' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'field' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="inputGroup inputGroup--numbers">
		' . $__templater->formNumberBox(array(
		'name' => 'match_params[number_min]',
		'value' => $__vars['field']['match_params']['number_min'],
		'size' => '5',
		'class' => 'input--numberNarrow',
		'placeholder' => 'Минимум',
	)) . '
		&nbsp;
		' . $__templater->formNumberBox(array(
		'name' => 'match_params[number_max]',
		'value' => $__vars['field']['match_params']['number_max'],
		'size' => '5',
		'class' => 'input--numberNarrow',
		'placeholder' => 'Максимально',
	)) . '
	</div>
	' . $__templater->formCheckBox(array(
	), array(array(
		'name' => 'match_params[number_integer]',
		'selected' => $__vars['field']['match_params']['number_integer'],
		'label' => 'Требуется целое число (без десятичной точки)',
		'_type' => 'option',
	))) . '
';
	return $__finalCompiled;
}
),
'regex_dependent' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'field' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	' . $__templater->formTextBox(array(
		'name' => 'match_params[regex]',
		'value' => $__vars['field']['match_params']['regex'],
		'placeholder' => 'Регулярное выражение',
		'code' => 'true',
	)) . '
';
	return $__finalCompiled;
}
),
'validator_dependent' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'field' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	' . $__templater->formTextBox(array(
		'name' => 'match_params[validator]',
		'value' => $__vars['field']['match_params']['validator'],
		'placeholder' => 'Валидатор',
		'dir' => 'ltr',
	)) . '
';
	return $__finalCompiled;
}
),
'date_dependent' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'field' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	' . $__templater->formRadio(array(
		'name' => 'match_params[date_constraint]',
		'value' => ($__vars['field']['match_params']['date_constraint'] ?: ''),
	), array(array(
		'value' => 'past',
		'label' => 'Дата в прошлом',
		'_type' => 'option',
	),
	array(
		'value' => 'future',
		'label' => 'Дата в будущем',
		'_type' => 'option',
	),
	array(
		'value' => '',
		'label' => 'Учитывать все',
		'_type' => 'option',
	))) . '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['field'], 'isInsert', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Добавить поле');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактировать поле' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->filter($__vars['field']['title'], array(array('htmlspecialchars', array()),), true));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['field'], 'isUpdate', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('', array(
			'href' => $__templater->func('link', array($__vars['prefix'] . '/delete', $__vars['field'], ), false),
			'overlay' => 'true',
			'icon' => 'delete',
		), '', array(
		)) . '
');
	}
	$__finalCompiled .= '

';
	$__templater->includeJs(array(
		'src' => 'xf/sort.js, vendor/dragula/dragula.js',
	));
	$__finalCompiled .= '
';
	$__templater->includeCss('public:dragula.less');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__templater->method($__vars['field'], 'exists', array())) {
		$__compilerTemp1 .= '
				' . $__templater->formRow('
					<span class="u-ltr">' . $__templater->escape($__vars['field']['field_id']) . '</span>
				', array(
			'label' => 'ID поля',
			'explain' => 'Это уникальный идентификатор для данного поля. Его нельзя изменить после создания.',
		)) . '
			';
	} else {
		$__compilerTemp1 .= '
				' . $__templater->formTextBoxRow(array(
			'name' => 'field_id',
			'id' => 'ctrl_field_id',
			'maxlength' => $__templater->func('max_length', array($__vars['field'], 'field_id', ), false),
			'dir' => 'ltr',
		), array(
			'label' => 'ID поля',
			'explain' => 'Это уникальный идентификатор для данного поля. Его нельзя изменить после создания.',
		)) . '
			';
	}
	$__compilerTemp2 = $__templater->mergeChoiceOptions(array(), $__vars['displayGroups']);
	$__compilerTemp3 = array();
	if ($__templater->isTraversable($__vars['fieldTypes'])) {
		foreach ($__vars['fieldTypes'] AS $__vars['fieldType'] => $__vars['fieldDef']) {
			if ((!$__vars['existingType']) OR ($__vars['fieldDef']['compatible'] == $__vars['existingType']['compatible'])) {
				$__compilerTemp3[] = array(
					'class' => $__vars['fieldDef']['type'],
					'value' => $__vars['fieldType'],
					'label' => $__templater->escape($__vars['fieldDef']['label']),
					'_type' => 'option',
				);
			}
		}
	}
	$__compilerTemp4 = '';
	if ((!$__vars['existingType']) OR ($__vars['existingType']['options'] == 'text')) {
		$__compilerTemp4 .= '
			<h3 class="block-formSectionHeader">
				<span class="collapseTrigger collapseTrigger--block" data-xf-click="toggle" data-target="< :up:next">
					<span class="block-formSectionHeader-aligner">' . 'Настройки для текстовых полей' . '</span>
				</span>
			</h3>
			<div class="block-body block-body--collapsible">
				' . $__templater->formRadioRow(array(
			'name' => 'match_type',
			'value' => $__vars['field']['match_type'],
			'listclass' => '_listColumns',
		), array(array(
			'value' => 'none',
			'label' => $__templater->escape($__vars['matchTypes']['none']),
			'_type' => 'option',
		),
		array(
			'value' => 'number',
			'data-hide' => 'true',
			'label' => $__templater->escape($__vars['matchTypes']['number']),
			'_dependent' => array($__templater->callMacro(null, 'number_dependent', array(
			'field' => $__vars['field'],
		), $__vars)),
			'_type' => 'option',
		),
		array(
			'value' => 'alphanumeric',
			'label' => $__templater->escape($__vars['matchTypes']['alphanumeric']),
			'_type' => 'option',
		),
		array(
			'value' => 'email',
			'label' => $__templater->escape($__vars['matchTypes']['email']),
			'_type' => 'option',
		),
		array(
			'value' => 'url',
			'label' => $__templater->escape($__vars['matchTypes']['url']),
			'_type' => 'option',
		),
		array(
			'value' => 'color',
			'label' => $__templater->escape($__vars['matchTypes']['color']),
			'_type' => 'option',
		),
		array(
			'value' => 'date',
			'data-hide' => 'true',
			'label' => $__templater->escape($__vars['matchTypes']['date']),
			'_dependent' => array($__templater->callMacro(null, 'date_dependent', array(
			'field' => $__vars['field'],
		), $__vars)),
			'_type' => 'option',
		),
		array(
			'value' => 'regex',
			'data-hide' => 'true',
			'label' => $__templater->escape($__vars['matchTypes']['regex']),
			'_dependent' => array($__templater->callMacro(null, 'regex_dependent', array(
			'field' => $__vars['field'],
		), $__vars)),
			'_type' => 'option',
		),
		array(
			'value' => 'callback',
			'data-hide' => 'true',
			'label' => $__templater->escape($__vars['matchTypes']['callback']),
			'_dependent' => array('
							' . $__templater->callMacro('helper_callback_fields', 'callback_fields', array(
			'className' => 'match_params[callback_class]',
			'methodName' => 'match_params[callback_method]',
			'classValue' => $__vars['field']['match_params']['callback_class'],
			'methodValue' => $__vars['field']['match_params']['callback_method'],
			'size' => '23',
		), $__vars) . '
							<p class="formRow-explain">
								<code>
									<em>\\XF\\CustomField\\Definition</em> $definition,
									&amp;$value,
									&amp;$error
								</code>
							</p>
						'),
			'_type' => 'option',
		),
		array(
			'value' => 'validator',
			'data-hide' => 'true',
			'label' => $__templater->escape($__vars['matchTypes']['validator']),
			'_dependent' => array($__templater->callMacro(null, 'validator_dependent', array(
			'field' => $__vars['field'],
		), $__vars)),
			'_type' => 'option',
		)), array(
			'label' => 'Требования для совпадения значений',
			'hint' => 'Пустые значения всегда разрешены.',
		)) . '

				<hr class="formRowSep" />

				' . $__templater->formNumberBoxRow(array(
			'name' => 'max_length',
			'value' => $__vars['field']['max_length'],
			'min' => '0',
		), array(
			'label' => 'Максимальная длина',
		)) . '
			</div>
		';
	}
	$__compilerTemp5 = '';
	if ((!$__vars['existingType']) OR ($__vars['existingType']['options'] == 'choice')) {
		$__compilerTemp5 .= '
			<h3 class="block-formSectionHeader">
				<span class="collapseTrigger collapseTrigger--block" data-xf-click="toggle" data-target="< :up:next">
					<span class="block-formSectionHeader-aligner">' . 'Настройки для полей с вариантами ответов' . '</span>
				</span>
			</h3>
			<div class="block-body block-body--collapsible">
				';
		$__compilerTemp6 = '';
		if ($__templater->isTraversable($__vars['field']['field_choices'])) {
			foreach ($__vars['field']['field_choices'] AS $__vars['choice'] => $__vars['text']) {
				$__compilerTemp6 .= '
							<div class="inputGroup">
								<span class="inputGroup-text dragHandle"
									aria-label="' . $__templater->filter('Drag handle', array(array('for_attr', array()),), true) . '"></span>
								' . $__templater->formTextBox(array(
					'name' => 'field_choice[]',
					'value' => $__vars['choice'],
					'placeholder' => 'Значение (только A-Z, 0-9, и _)',
					'size' => '24',
					'maxlength' => '25',
					'dir' => 'ltr',
				)) . '
								<span class="inputGroup-splitter"></span>
								' . $__templater->formTextBox(array(
					'name' => 'field_choice_text[]',
					'value' => $__vars['text'],
					'placeholder' => 'Текст',
					'size' => '24',
				)) . '
							</div>
						';
			}
		}
		$__compilerTemp5 .= $__templater->formRow('

					<div class="inputGroup-container" data-xf-init="list-sorter" data-drag-handle=".dragHandle">
						' . $__compilerTemp6 . '
						<div class="inputGroup is-undraggable js-blockDragafter" data-xf-init="field-adder"
							data-remove-class="is-undraggable js-blockDragafter">
							<span class="inputGroup-text dragHandle"
								aria-label="' . $__templater->filter('Drag handle', array(array('for_attr', array()),), true) . '"></span>
							' . $__templater->formTextBox(array(
			'name' => 'field_choice[]',
			'placeholder' => 'Значение (только A-Z, 0-9, и _)',
			'size' => '24',
			'maxlength' => '25',
			'data-i' => '0',
			'dir' => 'ltr',
		)) . '
							<span class="inputGroup-splitter"></span>
							' . $__templater->formTextBox(array(
			'name' => 'field_choice_text[]',
			'placeholder' => 'Текст',
			'size' => '24',
			'data-i' => '0',
		)) . '
						</div>
					</div>
				', array(
			'rowtype' => 'input',
			'label' => 'Возможные варианты',
			'explain' => 'Поле "Значение" представляет собой внутреннее значение при выборе. Поле "Текст" показывается при отображении поля. Вы не должны менять поле "Значение", так как кто-либо из пользователей уже мог выбрать этот вариант. Если Вы это сделаете, пользователи потеряют выбранный вариант.',
		)) . '
			</div>
		';
	}
	$__compilerTemp7 = '';
	if (!$__templater->test($__vars['extraOptions'], 'empty', array())) {
		$__compilerTemp7 .= '
				' . $__templater->filter($__vars['extraOptions'], array(array('raw', array()),), true) . '

				<hr class="formRowSep" />
			';
	}
	$__compilerTemp8 = '';
	if ($__vars['hasWrapperTemplate']) {
		$__compilerTemp8 .= '
				' . $__templater->formCodeEditorRow(array(
			'name' => 'wrapper_template',
			'value' => $__vars['field']['wrapper_template'],
			'mode' => 'html',
			'data-line-wrapping' => 'true',
			'class' => 'codeEditor--autoSize',
		), array(
			'label' => 'Оболочка для отображения HTML',
			'explain' => 'Если используется значение, то это позволяет форматировать содержащую разметку этого поля и его выбранные значения. Данное значение обеспечивает большую гибкость и возможность настройки, но Вы должны использовать заполнитель <b>{$value}</b> для отображения значений выбранных полей. При желании вы также можете использовать <b>{$title}</b> - название поля, <b>{$description}</b> - описание поля, и <b>{$fieldId}</b> - ID этого поля (<span id="FieldId">' . $__templater->escape($__vars['field']['field_id']) . '</span>).',
		)) . '
			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__compilerTemp1 . '

			<hr class="formRowSep" />

			' . $__templater->formTextBoxRow(array(
		'name' => 'title',
		'value' => ($__templater->method($__vars['field'], 'exists', array()) ? $__vars['field']['MasterTitle']['phrase_text'] : ''),
	), array(
		'label' => 'Заголовок',
	)) . '

			' . $__templater->formTextAreaRow(array(
		'name' => 'description',
		'value' => ($__templater->method($__vars['field'], 'exists', array()) ? $__vars['field']['MasterDescription']['phrase_text'] : ''),
		'autosize' => 'true',
	), array(
		'label' => 'Описание',
		'hint' => 'Вы можете использовать HTML',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->formRadioRow(array(
		'name' => 'display_group',
		'value' => $__vars['field']['display_group'],
	), $__compilerTemp2, array(
		'label' => 'Место отображения',
	)) . '

			' . $__templater->callMacro('display_order_macros', 'row', array(
		'value' => $__vars['field']['display_order'],
	), $__vars) . '

			' . $__templater->filter($__vars['displayOptions'], array(array('raw', array()),), true) . '

			<hr class="formRowSep" />

			' . $__templater->formRadioRow(array(
		'name' => 'field_type',
		'value' => $__vars['field']['field_type'],
		'listclass' => 'listColumns',
	), $__compilerTemp3, array(
		'label' => 'Тип поля',
	)) . '
		</div>

		' . $__compilerTemp4 . '

		' . $__compilerTemp5 . '

		<h3 class="block-formSectionHeader">
			<span class="collapseTrigger collapseTrigger--block" data-xf-click="toggle" data-target="< :up:next">
				<span class="block-formSectionHeader-aligner">' . 'Основные настройки' . '</span>
			</span>
		</h3>
		<div class="block-body block-body--collapsible">
			' . $__compilerTemp7 . '

			' . $__templater->formCodeEditorRow(array(
		'name' => 'display_template',
		'value' => $__vars['field']['display_template'],
		'mode' => 'html',
		'data-line-wrapping' => 'true',
		'class' => 'codeEditor--autoSize',
	), array(
		'label' => 'HTML для вывода значения',
		'explain' => 'Данная опция позволяет отформатировать значение этого поля с помощью HTML, давая возможность разметить выводимую информацию или сделать из неё ссылку. Можно использовать следующие заменители: <b>{$value}</b> - отображаемое значение поля; <b>{$valueUrl}</b> - значение поля для использования в URL-адресе, <b>{$choice}</b> - значение выбранного варианта и <b>{$fieldId}</b> - ID этого поля (<span id="FieldId">' . $__templater->escape($__vars['field']['field_id']) . '</span>).',
	)) . '

			' . $__compilerTemp8 . '
		</div>

		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array($__vars['prefix'] . '/save', $__vars['field'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	)) . '

' . '

' . '

' . '

';
	return $__finalCompiled;
}
);