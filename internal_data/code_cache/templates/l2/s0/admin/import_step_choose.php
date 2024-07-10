<?php
// FROM HASH: f46bb70baa49bd1171b47c32608f4072
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Настроить импортёр' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['title']));
	$__finalCompiled .= '

<div class="js-importConfigForm">

	';
	if ($__vars['isCoreImporter'] AND $__vars['canRetainIds']) {
		$__finalCompiled .= '
		<div class="blockMessage blockMessage--warning blockMessage--iconic">
			' . 'Чтобы избежать неожиданных объединений пользователей, убедитесь, что Ваш <a href="' . $__templater->func('link', array('users/edit', $__vars['xf']['visitor'], ), true) . '" target="_blank">текущий пользователь</a> использует имя и адрес электронной почты, которые не используются никакими другими пользователями в исходной базе данных!' . '
		</div>
	';
	}
	$__finalCompiled .= '

	';
	$__compilerTemp1 = array();
	if ($__templater->isTraversable($__vars['availableSteps'])) {
		foreach ($__vars['availableSteps'] AS $__vars['stepId'] => $__vars['stepInfo']) {
			$__compilerTemp1[] = array(
				'value' => $__vars['stepId'],
				'selected' => 1,
				'label' => $__templater->escape($__vars['stepInfo']['title']),
				'_type' => 'option',
			);
		}
	}
	$__compilerTemp2 = array();
	if ($__vars['canRetainIds']) {
		$__compilerTemp3 = '';
		if ($__vars['isCoreImporter']) {
			$__compilerTemp3 .= '<strong>' . 'Примечание: если выбрано, идентификатор пользователя 1 из исходной базы данных будет объединён с идентификатором пользователя 1 в XenForo. Электронный адрес и пароль пользователя XenForo будут сохранены для обеспечения безопасности.' . '</strong>';
		}
		$__compilerTemp2[] = array(
			'name' => 'retain_ids',
			'selected' => 1,
			'label' => 'Сохранять ID содержимого',
			'hint' => '
								' . 'Если выбрано, по возможности, тот же идентификатор будет использоваться в XenForo, как это было в исходной базе данных. Это упростит перенаправление старых ссылок на XenForo.' . '
								' . $__compilerTemp3 . '
							',
			'_type' => 'option',
		);
	} else {
		$__compilerTemp2[] = array(
			'disabled' => 'disabled',
			'label' => 'Сохранять ID содержимого',
			'hint' => '<b>Примечание</b>: ID содержимого не могут быть сохранены при импорте в форум с существующими данными, так как это вызовет конфликт с существующим контентом. Импортированный контент получит новые идентификаторы, и сопоставление должно быть выполнено через журнал импорта.',
			'_type' => 'option',
		);
	}
	$__finalCompiled .= $__templater->form('

		<div class="block-container">
			<div class="block-body">
				' . $__templater->formCheckBoxRow(array(
		'name' => 'steps[]',
		'listclass' => 'data',
	), $__compilerTemp1, array(
		'label' => 'Данные для импорта',
		'explain' => '
						' . 'Для некоторых шагов могут потребоваться другие шаги в качестве предварительного условия. Невыбранные шаги будут автоматически добавлены, если они требуются для выбранного шага.' . '
					',
		'hint' => '
						<br />
						' . $__templater->formCheckBox(array(
		'standalone' => 'true',
	), array(array(
		'check-all' => '.data',
		'label' => 'Выделить всё',
		'_type' => 'option',
	))) . '
					',
	)) . '

				' . $__templater->formCheckBoxRow(array(
	), $__compilerTemp2, array(
		'label' => 'ID содержимого',
	)) . '

				' . $__templater->formTextBoxRow(array(
		'name' => 'log_table',
		'required' => 'required',
		'value' => $__vars['logTable'],
	), array(
		'hint' => 'Обязательно',
		'label' => 'Название таблицы журнала импорта',
		'explain' => 'Во время импорта будет создан журнал импорта, который сопоставляет исходные идентификаторы контента с недавно импортированными идентификаторами. Он может быть использован для помощи с перенаправлением URL-адресов или дополнительным импортом. Используйте только символы a-z, 0-9 и подчёркивания.',
	)) . '
			</div>
			' . $__templater->formSubmitRow(array(
		'submit' => 'Продолжить' . $__vars['xf']['language']['ellipsis'],
	), array(
	)) . '
		</div>

		' . $__templater->formHiddenVal('config', $__templater->filter($__vars['baseConfig'], array(array('json', array()),), false), array(
	)) . '
		' . $__templater->formHiddenVal('importer', $__vars['importerId'], array(
	)) . '
	', array(
		'action' => $__templater->func('link', array('import/step-config', ), false),
		'class' => 'block',
		'ajax' => 'true',
		'data-replace' => '.js-importConfigForm',
	)) . '
</div>';
	return $__finalCompiled;
}
);