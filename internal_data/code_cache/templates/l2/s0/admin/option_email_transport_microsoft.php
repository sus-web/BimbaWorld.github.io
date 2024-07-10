<?php
// FROM HASH: 3279e0e7743bc7ee5d46706d6461e9e7
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
				' . 'Вам необходимо перейти на портал Microsoft Azure и <a href="https://learn.microsoft.com/en-us/azure/active-directory/develop/quickstart-register-app#register-an-application" target="_blank">зарегистрировать приложение Azure Active Directory</a>. Так же необходимо убедиться, что учетные данные поддерживают перенаправление на следующий URL-адрес' . $__vars['xf']['language']['label_separator'] . '
				<div><code>' . $__templater->escape($__vars['redirectUri']) . '</code></div>
			', array(
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'client_id',
		'value' => $__vars['option']['option_value']['oauth']['client_id'],
		'required' => 'required',
	), array(
		'label' => 'ID клиента (Client ID)',
		'explain' => 'Вы можете получить свой client ID через портал <a href=\'https://portal.azure.com/\' target=\'_blank\'>Microsoft Azure</a>.',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'client_secret',
		'required' => 'required',
	), array(
		'label' => 'Секретная фраза клиента (Client secret)',
		'explain' => 'Секрет, соответствующий указанному выше идентификатору клиента Azure.',
	)) . '

			' . $__templater->formInfoRow('
				' . 'Для продолжения Вы будете перенаправлены на сайт Microsoft, чтобы подтвердить аккаунт, к которому Вы хотите подключиться.' . '
			', array(
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'submit' => 'Продолжить',
	), array(
	)) . '
	</div>
	' . $__templater->formHiddenVal('oauth_provider', 'microsoft', array(
	)) . '
', array(
		'action' => $__templater->func('link', array('options/email-transport-oauth', $__vars['option'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	)) . '
';
	return $__finalCompiled;
}
);