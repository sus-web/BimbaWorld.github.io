<?php
// FROM HASH: 60df65680fb2a62fb96639ce3452d31f
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
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Регистрация');
	$__finalCompiled .= '

';
	$__templater->setPageParam('head.' . 'robots', $__templater->preEscaped('<meta name="robots" content="noindex" />'));
	$__finalCompiled .= '

';
	if ($__vars['xf']['session']['preRegActionKey']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--highlight">
		' . 'Спасибо за Ваш вклад в наше сообщество.
Прежде чем Ваша публикация будет размещена, пожалуйста, уделите совсем немного времени, чтобы зарегистрировать свою бесплатную учётную запись.' . '<br />
		<br />
		' . 'У Вас уже есть учётная запись?' . '
		' . $__templater->button('Войти', array(
			'class' => 'button--link',
			'href' => $__templater->func('link', array('login', null, array('_xfRedirect' => $__vars['redirect'], ), ), false),
			'data-xf-click' => 'overlay',
		), '', array(
		)) . '
	</div>
';
	}
	$__finalCompiled .= '

';
	if (!$__templater->test($__vars['providers'], 'empty', array())) {
		$__finalCompiled .= '
	<div class="block">
		<div class="block-container">
			<div class="block-body">
				';
		$__compilerTemp1 = '';
		if ($__templater->isTraversable($__vars['providers'])) {
			foreach ($__vars['providers'] AS $__vars['provider']) {
				$__compilerTemp1 .= '
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
						' . $__compilerTemp1 . '
					</ul>
				', array(
			'rowtype' => 'button',
			'label' => 'Быстрая регистрация с помощью',
		)) . '
			</div>
		</div>
	</div>
';
	}
	$__finalCompiled .= '

';
	$__compilerTemp2 = '';
	if (($__templater->func('rand', array(0, 2, ), false) == 1)) {
		$__compilerTemp2 .= '
				' . $__templater->formTextBoxRow(array(
			'name' => $__templater->method($__vars['regForm'], 'getFieldName', array('email_hp', )),
			'value' => '',
			'type' => 'email',
			'autocomplete' => 'off',
			'maxlength' => $__templater->func('max_length', array($__vars['xf']['visitor'], 'email', ), false),
		), array(
			'rowclass' => 'formRow--limited',
			'label' => 'Электронная почта',
			'explain' => 'Пожалуйста, оставьте это поле пустым.',
		)) . '
			';
	}
	$__compilerTemp3 = '';
	if (($__templater->func('rand', array(0, 2, ), false) == 1)) {
		$__compilerTemp3 .= '
				' . $__templater->formTextBoxRow(array(
			'name' => 'email',
			'value' => '',
			'type' => 'email',
			'autocomplete' => 'off',
			'maxlength' => $__templater->func('max_length', array($__vars['xf']['visitor'], 'email', ), false),
		), array(
			'rowclass' => 'formRow--limited',
			'label' => 'Электронная почта',
			'explain' => 'Пожалуйста, оставьте это поле пустым.',
		)) . '
			';
	}
	$__compilerTemp4 = '';
	if (($__templater->func('rand', array(0, 2, ), false) == 1)) {
		$__compilerTemp4 .= '
				' . $__templater->formTextBoxRow(array(
			'name' => 'password',
			'type' => 'password',
			'autocomplete' => 'off',
		), array(
			'rowclass' => 'formRow--limited',
			'label' => 'Пароль',
			'explain' => 'Пожалуйста, оставьте это поле пустым.',
		)) . '
			';
	}
	$__finalCompiled .= $__templater->form('

	<div class="block-container">
		<div class="block-body">

			' . '
			' . $__templater->formTextBoxRow(array(
		'name' => 'username',
		'value' => '',
		'autocomplete' => 'off',
		'maxlength' => $__templater->func('max_length', array($__vars['xf']['visitor'], 'username', ), false),
	), array(
		'rowclass' => 'formRow--limited',
		'label' => 'Имя пользователя',
		'explain' => 'Пожалуйста, оставьте это поле пустым.',
	)) . '

			' . $__templater->callMacro('register_macros', 'username_row', array(
		'fieldName' => $__templater->method($__vars['regForm'], 'getFieldName', array('username', )),
		'value' => $__vars['fields']['username'],
	), $__vars) . '

			' . '
			' . $__compilerTemp2 . '

			' . $__templater->callMacro('register_macros', 'email_row', array(
		'fieldName' => $__templater->method($__vars['regForm'], 'getFieldName', array('email', )),
		'value' => $__vars['fields']['email'],
	), $__vars) . '

			' . '
			' . $__compilerTemp3 . '

			' . '
			' . $__compilerTemp4 . '

			' . $__templater->formPasswordBoxRow(array(
		'name' => $__templater->method($__vars['regForm'], 'getFieldName', array('password', )),
		'autocomplete' => 'new-password',
		'required' => 'required',
		'checkstrength' => 'true',
	), array(
		'label' => 'Пароль',
		'hint' => 'Обязательно',
	)) . '

			' . $__templater->callMacro('register_macros', 'dob_row', array(), $__vars) . '

			' . $__templater->callMacro('register_macros', 'location_row', array(
		'value' => $__vars['fields']['location'],
	), $__vars) . '

			' . $__templater->callMacro('register_macros', 'custom_fields', array(), $__vars) . '

			' . $__templater->formRowIfContent($__templater->func('captcha_options', array(array(
		'label' => 'Проверка',
		'hint' => 'Обязательно',
		'context' => 'xf_register',
	))), array(
		'label' => 'Проверка',
		'hint' => 'Обязательно',
		'context' => 'xf_register',
	)) . '

			' . $__templater->callMacro('register_macros', 'email_choice_row', array(), $__vars) . '

			' . $__templater->callMacro('register_macros', 'tos_row', array(), $__vars) . '
		</div>
		' . $__templater->callMacro('register_macros', 'submit_row', array(), $__vars) . '
	</div>

	' . $__templater->formHiddenVal('reg_key', $__templater->method($__vars['regForm'], 'getUniqueKey', array()), array(
	)) . '
	' . $__templater->formHiddenVal($__templater->method($__vars['regForm'], 'getFieldName', array('timezone', )), '', array(
		'data-xf-init' => 'auto-timezone',
	)) . '
', array(
		'action' => $__templater->func('link', array('register/register', ), false),
		'ajax' => 'true',
		'class' => 'block',
		'data-xf-init' => 'reg-form',
		'data-timer' => $__vars['xf']['options']['registrationTimer'],
	));
	return $__finalCompiled;
}
);