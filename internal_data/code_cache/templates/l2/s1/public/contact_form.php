<?php
// FROM HASH: 59fcb58c6f4d1d2981af76f63fea9484
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Обратная связь');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if (!$__vars['xf']['visitor']['user_id']) {
		$__compilerTemp1 .= '
				' . $__templater->formTextBoxRow(array(
			'name' => 'username',
			'autofocus' => 'autofocus',
			'maxlength' => $__templater->func('max_length', array($__vars['xf']['visitor'], 'username', ), false),
			'required' => 'required',
		), array(
			'label' => 'Ваше имя',
			'hint' => 'Обязательно',
		)) . '

				' . $__templater->formTextBoxRow(array(
			'name' => 'email',
			'maxlength' => $__templater->func('max_length', array($__vars['xf']['visitor'], 'email', ), false),
			'type' => 'email',
			'required' => 'required',
		), array(
			'label' => 'Ваш адрес электронной почты',
			'hint' => 'Обязательно',
		)) . '
			';
	} else {
		$__compilerTemp1 .= '
				' . $__templater->formRow($__templater->escape($__vars['xf']['visitor']['username']), array(
			'label' => 'Ваше имя',
		)) . '
				';
		if ($__vars['xf']['visitor']['email']) {
			$__compilerTemp1 .= '

					' . $__templater->formRow($__templater->filter($__vars['xf']['visitor']['email'], array(array('email_display', array()),), true), array(
				'label' => 'Ваш адрес электронной почты',
			)) . '

				';
		} else {
			$__compilerTemp1 .= '

					' . $__templater->formTextBoxRow(array(
				'name' => 'email',
				'type' => 'email',
				'required' => 'required',
			), array(
				'label' => 'Ваш адрес электронной почты',
				'hint' => 'Обязательно',
			)) . '

				';
		}
		$__compilerTemp1 .= '
			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__compilerTemp1 . '

			' . $__templater->formRowIfContent($__templater->func('captcha_options', array(array(
		'label' => 'Проверка',
		'hint' => 'Обязательно',
		'force' => $__vars['forceCaptcha'],
		'context' => 'xf_contact_form',
	))), array(
		'label' => 'Проверка',
		'hint' => 'Обязательно',
		'force' => $__vars['forceCaptcha'],
		'context' => 'xf_contact_form',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'subject',
		'required' => 'required',
	), array(
		'label' => 'Тема',
		'hint' => 'Обязательно',
	)) . '

			' . $__templater->formTextAreaRow(array(
		'name' => 'message',
		'rows' => '5',
		'autosize' => 'true',
		'required' => 'required',
	), array(
		'label' => 'Сообщение',
		'hint' => 'Обязательно',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Отправить',
	), array(
	)) . '
	</div>
	' . $__templater->func('redirect_input', array(null, null, true)) . '
', array(
		'action' => $__templater->func('link', array('misc/contact', ), false),
		'class' => 'block',
		'ajax' => 'true',
		'data-force-flash-message' => 'true',
	));
	return $__finalCompiled;
}
);