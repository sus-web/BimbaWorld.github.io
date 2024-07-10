<?php
// FROM HASH: ac8c867f0b803afda8539298e787361e
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['xf']['cookieConsent'], 'getMode', array()) == 'advanced') {
		$__finalCompiled .= '
	<div class="u-pageCentered">
		' . $__templater->callMacro(null, 'misc_cookies::cookie_consent_form', array(), $__vars) . '
	</div>
';
	} else {
		$__finalCompiled .= '
	<div class="u-alignCenter">
		' . 'На данном сайте используются файлы cookie, чтобы персонализировать контент и сохранить Ваш вход в систему, если Вы зарегистрируетесь.<br />
Продолжая использовать этот сайт, Вы соглашаетесь на использование наших файлов cookie.' . '
	</div>

	<div class="u-inputSpacer u-alignCenter">
		' . $__templater->button('Принять', array(
			'icon' => 'confirm',
			'href' => $__templater->func('link', array('account/dismiss-notice', null, array('notice_id' => $__vars['notice']['notice_id'], ), ), false),
			'class' => 'js-noticeDismiss button--notice',
		), '', array(
		)) . '
		' . $__templater->button('Узнать больше' . $__vars['xf']['language']['ellipsis'], array(
			'href' => $__templater->func('link', array('help/cookies', ), false),
			'class' => 'button--notice',
		), '', array(
		)) . '
	</div>
';
	}
	return $__finalCompiled;
}
);