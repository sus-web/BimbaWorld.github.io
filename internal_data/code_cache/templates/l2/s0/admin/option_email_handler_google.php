<?php
// FROM HASH: 60c53a453fff4681f42b031f4aab62b1
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped($__templater->escape($__vars['option']['title']));
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'email_setup_explain:' . '
				<div><code>' . $__templater->escape($__vars['redirectUri']) . '</code></div>
			', array(
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'client_id',
		'value' => $__vars['option']['option_value']['oauth']['client_id'],
		'required' => 'required',
	), array(
		'label' => 'ID клиента (Client ID)',
		'explain' => 'Вы можете получить свой client ID в <a href="https://console.developers.google.com/" target="_blank">консоли разработчика Google</a>',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'client_secret',
		'required' => 'required',
	), array(
		'label' => 'Секретная фраза клиента (Client secret)',
		'explain' => 'Secret, который соответствует Вашему ID клиента Google выше.',
	)) . '

			' . $__templater->formRadioRow(array(
		'name' => 'type',
		'value' => ($__vars['option']['option_value']['type'] ?: 'pop3'),
	), array(array(
		'value' => 'pop3',
		'label' => 'POP3',
		'_type' => 'option',
	),
	array(
		'value' => 'imap',
		'label' => 'IMAP',
		'_type' => 'option',
	)), array(
		'label' => 'Тип соединения',
	)) . '

			' . $__templater->formInfoRow('
				' . 'Для продолжения Вы будете перенаправлены на сайт Google, чтобы подтвердить аккаунт, к которому Вы хотите подключиться.' . '
			', array(
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'submit' => 'Продолжить',
	), array(
	)) . '
	</div>
	' . $__templater->formHiddenVal('oauth_provider', 'google', array(
	)) . '
', array(
		'action' => $__templater->func('link', array('options/email-handler-oauth', $__vars['option'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);