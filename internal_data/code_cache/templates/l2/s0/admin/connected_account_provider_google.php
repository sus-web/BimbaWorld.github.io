<?php
// FROM HASH: bb2635355058b47191c42069536b7c07
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formTextBoxRow(array(
		'name' => 'options[client_id]',
		'value' => $__vars['options']['client_id'],
	), array(
		'label' => 'ID клиента (Client ID)',
		'hint' => 'Обязательно',
		'explain' => 'Ввод ID клиента (Client ID) позволит пользователям авторизовываться на форуме, используя свою учётную запись Google. ID клиента можно получить в <a href="https://console.developers.google.com/" target="_blank">консоли разработчика</a> Google.',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[client_secret]',
		'value' => $__vars['options']['client_secret'],
	), array(
		'label' => 'Секретная фраза клиента (Client secret)',
		'hint' => 'Обязательно',
		'explain' => 'Секретная фраза (Client secret), соответствующая Вашему ID клиента Google.',
	));
	return $__finalCompiled;
}
);