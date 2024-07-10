<?php
// FROM HASH: c291453f47a2ced89cba08a90d0dc8cc
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'Попытка отправки письма на ' . $__templater->filter($__vars['xf']['visitor']['email'], array(array('email_display', array()),), true) . ' не удалась. Пожалуйста, обновите Ваш адрес электронной почты.' . '<br />
<a href="' . $__templater->func('link', array('account/email', ), true) . '">' . 'Обновите свои контактные данные' . '</a>';
	return $__finalCompiled;
}
);