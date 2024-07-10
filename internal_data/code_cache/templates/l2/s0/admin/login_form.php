<?php
// FROM HASH: 06ff16731655a61085a53487b1a759ef
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->setPageParam('template', 'LOGIN_CONTAINER');
	$__finalCompiled .= '

';
	$__vars['afterInput'] = $__templater->preEscaped($__templater->fontAwesome('fa-key', array(
	)));
	$__finalCompiled .= $__templater->form('
	<div><a href="' . $__templater->escape($__vars['xf']['options']['boardUrl']) . '"><img src="' . $__templater->func('base_url', array('styles/default/xenforo/xenforo-logo.svg', ), true) . '"
		width="100" height="36" alt="XenForo Ltd." /></a></div>
	<!--<h1>' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '</h1>-->
	<dl class="adminLogin-row">
		<dt>' . 'Имя пользователя или email' . $__vars['xf']['language']['label_separator'] . '</dt>
		<dd>
			' . $__templater->formTextBox(array(
		'name' => 'login',
		'value' => $__vars['xf']['visitor']['username'],
		'placeholder' => 'Имя пользователя или адрес электронной почты' . $__vars['xf']['language']['ellipsis'],
		'aria-label' => 'Имя пользователя или адрес электронной почты',
		'autofocus' => 'autofocus',
	)) . '
			' . $__templater->fontAwesome('fa-user', array(
	)) . '
		</dd>
	</dl>
	<dl class="adminLogin-row">
		<dt>' . 'Пароль' . $__vars['xf']['language']['label_separator'] . '</dt>
		<dd>
			' . '' . '
			' . $__templater->formPasswordBox(array(
		'name' => 'password',
		'placeholder' => 'Пароль' . $__vars['xf']['language']['ellipsis'],
		'aria-label' => 'Пароль',
		'afterinputhtml' => $__vars['afterInput'],
	)) . '
		</dd>
	</dl>
	<div class="adminLogin-row adminLogin-row--submit">
		' . $__templater->button('Вход в панель управления', array(
		'type' => 'submit',
		'icon' => 'login',
	), '', array(
	)) . '
		<div class="adminLogin-boardTitle">' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '</div>
	</div>
', array(
		'action' => $__templater->func('link', array('login/login', ), false),
		'ajax' => 'true',
		'class' => 'adminLogin-contentForm',
	));
	return $__finalCompiled;
}
);