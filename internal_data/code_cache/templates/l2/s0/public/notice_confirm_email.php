<?php
// FROM HASH: f3e7f4436962423b5ca6f4edac833b62
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'В данный момент Ваша учётная запись ожидает подтверждения. Письмо с подтверждением было отправлено на адрес: ' . $__templater->filter($__vars['xf']['visitor']['email'], array(array('email_display', array()),), true) . '.' . '
';
	if ($__vars['xf']['session']['hasPreRegActionPending']) {
		$__finalCompiled .= '
	' . 'Как только Ваша регистрация будет завершена, Ваш контент будет опубликован автоматически.' . '
';
	}
	$__finalCompiled .= '<br />
<a href="' . $__templater->func('link', array('account-confirmation/resend', ), true) . '" data-xf-click="overlay">' . 'Отправить письмо с подтверждением ещё раз' . '</a>';
	return $__finalCompiled;
}
);