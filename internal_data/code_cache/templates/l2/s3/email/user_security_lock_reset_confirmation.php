<?php
// FROM HASH: e434f8bce260ab83731689228b12b4b5
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<mail:subject>
	' . '' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' - пожалуйста, сбросьте свой пароль' . '
</mail:subject>

' . '<p>' . $__templater->escape($__vars['user']['username']) . ', чтобы обеспечить безопасность Вашей учётной записи на сайте ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ', Вам необходимо изменить свой пароль. Для этого нужно нажать кнопку ниже. Данное действие позволит Вам выбрать новый пароль.</p>' . '

<p><a href="' . $__templater->func('link', array('canonical:security-lock/reset', $__vars['user'], array('c' => $__vars['confirmation']['confirmation_key'], ), ), true) . '" class="button">' . 'Сбросить пароль' . '</a></p>';
	return $__finalCompiled;
}
);