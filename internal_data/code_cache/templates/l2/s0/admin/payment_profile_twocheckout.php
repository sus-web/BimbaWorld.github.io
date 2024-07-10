<?php
// FROM HASH: b6fc7727f153d640e390054283dd3d8f
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formTextBoxRow(array(
		'name' => 'options[account_number]',
		'value' => $__vars['profile']['options']['account_number'],
	), array(
		'label' => 'Номер учётной записи (Account number)',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[secret_word]',
		'value' => $__vars['profile']['options']['secret_word'],
	), array(
		'label' => 'Секретное слово (Secret word)',
		'explain' => 'Номер учётной записи Вы можете увидеть в своём аккаунте <a href="https://www.2checkout.com/login">2Checkout</a>. После входа в свой аккаунт, Вы можете сами установить Ваше секретное слово, перейдя по пути: Account > Site Management.',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[api_username]',
		'value' => $__vars['profile']['options']['api_username'],
	), array(
		'label' => 'API имя пользователя (API username)',
		'hint' => 'Указывать не обязательно',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[api_password]',
		'value' => $__vars['profile']['options']['api_password'],
	), array(
		'label' => 'API пароль (API password)',
		'hint' => 'Указывать не обязательно',
		'explain' => 'Поля "API имя пользователя (API username)" и "API пароль (API password)" являются обязательными к заполнению только в том случае, если Вы хотите разрешить пользователям отменять повторяющиеся подписки.<br /><br />Если оставить вышеуказанные поля пустыми, то повторяющиеся подписки могут быть отменены только через Вашу учётную запись на сайте <a href="https://www.2checkout.com/login" target="_blank">2Checkout</a>.',
	));
	return $__finalCompiled;
}
);