<?php
// FROM HASH: 0460be56b6aa9e78d729919cbc3c93f9
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => $__vars['inputName'] . '[enabled]',
		'label' => 'Проверять новые регистрации по базе сервиса StopForumSpam.',
		'value' => '1',
		'selected' => $__vars['option']['option_value']['enabled'],
		'data-hide' => 'true',
		'hint' => 'StopForumSpam анализирует данные, собранные с зарегистрированных пользователей и пытается определить, являются ли они спамерами. При этом учитываются предупреждающие флаги, генерируемые пользователем. Флаги включают имя пользователя, адрес электронной почты и IP-адрес.',
		'_dependent' => array($__templater->formCheckBox(array(
	), array(array(
		'name' => '_moderateThreshold',
		'selected' => $__vars['option']['option_value']['moderateThreshold'],
		'label' => 'Проверять регистрации, если обнаружено следующее количество флагов' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array('
					' . $__templater->formNumberBox(array(
		'name' => $__vars['inputName'] . '[moderateThreshold]',
		'min' => '1',
		'max' => '3',
		'value' => $__vars['option']['option_value']['moderateThreshold'],
	)) . '
					<p class="formRow-explain">' . 'Укажите число предупреждающих флагов (1-3), прежде чем регистрация отправится в очередь на проверку, вместо того, чтобы быть принятой автоматически.' . '</p>
				'),
		'_type' => 'option',
	),
	array(
		'name' => '_denyThreshold',
		'selected' => $__vars['option']['option_value']['denyThreshold'],
		'label' => 'Отказывать в регистрации, если обнаружено следующее число флагов' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array('
					' . $__templater->formNumberBox(array(
		'name' => $__vars['inputName'] . '[denyThreshold]',
		'min' => '1',
		'max' => '3',
		'value' => $__vars['option']['option_value']['denyThreshold'],
	)) . '
					<p class="formRow-explain">' . 'Укажите число предупреждающих флагов (1-3), прежде чем пользователю будет отказано в регистрации. Это число должно быть таким же или больше, чем число в опции выше для очереди на проверку.' . '</p>
				'),
		'_type' => 'option',
	),
	array(
		'name' => '_lastSeenCutOff',
		'selected' => $__vars['option']['option_value']['lastSeenCutOff'],
		'label' => 'Учитывать только флаги за последние X дней' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array('
					' . $__templater->formNumberBox(array(
		'name' => $__vars['inputName'] . '[lastSeenCutOff]',
		'min' => '0',
		'value' => $__vars['option']['option_value']['lastSeenCutOff'],
		'units' => 'Дней',
	)) . '
					<p class="formRow-explain">' . 'Для того, чтобы избежать ложных срабатываний, можно выбрать подсчёт совпадений с базой данных спамеров, записанных только в течение ограниченного периода времени.' . '</p>
				'),
		'_type' => 'option',
	),
	array(
		'name' => '_frequencyCutOff',
		'selected' => $__vars['option']['option_value']['frequencyCutOff'],
		'label' => 'Учитывать только флаги, записанные как минимум следующее число раз' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array('
					' . $__templater->formNumberBox(array(
		'name' => $__vars['inputName'] . '[frequencyCutOff]',
		'min' => '0',
		'value' => $__vars['option']['option_value']['frequencyCutOff'],
	)) . '
					<p class="formRow-explain">' . 'Можно выбрать учёт совпадений с базой данных спамеров, о которых сообщалось ранее уже определённое число раз.' . '</p>
				'),
		'_type' => 'option',
	),
	array(
		'name' => $__vars['inputName'] . '[hashEmail]',
		'selected' => $__vars['option']['option_value']['hashEmail'],
		'label' => 'Хэшировать адреса электронных почт перед отправкой',
		'hint' => 'Если выбрано, то адрес электронной почты пользователя будет преобразован в MD5-хэш перед отправкой. Это уменьшает количество проверок, которые возможны, включая проверки чёрного списка.<br>
<strong>Примечание:</strong> Не хэшированный адрес электронной почты будет отправлен при сообщении о <em>новых</em> спамерах, независимо от этой опции.',
		'_type' => 'option',
	)))),
		'_type' => 'option',
	),
	array(
		'name' => $__vars['inputName'] . '[submitRejections]',
		'value' => '1',
		'selected' => $__vars['option']['option_value']['submitRejections'],
		'label' => 'Отправлять информацию о спамерах, используя API-ключ сервиса StopForumSpam' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array('
			' . $__templater->formTextBox(array(
		'name' => $__vars['inputName'] . '[apiKey]',
		'value' => $__vars['option']['option_value']['apiKey'],
		'pattern' => '^[a-zA-Z0-9]+$',
		'title' => 'Пожалуйста, укажите корректный API-ключ',
	)) . '
			<p class="formRow-explain">' . 'Если у Вас есть API-ключ от сервиса StopForumSpam, Вы можете автоматически отправлять информацию о спамерах, в целях совершенствования базы данных StopForumSpam для других пользователей. Будет отправляться информация о спамерах, которые блокируются после очистки спама.<br>
<strong>Примечание:</strong> <strong>Примечание:</strong> Не хэшированный адрес электронной почты будет отправлен при сообщении о <em>новых</em> спамерах.' . '</p>
		'),
		'_type' => 'option',
	)), array(
		'label' => $__templater->escape($__vars['option']['title']),
		'hint' => $__templater->escape($__vars['hintHtml']),
		'explain' => $__templater->escape($__vars['explainHtml']),
		'html' => $__templater->escape($__vars['listedHtml']),
		'rowclass' => $__vars['rowClass'],
	));
	return $__finalCompiled;
}
);