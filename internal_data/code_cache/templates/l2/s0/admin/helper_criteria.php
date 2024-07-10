<?php
// FROM HASH: a8ecfa2f7f985aa44b7197615dd15314
return array(
'macros' => array('user_tabs' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'container' => '',
		'userTabTitle' => '',
		'active' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__vars['tabs'] = $__templater->preEscaped('
		<a class="tabs-tab' . (($__vars['active'] == 'user') ? ' is-active' : '') . '"
			role="tab" tabindex="0" aria-controls="' . $__templater->func('unique_id', array('criteriaUser', ), true) . '">
			' . ($__vars['userTabTitle'] ? $__templater->escape($__vars['userTabTitle']) : 'Критерии пользователей') . '</a>
		<a class="tabs-tab' . (($__vars['active'] == 'user_field') ? ' is-active' : '') . '"
			role="tab" tabindex="0" aria-controls="' . $__templater->func('unique_id', array('criteriaUserField', ), true) . '">
			' . 'Критерии дополнительных полей' . '</a>
	');
	$__finalCompiled .= '
	';
	if ($__vars['container']) {
		$__finalCompiled .= '
		<div class="tabs" role="tablist">
			' . $__templater->filter($__vars['tabs'], array(array('raw', array()),), true) . '
		</div>
	';
	} else {
		$__finalCompiled .= '
		' . $__templater->filter($__vars['tabs'], array(array('raw', array()),), true) . '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'page_tabs' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'container' => '',
		'active' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__vars['tabs'] = $__templater->preEscaped('
		<a class="tabs-tab' . (($__vars['active'] == 'page') ? ' is-active' : '') . '"
			role="tab" tabindex="0" aria-controls="' . $__templater->func('unique_id', array('criteriaPage', ), true) . '">' . 'Критерии страницы' . '</a>
	');
	$__finalCompiled .= '
	';
	if ($__vars['container']) {
		$__finalCompiled .= '
		<div class="tabs" role="tablist">
			' . $__templater->filter($__vars['tabs'], array(array('raw', array()),), true) . '
		</div>
	';
	} else {
		$__finalCompiled .= '
		' . $__templater->filter($__vars['tabs'], array(array('raw', array()),), true) . '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'user_panes' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'container' => '',
		'active' => '',
		'criteria' => '!',
		'data' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

	';
	$__vars['app'] = $__vars['xf']['app'];
	$__finalCompiled .= '
	';
	$__vars['visitor'] = $__vars['xf']['visitor'];
	$__finalCompiled .= '
	';
	$__vars['em'] = $__vars['app']['em'];
	$__finalCompiled .= '

	';
	$__compilerTemp1 = $__templater->mergeChoiceOptions(array(), $__vars['data']['connectedAccProviders']);
	$__compilerTemp2 = array();
	if ($__templater->isTraversable($__vars['data']['userGroups'])) {
		foreach ($__vars['data']['userGroups'] AS $__vars['userGroupId'] => $__vars['userGroupTitle']) {
			$__compilerTemp2[] = array(
				'value' => $__vars['userGroupId'],
				'label' => $__templater->escape($__vars['userGroupTitle']),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp3 = array();
	if ($__templater->isTraversable($__vars['data']['userGroups'])) {
		foreach ($__vars['data']['userGroups'] AS $__vars['userGroupId'] => $__vars['userGroupTitle']) {
			$__compilerTemp3[] = array(
				'value' => $__vars['userGroupId'],
				'label' => $__templater->escape($__vars['userGroupTitle']),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp4 = array();
	$__compilerTemp5 = $__templater->method($__vars['data']['languageTree'], 'getFlattened', array(0, ));
	if ($__templater->isTraversable($__compilerTemp5)) {
		foreach ($__compilerTemp5 AS $__vars['treeEntry']) {
			$__compilerTemp4[] = array(
				'value' => $__vars['treeEntry']['record']['language_id'],
				'label' => $__templater->func('repeat', array('--', $__vars['treeEntry']['depth'], ), true) . ' ' . $__templater->escape($__vars['treeEntry']['record']['title']),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp6 = array(array(
		'name' => 'user_criteria[language][rule]',
		'value' => 'language',
		'selected' => $__vars['criteria']['language'],
		'label' => 'Пользователь использует следующий язык' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'user_criteria[language][data][language_id]',
		'value' => $__vars['criteria']['language']['language_id'],
	), $__compilerTemp4)),
		'_type' => 'option',
	));
	$__compilerTemp6[] = array(
		'label' => 'Аватар' . $__vars['xf']['language']['label_separator'],
		'_type' => 'optgroup',
		'options' => array(),
	);
	end($__compilerTemp6); $__compilerTemp7 = key($__compilerTemp6);
	$__compilerTemp6[$__compilerTemp7]['options'][] = array(
		'name' => 'user_criteria[has_avatar][rule]',
		'value' => 'has_avatar',
		'selected' => $__vars['criteria']['has_avatar'],
		'label' => 'У пользователя есть аватар',
		'_type' => 'option',
	);
	$__compilerTemp6[$__compilerTemp7]['options'][] = array(
		'name' => 'user_criteria[no_avatar][rule]',
		'value' => 'no_avatar',
		'selected' => $__vars['criteria']['no_avatar'],
		'label' => 'У пользователя нет аватара',
		'_type' => 'option',
	);
	$__compilerTemp6[] = array(
		'label' => 'Аватар высокого разрешения' . $__vars['xf']['language']['label_separator'],
		'_type' => 'optgroup',
		'options' => array(),
	);
	end($__compilerTemp6); $__compilerTemp8 = key($__compilerTemp6);
	$__compilerTemp6[$__compilerTemp8]['options'][] = array(
		'name' => 'user_criteria[has_highdpi_avatar][rule]',
		'value' => 'has_highdpi_avatar',
		'selected' => $__vars['criteria']['has_highdpi_avatar'],
		'label' => 'У пользователя есть аватар высокого разрешения (retina)',
		'_type' => 'option',
	);
	$__compilerTemp6[$__compilerTemp8]['options'][] = array(
		'name' => 'user_criteria[no_highdpi_avatar][rule]',
		'value' => 'no_highdpi_avatar',
		'selected' => $__vars['criteria']['no_highdpi_avatar'],
		'label' => 'У пользователя нет аватара высокого разрешения (retina)',
		'_type' => 'option',
	);
	$__compilerTemp6[] = array(
		'label' => 'Двухфакторная аутентификация' . $__vars['xf']['language']['label_separator'],
		'_type' => 'optgroup',
		'options' => array(),
	);
	end($__compilerTemp6); $__compilerTemp9 = key($__compilerTemp6);
	$__compilerTemp6[$__compilerTemp9]['options'][] = array(
		'name' => 'user_criteria[with_tfa][rule]',
		'value' => 'with_tfa',
		'selected' => $__vars['criteria']['with_tfa'],
		'label' => 'Пользователь включил двухфакторную аутентификацию',
		'_type' => 'option',
	);
	$__compilerTemp6[$__compilerTemp9]['options'][] = array(
		'name' => 'user_criteria[without_tfa][rule]',
		'value' => 'without_tfa',
		'selected' => $__vars['criteria']['without_tfa'],
		'label' => 'Пользователь не включил двухфакторную аутентификацию',
		'_type' => 'option',
	);
	$__compilerTemp6[] = array(
		'label' => 'Электронные письма со сводкой активности' . $__vars['xf']['language']['label_separator'],
		'_type' => 'optgroup',
		'options' => array(),
	);
	end($__compilerTemp6); $__compilerTemp10 = key($__compilerTemp6);
	$__compilerTemp6[$__compilerTemp10]['options'][] = array(
		'name' => 'user_criteria[activity_summary_enabled][rule]',
		'value' => 'activity_summary_enabled',
		'selected' => $__vars['criteria']['activity_summary_enabled'],
		'label' => 'У пользователя включены электронные письма со сводкой об активности',
		'_type' => 'option',
	);
	$__compilerTemp6[$__compilerTemp10]['options'][] = array(
		'name' => 'user_criteria[activity_summary_disabled][rule]',
		'value' => 'activity_summary_disabled',
		'selected' => $__vars['criteria']['activity_summary_disabled'],
		'label' => 'У пользователя отключены электронные письма со сводкой активности',
		'_type' => 'option',
	);
	$__compilerTemp11 = '';
	$__compilerTemp12 = '';
	$__compilerTemp12 .= '
					';
	$__compilerTemp13 = $__templater->method($__templater->method($__vars['xf']['app']['em'], 'getRepository', array('XF:UserField', )), 'getDisplayGroups', array());
	if ($__templater->isTraversable($__compilerTemp13)) {
		foreach ($__compilerTemp13 AS $__vars['fieldGroup'] => $__vars['groupPhrase']) {
			$__compilerTemp12 .= '

						';
			$__vars['customFields'] = $__templater->method($__vars['app'], 'getCustomFields', array('users', $__vars['fieldGroup'], ));
			$__compilerTemp12 .= '
						';
			$__compilerTemp14 = '';
			$__compilerTemp14 .= '
								';
			if ($__templater->isTraversable($__vars['customFields'])) {
				foreach ($__vars['customFields'] AS $__vars['fieldId'] => $__vars['fieldDefinition']) {
					$__compilerTemp14 .= '
									';
					$__vars['fieldName'] = 'user_field_' . $__vars['fieldId'];
					$__compilerTemp14 .= '
									';
					$__vars['choices'] = $__vars['fieldDefinition']['field_choices'];
					$__compilerTemp14 .= '
									';
					$__compilerTemp15 = '';
					if (!$__vars['choices']) {
						$__compilerTemp15 .= '
													' . $__templater->formTextBox(array(
							'name' => 'user_criteria[' . $__vars['fieldName'] . '][data][text]',
							'value' => $__vars['criteria'][$__vars['fieldName']]['text'],
						)) . '
												';
					} else if ($__templater->func('count', array($__vars['choices'], ), false) > 6) {
						$__compilerTemp15 .= '
													';
						$__compilerTemp16 = $__templater->mergeChoiceOptions(array(), $__vars['choices']);
						$__compilerTemp15 .= $__templater->formSelect(array(
							'name' => 'user_criteria[' . $__vars['fieldName'] . '][data][choices]',
							'value' => $__vars['criteria'][$__vars['fieldName']]['choices'],
							'multiple' => 'multiple',
							'size' => '5',
						), $__compilerTemp16) . '
												';
					} else {
						$__compilerTemp15 .= '
													';
						$__compilerTemp17 = $__templater->mergeChoiceOptions(array(), $__vars['choices']);
						$__compilerTemp15 .= $__templater->formCheckBox(array(
							'name' => 'user_criteria[' . $__vars['fieldName'] . '][data][choices]',
							'value' => $__vars['criteria'][$__vars['fieldName']]['choices'],
							'listclass' => 'listColumns',
						), $__compilerTemp17) . '
												';
					}
					$__compilerTemp14 .= $__templater->formCheckBoxRow(array(
					), array(array(
						'name' => 'user_criteria[' . $__vars['fieldName'] . '][rule]',
						'value' => $__vars['fieldName'],
						'selected' => $__vars['criteria'][$__vars['fieldName']],
						'label' => ($__vars['choices'] ? 'Пользователь выбрал' : 'Значение пользователя содержит текст' . $__vars['xf']['language']['label_separator']),
						'_dependent' => array('
												' . $__compilerTemp15 . '
											'),
						'_type' => 'option',
					)), array(
						'label' => $__templater->escape($__vars['fieldDefinition']['title']),
					)) . '
								';
				}
			}
			$__compilerTemp14 .= '
							';
			if (strlen(trim($__compilerTemp14)) > 0) {
				$__compilerTemp12 .= '
							<h2 class="block-formSectionHeader"><span class="block-formSectionHeader-aligner">' . $__templater->escape($__vars['groupPhrase']) . '</span></h2>
							' . $__compilerTemp14 . '
						';
			}
			$__compilerTemp12 .= '

					';
		}
	}
	$__compilerTemp12 .= '
				';
	if (strlen(trim($__compilerTemp12)) > 0) {
		$__compilerTemp11 .= '
				' . $__compilerTemp12 . '
			';
	} else {
		$__compilerTemp11 .= '
				' . 'Пока не создано ни одного дополнительного поля.' . '
			';
	}
	$__vars['panes'] = $__templater->preEscaped('
		<li class="' . (($__vars['active'] == 'user') ? ' is-active' : '') . '" role="tabpanel" id="' . $__templater->func('unique_id', array('criteriaUser', ), true) . '">
			' . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'user_criteria[is_guest][rule]',
		'value' => 'is_guest',
		'selected' => $__vars['criteria']['is_guest'],
		'label' => 'Посетитель является гостем',
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[is_logged_in][rule]',
		'value' => 'is_logged_in',
		'selected' => $__vars['criteria']['is_logged_in'],
		'label' => 'Пользователь авторизован',
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[is_moderator][rule]',
		'value' => 'is_moderator',
		'selected' => $__vars['criteria']['is_moderator'],
		'label' => 'Пользователь является модератором',
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[is_admin][rule]',
		'value' => 'is_admin',
		'selected' => $__vars['criteria']['is_admin'],
		'label' => 'Пользователь является администратором',
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[is_banned][rule]',
		'value' => 'is_banned',
		'selected' => $__vars['criteria']['is_banned'],
		'label' => 'Пользователь заблокирован',
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[birthday][rule]',
		'value' => 'birthday',
		'selected' => $__vars['criteria']['birthday'],
		'label' => 'Пользователь отмечает День рождения',
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[user_state][rule]',
		'value' => 'user_state',
		'selected' => $__vars['criteria']['user_state'],
		'label' => 'Состояние пользователя' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array('
						' . $__templater->formSelect(array(
		'name' => 'user_criteria[user_state][data][state]',
		'value' => $__vars['criteria']['user_state']['state'],
	), array(array(
		'value' => 'valid',
		'label' => 'Активирован',
		'_type' => 'option',
	),
	array(
		'value' => 'email_confirm',
		'label' => 'Ожидает подтверждения по электронной почте',
		'_type' => 'option',
	),
	array(
		'value' => 'email_confirm_edit',
		'label' => 'Ожидает подтверждения по электронной почте (после редактирования)',
		'_type' => 'option',
	),
	array(
		'value' => 'email_bounce',
		'label' => 'Электронная почта недействительна (bounced)',
		'_type' => 'option',
	),
	array(
		'value' => 'moderated',
		'label' => 'В ожидании одобрения',
		'_type' => 'option',
	),
	array(
		'value' => 'rejected',
		'label' => 'Отклонён',
		'_type' => 'option',
	),
	array(
		'value' => 'disabled',
		'label' => 'Отключён',
		'_type' => 'option',
	))) . '
					'),
		'_type' => 'option',
	)), array(
		'label' => 'Привилегии и статус',
	)) . '

			<hr class="formRowSep" />

			' . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'user_criteria[connected_accounts][rule]',
		'value' => 'connected_accounts',
		'selected' => $__vars['criteria']['connected_accounts'],
		'label' => 'Учётная запись пользователя связана с одной из учётных записей, выбранных ниже' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'user_criteria[connected_accounts][data][provider_ids]',
		'size' => '4',
		'multiple' => 'true',
		'value' => $__vars['criteria']['connected_accounts']['provider_ids'],
	), $__compilerTemp1)),
		'_type' => 'option',
	)), array(
		'label' => 'Связанные аккаунты',
	)) . '

			<hr class="formRowSep" />

			' . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'user_criteria[user_groups][rule]',
		'value' => 'user_groups',
		'selected' => $__vars['criteria']['user_groups'],
		'label' => 'Пользователь является участником любой из выбранных групп' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'user_criteria[user_groups][data][user_group_ids]',
		'size' => '4',
		'multiple' => 'true',
		'value' => $__vars['criteria']['user_groups']['user_group_ids'],
	), $__compilerTemp2)),
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[not_user_groups][rule]',
		'value' => 'not_user_groups',
		'selected' => $__vars['criteria']['not_user_groups'],
		'label' => 'Пользователь НЕ является участником любой из выбранных групп' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'user_criteria[not_user_groups][data][user_group_ids]',
		'size' => '4',
		'multiple' => 'true',
		'value' => $__vars['criteria']['not_user_groups']['user_group_ids'],
	), $__compilerTemp3)),
		'_type' => 'option',
	)), array(
		'label' => 'Группы пользователей',
	)) . '

			<hr class="formRowSep" />

			' . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'user_criteria[messages_posted][rule]',
		'value' => 'messages_posted',
		'selected' => $__vars['criteria']['messages_posted'],
		'label' => 'Пользователь написал как минимум X сообщений' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'user_criteria[messages_posted][data][messages]',
		'value' => $__vars['criteria']['messages_posted']['messages'],
		'size' => '5',
		'min' => '0',
		'step' => '1',
	))),
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[messages_maximum][rule]',
		'value' => 'messages_maximum',
		'selected' => $__vars['criteria']['messages_maximum'],
		'label' => 'Пользователь написал не более X сообщений' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'user_criteria[messages_maximum][data][messages]',
		'value' => $__vars['criteria']['messages_maximum']['messages'],
		'size' => '5',
		'min' => '0',
		'step' => '1',
	))),
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[questions_solved_min][rule]',
		'value' => 'questions_solved_min',
		'selected' => $__vars['criteria']['questions_solved_min'],
		'label' => 'Пользователь решил как минимум X вопросов' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'user_criteria[questions_solved_min][data][solved]',
		'value' => $__vars['criteria']['questions_solved_min']['solved'],
		'size' => '5',
		'min' => '0',
		'step' => '1',
	))),
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[questions_solved_max][rule]',
		'value' => 'questions_solved_max',
		'selected' => $__vars['criteria']['questions_solved_max'],
		'label' => 'Пользователь решил не более X вопросов' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'user_criteria[questions_solved_max][data][solved]',
		'value' => $__vars['criteria']['questions_solved_max']['solved'],
		'size' => '5',
		'min' => '0',
		'step' => '1',
	))),
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[reaction_score][rule]',
		'value' => 'reaction_score',
		'selected' => $__vars['criteria']['reaction_score'],
		'label' => 'Пользователь получил не менее X реакций' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'user_criteria[reaction_score][data][reactions]',
		'value' => $__vars['criteria']['reaction_score']['reactions'],
		'size' => '5',
		'min' => '0',
		'step' => '1',
	))),
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[reaction_ratio][rule]',
		'value' => 'reaction_ratio',
		'selected' => $__vars['criteria']['reaction_ratio'],
		'label' => 'Рейтинг реакций пользователя к сообщениям не меньше' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'user_criteria[reaction_ratio][data][ratio]',
		'value' => $__vars['criteria']['reaction_ratio']['ratio'],
		'size' => '5',
		'min' => '0',
		'step' => '0.25',
	))),
		'afterhint' => 'Пользователь с 10 сообщениями и 5 реакциями будет иметь рейтинг 0.5.',
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[trophy_points][rule]',
		'value' => 'trophy_points',
		'selected' => $__vars['criteria']['trophy_points'],
		'label' => 'У пользователя как минимум X баллов за трофеи' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'user_criteria[trophy_points][data][points]',
		'value' => $__vars['criteria']['trophy_points']['points'],
		'size' => '5',
		'min' => '0',
		'step' => '1',
	))),
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[registered_days][rule]',
		'value' => 'registered_days',
		'selected' => $__vars['criteria']['registered_days'],
		'label' => 'Пользователь зарегистрировался как минимум X дней назад' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'user_criteria[registered_days][data][days]',
		'value' => $__vars['criteria']['registered_days']['days'],
		'size' => '5',
		'min' => '0',
		'step' => '1',
	))),
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[inactive_days][rule]',
		'value' => 'inactive_days',
		'selected' => $__vars['criteria']['inactive_days'],
		'label' => 'Пользователь не посещал форум как минимум X дней' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formNumberBox(array(
		'name' => 'user_criteria[inactive_days][data][days]',
		'value' => $__vars['criteria']['inactive_days']['days'],
		'size' => '5',
		'min' => '0',
		'step' => '1',
	))),
		'_type' => 'option',
	)), array(
		'label' => 'Содержимое и достижения',
	)) . '

			<hr class="formRowSep" />

			' . '

			' . $__templater->formCheckBoxRow(array(
	), $__compilerTemp6, array(
		'label' => 'Профиль пользователя и настройки',
	)) . '

			<hr class="formRowSep" />

			' . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'user_criteria[username][rule]',
		'value' => 'username',
		'selected' => $__vars['criteria']['username'],
		'label' => 'Имя пользователя' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formTextBox(array(
		'name' => 'user_criteria[username][data][names]',
		'value' => $__vars['criteria']['username']['names'],
		'ac' => 'true',
	))),
		'afterhint' => 'Если необходимо соответствие конкретным пользователям, то Вы можно указать здесь их имена, разделяя их запятыми.',
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[username_search][rule]',
		'value' => 'username_search',
		'selected' => $__vars['criteria']['username_search'],
		'label' => 'Имя пользователя содержит' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formTextBox(array(
		'name' => 'user_criteria[username_search][data][needles]',
		'value' => $__vars['criteria']['username_search']['needles'],
	))),
		'afterhint' => 'Можно ввести один или несколько текстовых фрагментов, разделяя их запятыми. Пользователи, чьи имена содержат любой из фрагментов, будут соответствовать критериям.',
		'_type' => 'option',
	),
	array(
		'name' => 'user_criteria[email_search][rule]',
		'value' => 'email_search',
		'selected' => $__vars['criteria']['email_search'],
		'label' => 'Электронный адрес пользователя содержит' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formTextBox(array(
		'name' => 'user_criteria[email_search][data][needles]',
		'value' => $__vars['criteria']['email_search']['needles'],
	))),
		'afterhint' => 'Можно ввести один или несколько текстовых фрагментов, разделяя их запятыми. Пользователи, чьи адреса электронной почты содержат любой из фрагментов, будут соответствовать критериям.',
		'_type' => 'option',
	)), array(
		'label' => 'Конкретные пользователи',
	)) . '

			' . '
		</li>

		<li class="' . (($__vars['active'] == 'user_field') ? 'is-active' : '') . '" role="tabpanel" id="' . $__templater->func('unique_id', array('criteriaUserField', ), true) . '">
			' . $__compilerTemp11 . '
		</li>
	');
	$__finalCompiled .= '

	';
	if ($__vars['container']) {
		$__finalCompiled .= '
		<ul class="tabPanes">
			' . $__templater->filter($__vars['panes'], array(array('raw', array()),), true) . '
		</ul>
	';
	} else {
		$__finalCompiled .= '
		' . $__templater->filter($__vars['panes'], array(array('raw', array()),), true) . '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'page_panes' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'container' => '',
		'active' => '',
		'criteria' => '!',
		'data' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

	';
	$__vars['em'] = $__vars['xf']['app']['em'];
	$__finalCompiled .= '
	';
	$__vars['visitor'] = $__vars['xf']['visitor'];
	$__finalCompiled .= '

	';
	$__compilerTemp1 = array();
	if ($__templater->isTraversable($__vars['data']['hours'])) {
		foreach ($__vars['data']['hours'] AS $__vars['hour']) {
			$__compilerTemp1[] = array(
				'value' => $__vars['hour'],
				'label' => $__templater->escape($__vars['hour']),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp2 = array();
	if ($__templater->isTraversable($__vars['data']['minutes'])) {
		foreach ($__vars['data']['minutes'] AS $__vars['minute']) {
			$__compilerTemp2[] = array(
				'value' => $__vars['minute'],
				'label' => $__templater->escape($__vars['minute']),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp3 = $__templater->mergeChoiceOptions(array(), $__vars['data']['timeZones']);
	$__compilerTemp4 = array();
	if ($__templater->isTraversable($__vars['data']['hours'])) {
		foreach ($__vars['data']['hours'] AS $__vars['hour']) {
			$__compilerTemp4[] = array(
				'value' => $__vars['hour'],
				'label' => $__templater->escape($__vars['hour']),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp5 = array();
	if ($__templater->isTraversable($__vars['data']['minutes'])) {
		foreach ($__vars['data']['minutes'] AS $__vars['minute']) {
			$__compilerTemp5[] = array(
				'value' => $__vars['minute'],
				'label' => $__templater->escape($__vars['minute']),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp6 = $__templater->mergeChoiceOptions(array(), $__vars['data']['timeZones']);
	$__compilerTemp7 = array();
	if ($__templater->isTraversable($__vars['data']['nodes'])) {
		foreach ($__vars['data']['nodes'] AS $__vars['option']) {
			$__compilerTemp7[] = array(
				'value' => $__vars['option']['value'],
				'label' => $__templater->escape($__vars['option']['label']),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp8 = array();
	$__compilerTemp9 = $__templater->method($__vars['data']['styleTree'], 'getFlattened', array(0, ));
	if ($__templater->isTraversable($__compilerTemp9)) {
		foreach ($__compilerTemp9 AS $__vars['treeEntry']) {
			$__compilerTemp8[] = array(
				'value' => $__vars['treeEntry']['record']['style_id'],
				'label' => $__templater->func('repeat', array('--', $__vars['treeEntry']['depth'], ), true) . ' ' . $__templater->escape($__vars['treeEntry']['record']['title']),
				'_type' => 'option',
			);
		}
	}
	$__vars['panes'] = $__templater->preEscaped('
		<li class="' . (($__vars['active'] == 'page') ? ' is-active' : '') . '" role="tabpanel" id="' . $__templater->func('unique_id', array('criteriaPage', ), true) . '">

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'page_criteria[from_search][rule]',
		'value' => 'from_search',
		'selected' => $__vars['criteria']['from_search'],
		'label' => 'Пользователь пришёл на этот сайт из поисковой системы',
		'hint' => 'Этот критерий устарел и будет удален из будущей версии. Он может работать не так, как ожидалось, при использовании расширенной функции согласия на использование файлов cookie.',
		'_type' => 'option',
	)), array(
	)) . '

			<hr class="formRowSep" />

			' . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'page_criteria[after][rule]',
		'value' => 'after',
		'selected' => $__vars['criteria']['after'],
		'label' => 'Текущая дата и время после' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array('
						<div class="inputGroup">
							' . $__templater->formDateInput(array(
		'name' => 'page_criteria[after][data][ymd]',
		'value' => $__vars['criteria']['after']['ymd'],
	)) . '
							<span class="inputGroup-text">
								' . 'Время' . $__vars['xf']['language']['label_separator'] . '
							</span>
							<span class="inputGroup" dir="ltr">
								' . $__templater->formSelect(array(
		'name' => 'page_criteria[after][data][hh]',
		'value' => $__vars['criteria']['after']['hh'],
		'class' => 'input--inline input--autoSize',
	), $__compilerTemp1) . '
								<span class="inputGroup-text">:</span>
								' . $__templater->formSelect(array(
		'name' => 'page_criteria[after][data][mm]',
		'value' => $__vars['criteria']['after']['mm'],
		'class' => 'input--inline input--autoSize',
	), $__compilerTemp2) . '
							</span>
						</div>
						<dfn class="inputChoices-explain inputChoices-explain--after">' . 'Можно оставить поле с датой пустым, чтобы критерии совпадали каждый день в указанное время.' . '</dfn>
					', $__templater->formRadio(array(
		'name' => 'page_criteria[after][data][user_tz]',
		'value' => ($__vars['criteria']['after']['user_tz'] ? $__vars['criteria']['after']['user_tz'] : 0),
	), array(array(
		'value' => '1',
		'label' => 'В часовом поясе пользователя',
		'_type' => 'option',
	),
	array(
		'value' => '0',
		'label' => 'В выбранном часовом поясе' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'page_criteria[after][data][timezone]',
		'value' => ($__vars['criteria']['after']['timezone'] ? $__vars['criteria']['after']['timezone'] : $__vars['visitor']['timezone']),
	), $__compilerTemp3)),
		'_type' => 'option',
	)))),
		'_type' => 'option',
	)), array(
	)) . '

			<hr class="formRowSep" />

			' . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'page_criteria[before][rule]',
		'value' => 'before',
		'selected' => $__vars['criteria']['before'],
		'label' => 'Текущая дата и время до' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array('
						<div class="inputGroup">
							' . $__templater->formDateInput(array(
		'name' => 'page_criteria[before][data][ymd]',
		'value' => $__vars['criteria']['before']['ymd'],
	)) . '
							<span class="inputGroup-text">
								' . 'Время' . $__vars['xf']['language']['label_separator'] . '
							</span>
							<span class="inputGroup" dir="ltr">
								' . $__templater->formSelect(array(
		'name' => 'page_criteria[before][data][hh]',
		'value' => $__vars['criteria']['before']['hh'],
		'class' => 'input--inline input--autoSize',
	), $__compilerTemp4) . '
								<span class="inputGroup-text">:</span>
								' . $__templater->formSelect(array(
		'name' => 'page_criteria[before][data][mm]',
		'value' => $__vars['criteria']['before']['mm'],
		'class' => 'input--inline input--autoSize',
	), $__compilerTemp5) . '
							</span>
						</div>
						<dfn class="inputChoices-explain inputChoices-explain--before">' . 'Можно оставить поле с датой пустым, чтобы критерии совпадали каждый день в указанное время.' . '</dfn>
					', $__templater->formRadio(array(
		'name' => 'page_criteria[before][data][user_tz]',
		'value' => ($__vars['criteria']['before']['user_tz'] ? $__vars['criteria']['before']['user_tz'] : 0),
	), array(array(
		'value' => '1',
		'label' => 'В часовом поясе пользователя',
		'_type' => 'option',
	),
	array(
		'value' => '0',
		'label' => 'В выбранном часовом поясе' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'page_criteria[before][data][timezone]',
		'value' => ($__vars['criteria']['before']['timezone'] ? $__vars['criteria']['before']['timezone'] : $__vars['visitor']['timezone']),
	), $__compilerTemp6)),
		'_type' => 'option',
	)))),
		'_type' => 'option',
	)), array(
	)) . '

			<hr class="formRowSep" />

			' . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'page_criteria[nodes][rule]',
		'value' => 'nodes',
		'selected' => $__vars['criteria']['nodes'],
		'label' => 'Страница находится в узлах' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'page_criteria[nodes][data][node_ids]',
		'multiple' => 'true',
		'value' => $__vars['criteria']['nodes']['node_ids'],
	), $__compilerTemp7), $__templater->formCheckBox(array(
	), array(array(
		'name' => 'page_criteria[nodes][data][node_only]',
		'value' => '1',
		'selected' => $__vars['criteria']['nodes']['node_only'],
		'label' => 'Отображать только в выбранных узлах (не учитывать дочерние)',
		'_type' => 'option',
	)))),
		'_type' => 'option',
	)), array(
		'label' => 'Узлы',
	)) . '

			<hr class="formRowSep" />

			' . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'page_criteria[style][rule]',
		'value' => 'style',
		'selected' => $__vars['criteria']['style'],
		'label' => 'Пользователь использует следующий стиль' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formSelect(array(
		'name' => 'page_criteria[style][data][style_id]',
		'value' => $__vars['criteria']['style']['style_id'],
	), $__compilerTemp8)),
		'_type' => 'option',
	),
	array(
		'name' => 'page_criteria[tab][rule]',
		'value' => 'tab',
		'selected' => $__vars['criteria']['tab'],
		'label' => 'Выбранной вкладкой навигации является' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formTextBox(array(
		'name' => 'page_criteria[tab][data][id]',
		'value' => $__vars['criteria']['tab']['id'],
		'dir' => 'ltr',
	))),
		'afterhint' => 'ID выбранной вкладки навигации. Например: <b>forums</b>, <b>members</b> или <b>help</b>.',
		'_type' => 'option',
	),
	array(
		'name' => 'page_criteria[controller][rule]',
		'value' => 'controller',
		'selected' => $__vars['criteria']['controller'],
		'label' => 'Контроллером и его действием являются' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->callMacro('helper_callback_fields', 'callback_fields', array(
		'className' => 'page_criteria[controller][data][name]',
		'methodName' => 'page_criteria[controller][data][action]',
		'classValue' => $__vars['criteria']['controller']['name'],
		'methodValue' => $__vars['criteria']['controller']['action'],
	), $__vars)),
		'afterhint' => 'Вы можете указать имя действия указывайте как <b>account-details</b> или <b>AccountDetails</b>, но не включайте <b>action</b> в качестве префикса. Имя действия сопоставляется без учёта регистра. Вы можете оставить действие пустым, чтобы применить его ко всем действиям в указанном контроллере.',
		'_type' => 'option',
	),
	array(
		'name' => 'page_criteria[view][rule]',
		'value' => 'view',
		'selected' => $__vars['criteria']['view'],
		'label' => 'Классом представления является' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formTextBox(array(
		'name' => 'page_criteria[view][data][name]',
		'value' => $__vars['criteria']['view']['name'],
		'dir' => 'ltr',
	))),
		'afterhint' => 'Имя класса представления, который отвечает за отображение данной страницы.',
		'_type' => 'option',
	),
	array(
		'name' => 'page_criteria[template][rule]',
		'value' => 'template',
		'selected' => $__vars['criteria']['template'],
		'label' => 'Шаблоном контента является' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formTextBox(array(
		'name' => 'page_criteria[template][data][name]',
		'value' => $__vars['criteria']['template']['name'],
		'dir' => 'ltr',
	))),
		'afterhint' => 'Имя шаблона, указанного в ответе контроллера.',
		'_type' => 'option',
	)), array(
		'label' => 'Информация о странице',
	)) . '

			' . '
		</li>
	');
	$__finalCompiled .= '

	';
	if ($__vars['container']) {
		$__finalCompiled .= '
		<ul class="tabPanes">
			' . $__templater->filter($__vars['panes'], array(array('raw', array()),), true) . '
		</ul>
	';
	} else {
		$__finalCompiled .= '
		' . $__templater->filter($__vars['panes'], array(array('raw', array()),), true) . '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . '

' . '

';
	return $__finalCompiled;
}
);