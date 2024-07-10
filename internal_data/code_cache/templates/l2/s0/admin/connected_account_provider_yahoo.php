<?php
// FROM HASH: 498e7853c3a6e5a071e6942d3dba8ef4
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
		'explain' => 'ID клиента (client ID), который связан с Вашим <a href="https://developer.yahoo.com/apps" target="_blank">приложением Yahoo</a> для этого домена.',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[client_secret]',
		'value' => $__vars['options']['client_secret'],
	), array(
		'label' => 'Секретная фраза клиента (Client secret)',
		'hint' => 'Обязательно',
		'explain' => 'Секретная фраза (Client secret), соответствующая Вашему ID клиента Yahoo для этого домена.',
	));
	return $__finalCompiled;
}
);