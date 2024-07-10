<?php
// FROM HASH: 2e1e76668536c7cbc9bd1e6a1348edd0
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['context'] == 'setup') {
		$__finalCompiled .= '
	' . $__templater->formInfoRow('
		' . 'Если Вы раньше не использовали Authy, то Вам сначала нужно <a href="https://www.authy.com/install" target="_blank">установить его</a>. Вы получите SMS-сообщение с дальнейшими инструкциями.<br />
<br />
Затем для Вас приложением Authy будет создан код, который нужно будет ввести ниже, чтобы подтвердить свою учётную запись.' . '
	', array(
		)) . '

	' . $__templater->formTextBoxRow(array(
			'name' => 'code',
			'type' => 'number',
			'autofocus' => 'autofocus',
		), array(
			'label' => 'Код подтверждения',
		)) . '
';
	} else {
		$__finalCompiled .= '
	' . $__templater->formInfoRow('
		' . 'Мы отправили push-уведомление в Ваше приложение Authy. После того, как Вы его одобрите, Вы автоматически войдёте в систему.<br />
<br />Если Вы не получили или не можете получить уведомление, то можете <a href="' . $__templater->func('link', array('logout', null, array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '">выйти</a> или попробовать другой метод.' . '

		' . $__templater->formHiddenVal('uuid', $__vars['uuid'], array(
		)) . '
	', array(
			'rowclass' => 'js-authyLoginApprovalRow',
		)) . '

	';
		$__templater->inlineJs('
		jQuery.extend(XF.phrases, {
			authy_no_uuid: "' . $__templater->filter('No approval request UUID. Please try again later.', array(array('escape', array('js', )),), false) . '",
			authy_no_approval_request: "' . $__templater->filter('No approval request found with that UUID. Please try again later.', array(array('escape', array('js', )),), false) . '",
			authy_denied: "' . $__templater->filter('The approval request was denied so we cannot log you in at this time.', array(array('escape', array('js', )),), false) . '",
			authy_success: "' . $__templater->filter('The approval request was successful and you have logged in successfully.', array(array('escape', array('js', )),), false) . '"
		});
	');
		$__finalCompiled .= '

	';
		$__templater->inlineJs('
			$(function()
			{
				var $form = $(\'.js-authyLoginApprovalRow\').closest(\'form\'),
					formData = XF.getDefaultFormData($form);

				$form.find(\'.formSubmitRow\').hide();

				var interval = setInterval(function()
				{
					XF.ajax(\'post\', $form.attr(\'action\'), formData, function(data)
					{
						if (data.errors)
						{
							var error = data.errors[0];

							switch (error)
							{
								case \'authy_no_uuid\':
								case \'authy_no_approval_request\':
								{
									clearInterval(interval);

									// these are fatal errors
									XF.alert(XF.phrase(error, null, \'An unexpected error occurred.\'));
									break;
								}
								case \'authy_denied\':
								{
									clearInterval(interval);

									// quite an explicit user choice so display message and redirect to index
									XF.flashMessage(XF.phrase(error), 3000, function()
									{
										XF.redirect(XF.canonicalizeUrl(\'\'));
									});
								}
							}
						}
						else if (data.redirect)
						{
							clearInterval(interval);

							XF.flashMessage(XF.phrase(\'authy_success\'), 3000, function()
							{
								XF.redirect(data.redirect);
							});
						}
					}, { skipDefault: true });
				}, 1000);
			});
	');
		$__finalCompiled .= '
';
	}
	return $__finalCompiled;
}
);