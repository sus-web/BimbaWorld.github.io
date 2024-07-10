<?php
// FROM HASH: e64a06013ffe087ba93550535bf46dbb
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Связать с ' . $__templater->escape($__vars['provider']['title']) . '');
	$__finalCompiled .= '

';
	$__compilerTemp1 = $__vars;
	$__compilerTemp1['pageSelected'] = 'connected_account';
	$__templater->wrapTemplate('account_wrapper', $__compilerTemp1);
	$__finalCompiled .= '

';
	$__compilerTemp2 = '';
	if ($__vars['passwordEmailed']) {
		$__compilerTemp2 .= '
				' . $__templater->formInfoRow('
					<div class="blockMessage blockMessage--important blockMessage--iconic">' . 'Чтобы подтвердить Вашу личность, мы отправили электронное письмо на адрес ' . $__templater->filter($__vars['user']['email'], array(array('email_display', array()),), true) . ', в котором Вам предлагается создать пароль. После того, как Вы перейдете по этой ссылке, пожалуйста, введите свой новый пароль ниже.' . '</div>
				', array(
		)) . '
			';
	}
	$__finalCompiled .= $__templater->form('

	<div class="block-container">
		<div class="block-body">
			' . $__compilerTemp2 . '

			' . $__templater->formRow('
				' . $__templater->escape($__vars['xf']['visitor']['username']) . '
			', array(
		'label' => 'Связать с',
	)) . '

			' . $__templater->formPasswordBoxRow(array(
		'name' => 'password',
	), array(
		'label' => 'Пароль',
		'explain' => 'Это пароль учётной записи сайта ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ', которую Вы хотите ассоциировать.',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Связать',
	), array(
	)) . '
	</div>
	' . $__templater->func('redirect_input', array($__vars['redirect'], null, true)) . '
', array(
		'action' => $__templater->func('link', array('register/connected-accounts/associate', $__vars['provider'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);