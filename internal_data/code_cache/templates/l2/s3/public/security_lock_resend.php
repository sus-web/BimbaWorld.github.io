<?php
// FROM HASH: 9cc935a6f89e9a49607e62dd5d5e88d8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Ещё раз отправить электронное письмо сброса блокировки безопасности');
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Вы уверены, что хотите повторно отправить электронное письмо о сбросе блокировки безопасности? Любые предыдущие электронные письма сброса блокировки безопасности больше не будут работать. Это письмо будет отправлено на ' . $__templater->filter($__vars['xf']['visitor']['email'], array(array('email_display', array()),), true) . '.' . '
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Повторить отправку письма',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('security-lock/resend', ), false),
		'class' => 'block',
		'ajax' => 'true',
		'data-redirect' => 'off',
		'data-reset-complete' => 'true',
	));
	return $__finalCompiled;
}
);