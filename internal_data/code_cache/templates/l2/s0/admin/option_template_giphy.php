<?php
// FROM HASH: dfd3259b96212e03fe46e1546da82a86
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => $__vars['inputName'] . '[enabled]',
		'selected' => $__vars['option']['option_value']['enabled'],
		'label' => $__templater->escape($__vars['option']['title']),
		'_dependent' => array('
			<div>' . 'Ключ API (API key)' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['inputName'] . '[api_key]',
		'value' => $__vars['option']['option_value']['api_key'],
		'required' => 'required',
		'pattern' => '^[a-zA-Z0-9]{32}$',
		'title' => 'Пожалуйста, укажите корректный API-ключ',
	)) . '
			<dfn class="formRow-explain">' . 'Вы можете получить свой ключ в <a href="https://developers.giphy.com/dashboard/" target="_blank">панели разработчика GIPHY</a> и обновить его до рабочей версии.' . '</dfn>
		', '
			<div>' . 'Показывать GIF-изображения только до и включая следующий рейтинг' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formSelect(array(
		'name' => $__vars['inputName'] . '[rating]',
		'id' => $__vars['option']['option_id'] . '_rating',
		'value' => $__vars['option']['option_value']['rating'],
	), array(array(
		'value' => 'g',
		'label' => 'G - Общая аудитория (General audiences)',
		'_type' => 'option',
	),
	array(
		'value' => 'pg',
		'label' => 'PG - Предлагается родительский контроль (Parental guidance suggested)',
		'_type' => 'option',
	),
	array(
		'value' => 'pg-13',
		'label' => 'PG-13 - Родители строго предупреждены (Parents strongly cautioned)',
		'_type' => 'option',
	),
	array(
		'value' => 'r',
		'label' => 'R - Ограниченный (Restricted)',
		'_type' => 'option',
	))) . '
			<dfn class="formRow-explain">' . 'Чтобы узнать о рейтингах, посетите страницу <a href="https://developers.giphy.com/docs/optional-settings#rating" target="_blank">документации для разработчиков GIPHY</a>.' . '</dfn>
		'),
		'_type' => 'option',
	)), array(
		'hint' => $__templater->escape($__vars['hintHtml']),
		'explain' => $__templater->escape($__vars['explainHtml']),
		'html' => $__templater->escape($__vars['listedHtml']),
		'rowclass' => $__vars['rowClass'],
	));
	return $__finalCompiled;
}
);