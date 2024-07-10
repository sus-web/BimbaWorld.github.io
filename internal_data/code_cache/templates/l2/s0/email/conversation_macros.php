<?php
// FROM HASH: c0e48021b94c07bd5b869cf19e6e6720
return array(
'macros' => array('footer' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'conversation' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	' . '<p class="minorText">Пожалуйста, не отвечайте на это сообщение. Вы должны посетить форум, чтобы ответить.</p>
<p class="minorText">Это сообщение было отправлено Вам, так как в Ваших настройках указано, что Вы желаете получать уведомления при появлении нового сообщения в переписке. Если Вы больше не хотите получать эти сообщения, Вы можете <a href="' . $__templater->func('link', array('canonical:email-stop/conversation', $__vars['xf']['toUser'], ), true) . '">отключить получение сообщений электронной почты в переписках</a> или <a href="{disable_all_link}">перестать получать все сообщения электронной почты</a>.</p>' . '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';

	return $__finalCompiled;
}
);