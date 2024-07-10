<?php
// FROM HASH: 3a376b904dd863c99db338c96c44e678
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['forum'], 'isInsert', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Добавить форум');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактировать форум' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['node']['title']));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['forum'], 'isUpdate', array())) {
		$__compilerTemp1 = '';
		if ($__vars['canChangeForumType']) {
			$__compilerTemp1 .= '
			' . $__templater->button('Изменить тип', array(
				'href' => $__templater->func('link', array('forums/change-type', $__vars['node'], ), false),
				'overlay' => 'true',
			), '', array(
			)) . '
		';
		}
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	<div class="buttonGroup">
		' . $__compilerTemp1 . '
		' . $__templater->button('', array(
			'href' => $__templater->func('link', array('forums/delete', $__vars['node'], ), false),
			'icon' => 'delete',
			'overlay' => 'true',
		), '', array(
		)) . '
	</div>
');
	}
	$__finalCompiled .= '

';
	$__compilerTemp2 = '';
	if ($__vars['xf']['options']['xm_node_image_enable']) {
		$__compilerTemp2 .= '
' . $__templater->formUploadRow(array(
			'name' => 'upload',
			'accept' => '.gif,.jpeg,.jpg,.jpe,.png',
			'value' => $__vars['node']['node_background'],
		), array(
			'label' => 'Select the node image',
			'explain' => 'Select the image you want to show in the forum nodes. The image you select will apply to the forum nodes.',
		)) . '

';
		if ($__templater->method($__vars['node'], 'getNodeImage', array())) {
			$__compilerTemp2 .= '
	' . $__templater->formRow('
		<img src="' . $__templater->func('base_url', array($__templater->method($__vars['node'], 'getNodeImage', array()), ), true) . '" />
	', array(
				'label' => 'Node block image',
			)) . '
';
		} else {
			$__compilerTemp2 .= '
	' . $__templater->formRow('
		' . 'No images were selected for the node.' . '
	', array(
				'label' => 'Node block image',
			)) . '
';
		}
		$__compilerTemp2 .= '
';
	}
	$__compilerTemp3 = '';
	if ($__vars['typeConfigTemplate']) {
		$__compilerTemp3 .= '
				' . $__templater->includeTemplate($__vars['typeConfigTemplate'], $__vars) . '
			';
	}
	$__compilerTemp4 = '';
	if (!$__templater->test($__vars['availableFields'], 'empty', array())) {
		$__compilerTemp4 .= '
				';
		$__compilerTemp5 = array();
		if ($__templater->isTraversable($__vars['availableFields'])) {
			foreach ($__vars['availableFields'] AS $__vars['fieldId'] => $__vars['field']) {
				$__compilerTemp5[] = array(
					'value' => $__vars['fieldId'],
					'label' => $__templater->escape($__vars['field']['title']),
					'labelclass' => ($__vars['field']['required'] ? 'u-appendAsterisk' : ''),
					'_type' => 'option',
				);
			}
		}
		$__compilerTemp4 .= $__templater->formCheckBoxRow(array(
			'name' => 'available_fields',
			'value' => $__vars['forum']['field_cache'],
			'listclass' => 'field listColumns',
		), $__compilerTemp5, array(
			'label' => 'Доступные поля',
			'explain' => '* Поля, отмеченные звёздочкой, необходимы для новых публикаций при их выборе. Другие поля являются необязательными.',
			'hint' => '
						' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'check-all' => '.field.listColumns',
			'label' => 'Выделить всё',
			'_type' => 'option',
		))) . '
					',
		)) . '
			';
	} else {
		$__compilerTemp4 .= '
				' . $__templater->formRow('
					' . $__templater->filter('Нет', array(array('parens', array()),), true) . '
					<a href="' . $__templater->func('link', array('custom-thread-fields/add', ), true) . '" target="_blank">' . 'Добавить поле' . '</a>
				', array(
			'label' => 'Доступные поля',
		)) . '
			';
	}
	$__compilerTemp6 = '';
	if (!$__templater->test($__vars['prefixesGrouped'], 'empty', array())) {
		$__compilerTemp6 .= '

				';
		$__compilerTemp7 = array();
		if ($__templater->isTraversable($__vars['prefixGroups'])) {
			foreach ($__vars['prefixGroups'] AS $__vars['prefixGroupId'] => $__vars['prefixGroup']) {
				if ($__vars['prefixesGrouped'][$__vars['prefixGroupId']]) {
					$__compilerTemp7[] = array(
						'check-all' => 'true',
						'listclass' => 'listColumns',
						'label' => ($__vars['prefixGroupId'] ? $__vars['prefixGroup']['title'] : 'Без группы'),
						'_type' => 'optgroup',
						'options' => array(),
					);
					end($__compilerTemp7); $__compilerTemp8 = key($__compilerTemp7);
					if ($__templater->isTraversable($__vars['prefixesGrouped'][$__vars['prefixGroupId']])) {
						foreach ($__vars['prefixesGrouped'][$__vars['prefixGroupId']] AS $__vars['prefixId'] => $__vars['prefix']) {
							$__compilerTemp7[$__compilerTemp8]['options'][] = array(
								'value' => $__vars['prefixId'],
								'selected' => $__vars['forum']['prefix_cache'][$__vars['prefixId']],
								'label' => '<span class="label ' . $__templater->escape($__vars['prefix']['css_class']) . '">' . $__templater->escape($__vars['prefix']['title']) . '</span>',
								'_type' => 'option',
							);
						}
					}
				}
			}
		}
		$__compilerTemp6 .= $__templater->formCheckBoxRow(array(
			'name' => 'available_prefixes',
			'listclass' => 'prefix',
			'data-xf-init' => 'checkbox-select-disabler',
			'data-select' => '.js-availablePrefixSelect',
		), $__compilerTemp7, array(
			'rowtype' => 'explainOffset',
			'label' => 'Доступные префиксы',
			'explain' => 'Выберите префиксы, которые должны быть доступны для использования в этом форуме',
			'hint' => '
						' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'check-all' => '.prefix',
			'label' => 'Выделить всё',
			'_type' => 'option',
		))) . '
					',
		)) . '

				';
		$__compilerTemp9 = array(array(
			'value' => '-1',
			'label' => 'Нет',
			'_type' => 'option',
		));
		if ($__templater->isTraversable($__vars['prefixGroups'])) {
			foreach ($__vars['prefixGroups'] AS $__vars['prefixGroupId'] => $__vars['prefixGroup']) {
				if (($__templater->func('count', array($__vars['prefixesGrouped'][$__vars['prefixGroupId']], ), false) > 0)) {
					$__compilerTemp9[] = array(
						'label' => (($__vars['prefixGroupId'] > 0) ? $__vars['prefixGroup']['title'] : 'Без группы'),
						'_type' => 'optgroup',
						'options' => array(),
					);
					end($__compilerTemp9); $__compilerTemp10 = key($__compilerTemp9);
					if ($__templater->isTraversable($__vars['prefixesGrouped'][$__vars['prefixGroupId']])) {
						foreach ($__vars['prefixesGrouped'][$__vars['prefixGroupId']] AS $__vars['prefixId'] => $__vars['prefix']) {
							$__compilerTemp9[$__compilerTemp10]['options'][] = array(
								'value' => $__vars['prefixId'],
								'disabled' => (!$__templater->func('in_array', array($__vars['prefixId'], $__vars['forum']['prefix_cache'], ), false)),
								'label' => $__templater->escape($__vars['prefix']['title']),
								'_type' => 'option',
							);
						}
					}
				}
			}
		}
		$__compilerTemp6 .= $__templater->formSelectRow(array(
			'name' => 'default_prefix_id',
			'value' => $__vars['forum']['default_prefix_id'],
			'class' => 'js-availablePrefixSelect',
		), $__compilerTemp9, array(
			'label' => 'Префикс тем по умолчанию',
			'explain' => 'Можно указать префикс тем, который будет выбираться автоматически при создании новых тем в этом форуме. Выбранный префикс также <b>должен</b> быть выбран в списке "Доступных префиксов" выше.',
		)) . '

				' . $__templater->formCheckBoxRow(array(
			'name' => 'require_prefix',
			'value' => $__vars['forum']['require_prefix'],
		), array(array(
			'value' => '1',
			'label' => 'Требовать от пользователей выбор префикса',
			'hint' => 'Если включено, то пользователи должны будут выбрать префикс при создании темы или редактировании её названия. Это не будет иметь силы для модераторов или при перемещении темы.',
			'_type' => 'option',
		)), array(
		)) . '

			';
	} else {
		$__compilerTemp6 .= '
				' . $__templater->formRow('
					' . $__templater->filter('Нет', array(array('parens', array()),), true) . ' <a href="' . $__templater->func('link', array('thread-prefixes/add', ), true) . '" target="_blank">' . 'Добавить префикс' . '</a>
				', array(
			'label' => 'Доступные префиксы',
		)) . '

				' . $__templater->formHiddenVal('default_thread_prefix', '0', array(
		)) . '
				' . $__templater->formHiddenVal('require_prefix', '0', array(
		)) . '
			';
	}
	$__compilerTemp11 = array();
	if ($__templater->isTraversable($__vars['sortOptions'])) {
		foreach ($__vars['sortOptions'] AS $__vars['sortKey'] => $__vars['null']) {
			$__compilerTemp11[] = array(
				'value' => $__vars['sortKey'],
				'label' => $__templater->func('phrase_dynamic', array('forum_sort.' . $__vars['sortKey'], ), true),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp12 = '';
	if (!$__templater->test($__vars['availablePrompts'], 'empty', array())) {
		$__compilerTemp12 .= '
				<hr class="formRowSep" />

				';
		$__compilerTemp13 = array();
		if ($__templater->isTraversable($__vars['promptGroups'])) {
			foreach ($__vars['promptGroups'] AS $__vars['promptGroupId'] => $__vars['promptGroup']) {
				if ($__vars['promptsGrouped'][$__vars['promptGroupId']]) {
					$__compilerTemp13[] = array(
						'check-all' => 'true',
						'listclass' => '_listColumns',
						'label' => ($__vars['promptGroupId'] ? $__vars['promptGroup']['title'] : 'Без группы'),
						'_type' => 'optgroup',
						'options' => array(),
					);
					end($__compilerTemp13); $__compilerTemp14 = key($__compilerTemp13);
					if ($__templater->isTraversable($__vars['promptsGrouped'][$__vars['promptGroupId']])) {
						foreach ($__vars['promptsGrouped'][$__vars['promptGroupId']] AS $__vars['promptId'] => $__vars['prompt']) {
							$__compilerTemp13[$__compilerTemp14]['options'][] = array(
								'value' => $__vars['promptId'],
								'selected' => $__vars['forum']['prompt_cache'][$__vars['promptId']],
								'label' => $__templater->escape($__vars['prompt']['title']),
								'_type' => 'option',
							);
						}
					}
				}
			}
		}
		$__compilerTemp12 .= $__templater->formCheckBoxRow(array(
			'name' => 'available_prompts',
			'listclass' => 'prompt',
		), $__compilerTemp13, array(
			'rowtype' => 'explainOffset',
			'label' => 'Доступные подсказки',
			'explain' => 'Пользователям будет предложено опубликовать новую тему в этом форуме, используя одну из подсказок, выбранных здесь. Подсказка будет отображена в поле ввода заголовка темы, прежде чем будет указано её название. Если никаких подсказок не выбрано, то будет использована фраза подсказки по умолчанию (<a href="' . $__templater->func('link', array('phrases/edit-by-name', array(), array('title' => 'thread_prompt.default', ), ), true) . '"><code>thread_prompt.default</code></a>).',
			'hint' => '
						' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'check-all' => '.prompt',
			'label' => 'Выделить всё',
			'_type' => 'option',
		))) . '
					',
		)) . '

			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->callMacro('node_edit_macros', 'title', array(
		'node' => $__vars['node'],
	), $__vars) . '
			' . $__templater->callMacro('node_edit_macros', 'description', array(
		'node' => $__vars['node'],
	), $__vars) . '
' . $__compilerTemp2 . '
' . $__templater->formTextBoxRow(array(
		'name' => 'node[node_background]',
		'value' => $__vars['node']['node_background'],
	), array(
		'label' => 'Node background',
	)) . '

			<hr class="formRowSep" />
			' . $__templater->callMacro('node_edit_macros', 'node_name', array(
		'node' => $__vars['node'],
	), $__vars) . '
			' . $__templater->callMacro('node_edit_macros', 'position', array(
		'node' => $__vars['node'],
		'nodeTree' => $__vars['nodeTree'],
	), $__vars) . '
			' . $__templater->callMacro('node_edit_macros', 'navigation', array(
		'node' => $__vars['node'],
		'navChoices' => $__vars['navChoices'],
	), $__vars) . '
			<hr class="formRowSep" />

			' . $__templater->formRow('<span>' . $__templater->escape($__vars['forumTypeTitle']) . '</span>', array(
		'label' => 'Тип форума',
		'explain' => $__templater->escape($__vars['forumTypeDesc']),
	)) . '
			' . $__compilerTemp3 . '
			' . $__templater->formHiddenVal('forum_type_id', $__vars['forumTypeId'], array(
	)) . '

			<hr class="formRowSep" />
			' . $__compilerTemp4 . '

			<hr class="formRowSep" />
			' . $__compilerTemp6 . '

		</div>

		<h3 class="block-formSectionHeader">
			<span class="collapseTrigger collapseTrigger--block" data-xf-click="toggle" data-target="< :up:next">
				<span class="block-formSectionHeader-aligner">' . 'Расширенные настройки' . '</span>
			</span>
		</h3>
		<div class="block-body block-body--collapsible">
			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'allow_posting',
		'selected' => $__vars['forum']['allow_posting'],
		'label' => 'Разрешить размещение новых сообщений в этом форуме',
		'hint' => 'Если отключено, то пользователи не смогут добавлять новые, а также редактировать и удалять собственные сообщения. Модераторы по прежнему смогут управлять содержимым в этом форуме. ',
		'_type' => 'option',
	),
	array(
		'name' => 'moderate_threads',
		'selected' => $__vars['forum']['moderate_threads'],
		'label' => 'Проверять новые темы, размещаемые в этом форуме',
		'hint' => 'Если включено, то модератор должен будет вручную одобрять темы, размещаемые в этом форуме.',
		'_type' => 'option',
	),
	array(
		'name' => 'moderate_replies',
		'selected' => $__vars['forum']['moderate_replies'],
		'label' => 'Проверять ответы, размещаемые в этом форуме',
		'hint' => 'Если включено, модератор должен будет вручную одобрять сообщения, размещаемые в этом форуме.',
		'_type' => 'option',
	),
	array(
		'name' => 'count_messages',
		'selected' => $__vars['forum']['count_messages'],
		'label' => 'Считать сообщения пользователей в этом форуме',
		'hint' => 'Если этот параметр отключён, то сообщения, размещенные (непосредственно) в этом форуме, не будут изменять общее количество сообщений отправляющего пользователя. Кроме того, если этот форум поддерживает темы-вопросы, то решения не будут влиять на общее количество решений пользователя.',
		'_type' => 'option',
	),
	array(
		'name' => 'find_new',
		'selected' => $__vars['forum']['find_new'],
		'label' => 'Включать темы из этого форума, когда пользователь нажимает "Новые сообщения"',
		'hint' => 'Если отключено, то темы из этого форума не будут отображаться в списке новых/непрочитанных сообщений.',
		'_type' => 'option',
	)), array(
		'rowid' => 'advancedToggles',
	)) . '

			' . $__templater->formRadioRow(array(
		'name' => 'allow_index',
		'value' => $__vars['forum']['allow_index'],
	), array(array(
		'value' => 'allow',
		'label' => 'Индексировать все темы',
		'_type' => 'option',
	),
	array(
		'value' => 'deny',
		'label' => 'Не индексировать темы',
		'_type' => 'option',
	),
	array(
		'value' => 'criteria',
		'data-xf-init' => 'disabler',
		'data-container' => '.js-indexCriteria',
		'data-hide' => 'true',
		'label' => '

					' . 'Индексировать темы на основе критериев' . '
				',
		'_type' => 'option',
	)), array(
		'label' => 'Разрешить индексацию поисковыми системами',
		'explain' => 'Вы можете выбрать, разрешать ли внешним поисковым системам индексировать все темы в этом форуме или только те темы, которые соответствуют определённым критериям.',
	)) . '

			<div class="js-indexCriteria">
				' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'index_criteria[max_days_post][enabled]',
		'selected' => $__vars['forum']['index_criteria']['max_days_post'],
		'label' => 'Тема была опубликована не более X дней назад' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'index_criteria[max_days_post][value]',
		'value' => ($__vars['forum']['index_criteria']['max_days_post'] ?: 1),
		'min' => '1',
	))),
		'_type' => 'option',
	),
	array(
		'name' => 'index_criteria[max_days_last_post][enabled]',
		'selected' => $__vars['forum']['index_criteria']['max_days_last_post'],
		'label' => 'Ответ в теме был размещён не более X дней назад' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'index_criteria[max_days_last_post][value]',
		'value' => ($__vars['forum']['index_criteria']['max_days_last_post'] ?: 1),
		'min' => '1',
	))),
		'_type' => 'option',
	),
	array(
		'name' => 'index_criteria[min_replies][enabled]',
		'selected' => $__vars['forum']['index_criteria']['min_replies'],
		'label' => 'В теме есть как минимум X ответов' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'index_criteria[min_replies][value]',
		'value' => ($__vars['forum']['index_criteria']['min_replies'] ?: 1),
		'min' => '1',
	))),
		'_type' => 'option',
	),
	array(
		'name' => 'index_criteria[min_reaction_score][enabled]',
		'selected' => ($__vars['forum']['index_criteria']['min_reaction_score'] !== null),
		'label' => 'Тема имеет как минимум Х баллов реакций' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'index_criteria[min_reaction_score][value]',
		'value' => ($__vars['forum']['index_criteria']['min_reaction_score'] ?: 0),
	))),
		'_type' => 'option',
	)), array(
		'label' => 'Критерии индексации поисковых систем',
	)) . '
			</div>

			' . $__templater->formNumberBoxRow(array(
		'name' => 'min_tags',
		'value' => $__vars['forum']['min_tags'],
		'min' => '0',
		'max' => '100',
	), array(
		'label' => 'Минимальное число обязательных тегов',
		'explain' => 'Это потребует от пользователей указания по меньшей мере введённого количества тегов при создании темы.',
	)) . '

			' . $__templater->formRadioRow(array(
		'name' => 'allowed_watch_notifications',
		'value' => $__vars['forum']['allowed_watch_notifications'],
	), array(array(
		'value' => 'all',
		'label' => 'Новые сообщения',
		'_type' => 'option',
	),
	array(
		'value' => 'thread',
		'label' => 'Новые темы',
		'_type' => 'option',
	),
	array(
		'value' => 'none',
		'label' => 'Нет',
		'_type' => 'option',
	)), array(
		'label' => 'Ограничение на уведомления для отслеживаемых форумов',
		'explain' => 'Можно ограничить количество уведомлений, отправляемых пользователям для их отслеживаемых форумов. Например, если выбрано "Новые темы", то пользователи смогут выбирать только между опциями "Не отправлять уведомления" и "Новые темы". Это может быть использовано для снижения нагрузки на сервер на посещаемых форумах.',
	)) . '

			' . $__templater->formRow('

				<div class="inputPair">
					' . $__templater->formSelect(array(
		'name' => 'default_sort_order',
		'value' => $__vars['forum']['default_sort_order'],
		'class' => 'input--inline',
	), $__compilerTemp11) . '
					' . $__templater->formSelect(array(
		'name' => 'default_sort_direction',
		'value' => $__vars['forum']['default_sort_direction'],
		'class' => 'input--inline',
	), array(array(
		'value' => 'desc',
		'label' => 'По убыванию',
		'_type' => 'option',
	),
	array(
		'value' => 'asc',
		'label' => 'По возрастанию',
		'_type' => 'option',
	))) . '
				</div>
			', array(
		'rowtype' => 'input',
		'label' => 'Порядок сортировки по умолчанию',
	)) . '

			' . $__templater->formSelectRow(array(
		'name' => 'list_date_limit_days',
		'value' => $__vars['forum']['list_date_limit_days'],
	), array(array(
		'value' => '0',
		'label' => 'Нет',
		'_type' => 'option',
	),
	array(
		'value' => '7',
		'label' => '' . '7' . ' дней',
		'_type' => 'option',
	),
	array(
		'value' => '14',
		'label' => '' . '14' . ' дней',
		'_type' => 'option',
	),
	array(
		'value' => '30',
		'label' => '' . '30' . ' дней',
		'_type' => 'option',
	),
	array(
		'value' => '60',
		'label' => '' . '2' . ' месяцев',
		'_type' => 'option',
	),
	array(
		'value' => '90',
		'label' => '' . '3' . ' месяцев',
		'_type' => 'option',
	),
	array(
		'value' => '182',
		'label' => '' . '6' . ' месяцев',
		'_type' => 'option',
	),
	array(
		'value' => '365',
		'label' => '1 год',
		'_type' => 'option',
	)), array(
		'label' => 'Ограничение списка тем по дате',
		'explain' => 'Может быть использовано на посещаемых форумах для повышения производительности, отображая список не всех последних и обновлённых тем по умолчанию. Это применяется, только, если темы отсортированы по дате последнего сообщения. Также можно включить вручную отображение более старых тем.',
	)) . '

			' . $__templater->callMacro('node_edit_macros', 'style', array(
		'node' => $__vars['node'],
		'styleTree' => $__vars['styleTree'],
	), $__vars) . '

			' . $__compilerTemp12 . '
		</div>

		' . $__templater->formSubmitRow(array(
		'icon' => 'save',
		'sticky' => 'true',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('forums/save', $__vars['node'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);