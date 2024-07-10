<?php
// FROM HASH: 005a99dff080cf536efc2ffe3a5d334b
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formInfoRow('На адрес, связанный с этой учетной записью, было отправлено письмо с одноразовым кодом. Пожалуйста, введите этот код, чтобы продолжить.', array(
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'code',
		'autofocus' => 'autofocus',
		'inputmode' => 'numeric',
		'pattern' => '[0-9]*',
	), array(
		'label' => 'Код подтверждения адреса электронной почты',
	));
	return $__finalCompiled;
}
);