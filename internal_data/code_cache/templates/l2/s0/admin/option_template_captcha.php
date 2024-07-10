<?php
// FROM HASH: 7f1d1606f5817ffec9674a8c84765779
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__vars['extraKeysInput'] = $__templater->preEscaped($__templater->callMacro('option_macros', 'input_name', array(
		'id' => 'extraCaptchaKeys',
	), $__vars));
	$__finalCompiled .= '
' . $__templater->formRadioRow(array(
		'name' => $__vars['inputName'],
		'value' => $__vars['option']['option_value'],
	), array(array(
		'value' => '',
		'label' => 'Нет',
		'_type' => 'option',
	),
	array(
		'value' => 'HCaptcha',
		'data-hide' => 'true',
		'label' => 'Использовать hCaptcha',
		'hint' => 'Для этой CAPTCHA не требуется дополнительной настройки. Но если Вам нужны дополнительные функции, такие как настройки сложности и аналитика, то Вы должны получить свои собственные API-ключи на сайте <a href="https://www.hcaptcha.com/" target="_blank">https://www.hcaptcha.com/</a> и указать их ниже.',
		'_dependent' => array('
			<div>' . 'Ключ' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[hCaptchaSiteKey]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['hCaptchaSiteKey'],
	)) . '
		', '
			<div>' . 'Секретный ключ' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[hCaptchaSecretKey]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['hCaptchaSecretKey'],
	)) . '
		', '
			' . $__templater->formCheckBox(array(
	), array(array(
		'name' => $__vars['extraKeysInput'] . '[hCaptchaInvisible]',
		'selected' => $__vars['xf']['options']['extraCaptchaKeys']['hCaptchaInvisible'],
		'label' => 'Использовать невидимую hCaptcha',
		'_type' => 'option',
	))) . '
		'),
		'_type' => 'option',
	),
	array(
		'value' => 'Turnstile',
		'data-hide' => 'true',
		'label' => 'Использовать Cloudflare Turnstile',
		'hint' => '<a href="https://www.cloudflare.com/products/turnstile/" target="_blank">https://www.cloudflare.com/products/turnstile/</a>',
		'_dependent' => array('
			<div>' . 'Ключ' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[turnstileSiteKey]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['turnstileSiteKey'],
	)) . '
		', '
			<div>' . 'Секретный ключ' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[turnstileSecretKey]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['turnstileSecretKey'],
	)) . '
		'),
		'_type' => 'option',
	),
	array(
		'value' => 'ReCaptcha',
		'data-hide' => 'true',
		'label' => 'Использовать reCAPTCHA ',
		'hint' => '<a href="https://www.google.com/recaptcha" target="_blank">https://www.google.com/recaptcha</a><br />
<br />
Примечание: Вы должны выбрать "reCAPTCHA v2" в качестве типа при создании ключа. Если Вы хотите использовать невидимую CAPTCHA, то также должны выбрать опцию "Invisible reCAPTCHA badge" при создании ключа.',
		'_dependent' => array('
			<div>' . 'Ключ' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[reCaptchaSiteKey]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['reCaptchaSiteKey'],
	)) . '
		', '
			<div>' . 'Секретный ключ' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[reCaptchaSecretKey]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['reCaptchaSecretKey'],
	)) . '
		', '
			' . $__templater->formCheckBox(array(
	), array(array(
		'name' => $__vars['extraKeysInput'] . '[reCaptchaInvisible]',
		'selected' => $__vars['xf']['options']['extraCaptchaKeys']['reCaptchaInvisible'],
		'label' => 'Использовать невидимую reCAPTCHA',
		'_type' => 'option',
	))) . '
		'),
		'_type' => 'option',
	),
	array(
		'value' => 'Question',
		'label' => 'Использовать CAPTCHA вопрос-ответ',
		'hint' => '<a href="' . $__templater->func('link', array('captcha-questions', ), true) . '">' . 'Определите свои вопросы' . '</a>',
		'_type' => 'option',
	),
	array(
		'value' => 'TextCaptcha',
		'data-hide' => 'true',
		'label' => 'Использовать textCAPTCHA',
		'hint' => '<a href="https://textcaptcha.com/" target="_blank">https://textcaptcha.com/</a>',
		'_dependent' => array('
			<div>' . 'Ключ API (API key)' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[textCaptchaApiKey]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['textCaptchaApiKey'],
	)) . '
		'),
		'_type' => 'option',
	),
	array(
		'value' => 'SolveMedia',
		'data-hide' => 'true',
		'label' => 'Использовать Solve Media',
		'hint' => '<a href="https://www.solvemedia.com/" target="_blank">https://www.solvemedia.com/</a>',
		'_dependent' => array('
			<div>' . 'Открытый ключ (Challenge Key)' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[solveMediaCKey]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['solveMediaCKey'],
	)) . '
		', '
			<div>' . 'Ключ верификации' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[solveMediaVKey]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['solveMediaVKey'],
	)) . '
		'),
		'_type' => 'option',
	),
	array(
		'value' => 'KeyCaptcha',
		'data-hide' => 'true',
		'label' => 'Использовать KeyCAPTCHA',
		'hint' => '<a href="https://www.keycaptcha.com/" target="_blank">https://www.keycaptcha.com/</a>',
		'_dependent' => array('
			<div>' . 'ID пользователя' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[keyCaptchaUserId]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['keyCaptchaUserId'],
	)) . '
		', '
			<div>' . 'Личный ключ (Private Key)' . $__vars['xf']['language']['label_separator'] . '</div>
			' . $__templater->formTextBox(array(
		'name' => $__vars['extraKeysInput'] . '[keyCaptchaPrivateKey]',
		'value' => $__vars['xf']['options']['extraCaptchaKeys']['keyCaptchaPrivateKey'],
	)) . '
		'),
		'_type' => 'option',
	)), array(
		'label' => $__templater->escape($__vars['option']['title']),
		'hint' => $__templater->escape($__vars['hintHtml']),
		'explain' => $__templater->escape($__vars['explainHtml']),
		'rowclass' => $__vars['rowClass'],
		'html' => '
		' . $__templater->escape($__vars['listedHtml']) . '
		' . $__templater->callMacro('option_macros', 'listed_html', array(
		'id' => 'extraCaptchaKeys',
	), $__vars) . '
	',
	));
	return $__finalCompiled;
}
);