<?php
// FROM HASH: 2aed4e9192474946e8c188a6bc1b5ed7
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formTextBoxRow(array(
		'name' => 'options[app_id]',
		'value' => $__vars['options']['app_id'],
	), array(
		'label' => 'Идентификатор приложения (App ID)',
		'hint' => 'Обязательно',
		'explain' => 'ID <a href="https://developers.facebook.com/apps" target="_blank"> приложения Facebook</a> для этого домена.',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[app_secret]',
		'value' => $__vars['options']['app_secret'],
	), array(
		'label' => 'Секретная фраза приложения (App secret)',
		'hint' => 'Обязательно',
		'explain' => 'Секретная фраза (App Secret) приложения Facebook, созданного для этого домена.',
	));
	return $__finalCompiled;
}
);