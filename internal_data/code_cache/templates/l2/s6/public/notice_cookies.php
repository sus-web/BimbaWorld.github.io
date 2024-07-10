<?php
// FROM HASH: 5aaf4d984584ab4fd34024d576a115e9
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="">
	' . 'На данном сайте используются файлы cookie, чтобы персонализировать контент и сохранить Ваш вход в систему, если Вы зарегистрируетесь.<br />
Продолжая использовать этот сайт, Вы соглашаетесь на использование наших файлов cookie.' . '
</div>

<div class="u-inputSpacer u-alignCenter uix_cookieButtonRow">
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
</div>';
	return $__finalCompiled;
}
);