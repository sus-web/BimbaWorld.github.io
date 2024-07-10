<?php
// FROM HASH: b8ec508479884757180b293697d0c019
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<mail:subject>
	' . '' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' - Запрос на сброс пароля' . '
</mail:subject>

' . '<p>' . $__templater->escape($__vars['user']['username']) . ', для сброса Вашего пароля на сайте ' . (((('<a href="' . $__templater->func('link', array('canonical:index', ), true)) . '">') . $__templater->escape($__vars['xf']['options']['boardTitle'])) . '</a>') . ', пройдите по нижеследующей ссылке. Это позволит Вам выбрать новый пароль.</p>' . '

<p><a href="' . $__templater->func('link', array('canonical:lost-password/confirm', $__vars['user'], array('c' => $__vars['confirmation']['confirmation_key'], ), ), true) . '" class="button">' . 'Сбросить пароль' . '</a></p>

';
	if ($__vars['isAdminReset']) {
		$__finalCompiled .= '
	<p>' . 'Пароль был сброшен администратором ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' от Вашего имени.' . '</p>
';
	} else {
		$__finalCompiled .= '
	<p>' . 'Если Вы не запрашивали это письмо, то можете спокойно его проигнорировать.' . '</p>
';
	}
	return $__finalCompiled;
}
);