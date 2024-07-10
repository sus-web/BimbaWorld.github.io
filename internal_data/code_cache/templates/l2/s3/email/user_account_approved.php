<?php
// FROM HASH: c1c6f62979bd3c293fa1ae116e26dfba
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<mail:subject>
	' . 'Одобрение учётной записи на форуме: ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '' . '
</mail:subject>

' . '<p>' . $__templater->escape($__vars['user']['username']) . ', учётная запись, которую Вы зарегистрировали на сайте ' . (((('<a href="' . $__templater->func('link', array('canonical:index', ), true)) . '">') . $__templater->escape($__vars['xf']['options']['boardTitle'])) . '</a>') . ', была одобрена. Теперь, Вы можете посетить наш сайт, как зарегистрированный пользователь. </p>' . '

<h2>' . '<a href="' . $__templater->func('link', array('canonical:index', ), true) . '">Посетить ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '</a>' . '</h2>';
	return $__finalCompiled;
}
);