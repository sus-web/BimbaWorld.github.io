<?php
// FROM HASH: 65568bfd513eb4edbd1367c0b07c1a78
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeJs(array(
		'src' => 'xf/login_signup.js',
		'min' => '1',
	));
	$__finalCompiled .= '
';
	$__templater->setPageParam('uix_hideExtendedFooter', '1');
	$__finalCompiled .= '
';
	$__templater->setPageParam('uix_hideBreadcrumb', '1');
	$__finalCompiled .= '
' . '

';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Вход');
	$__finalCompiled .= '

';
	$__templater->setPageParam('head.' . 'robots', $__templater->preEscaped('<meta name="robots" content="noindex" />'));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= $__templater->escape($__vars['error']);
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--error blockMessage--iconic">
		' . $__compilerTemp1 . '
	</div>
';
	}
	$__finalCompiled .= '

<div class="blocks">
	';
	$__compilerTemp2 = '';
	if ($__vars['uix_loginPreventAutoFocus']) {
		$__compilerTemp2 .= '
					' . $__templater->formTextBoxRow(array(
			'name' => 'login',
			'value' => $__vars['login'],
			'autocomplete' => 'username',
		), array(
			'label' => 'Имя пользователя или email',
		)) . '
				';
	} else {
		$__compilerTemp2 .= '
					' . $__templater->formTextBoxRow(array(
			'name' => 'login',
			'value' => $__vars['login'],
			'autofocus' => 'autofocus',
			'autocomplete' => 'username',
		), array(
			'label' => 'Имя пользователя или email',
		)) . '
				';
	}
	$__compilerTemp3 = '';
	if ($__vars['captcha']) {
		$__compilerTemp3 .= '
					' . $__templater->formRowIfContent($__templater->func('captcha_options', array(array(
			'label' => 'Проверка',
			'force' => 'true',
			'force-visible' => 'true',
		))), array(
			'label' => 'Проверка',
			'force' => 'true',
			'force-visible' => 'true',
		)) . '
				';
	}
	$__compilerTemp4 = '';
	if ($__vars['xf']['options']['registrationSetup']['enabled']) {
		$__compilerTemp4 .= '
			<div class="block-outer block-outer--after uix_login__registerLink">
				<div class="block-outer-middle">
					' . 'У Вас ещё нет учётной записи?' . ' <a href="' . $__templater->func('link', array('register', ), true) . '">' . 'Зарегистрируйтесь' . '</a>
				</div>
			</div>
		';
	}
	$__finalCompiled .= $__templater->form('
		<div class="block-container">
			<div class="block-body">
				' . $__compilerTemp2 . '

				' . $__templater->formPasswordBoxRow(array(
		'name' => 'password',
		'autocomplete' => 'current-password',
	), array(
		'label' => 'Пароль',
		'html' => '
						<a class="uix_forgotPassWord__link" href="' . $__templater->func('link', array('lost-password', ), true) . '" data-xf-click="overlay">' . 'Забыли свой пароль?' . '</a>
					',
	)) . '

				' . $__compilerTemp3 . '

				' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'remember',
		'selected' => true,
		'label' => 'Запомнить меня',
		'_type' => 'option',
	)), array(
	)) . '

				' . $__templater->formHiddenVal('_xfRedirect', $__vars['redirect'], array(
	)) . '
			</div>
			' . $__templater->formSubmitRow(array(
		'icon' => 'login',
	), array(
	)) . '
		</div>
		' . $__compilerTemp4 . '
	', array(
		'action' => $__templater->func('link', array('login/login', ), false),
		'class' => 'block',
	)) . '

	';
	if (!$__templater->test($__vars['providers'], 'empty', array())) {
		$__finalCompiled .= '
		<div class="blocks-textJoiner"><span></span><em>' . 'или' . ' ' . 'Войдите с помощью' . '</em><span></span></div>

		<div class="block uix_loginProvider__row">
			<div class="block-container">
				<div class="block-body">
					';
		$__compilerTemp5 = '';
		if ($__templater->isTraversable($__vars['providers'])) {
			foreach ($__vars['providers'] AS $__vars['provider']) {
				$__compilerTemp5 .= '
								<li>
									' . $__templater->callMacro('connected_account_macros', 'button', array(
					'provider' => $__vars['provider'],
				), $__vars) . '
								</li>
							';
			}
		}
		$__finalCompiled .= $__templater->formRow('
						<ul class="listHeap">
							' . $__compilerTemp5 . '
						</ul>
					', array(
			'rowtype' => 'button',
		)) . '
				</div>
			</div>
		</div>
	';
	}
	$__finalCompiled .= '
</div>';
	return $__finalCompiled;
}
);