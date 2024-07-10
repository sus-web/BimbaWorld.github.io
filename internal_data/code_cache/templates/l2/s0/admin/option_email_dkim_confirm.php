<?php
// FROM HASH: 630b614bd58464792b6b6e7c2ee97250
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Завершение настройки e-mail-аутентификации по DKIM');
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('Чтобы завершить настройку e-mail-аутентификации по DKIM, вам нужно добавить новую TXT запись для вашего домена. Если вы не знаете, как это сделать, обратитесь к вашему хостеру или регистратору домена. Исходящие сообщения электронной почты не будут подписываться DKIM, пока не будет проверено наличие DNS записи.', array(
	)) . '

			' . $__templater->formRow('TXT', array(
		'label' => 'Тип',
	)) . '

			' . $__templater->formRow('
				<div class="inputGroup">
					' . $__templater->formTextBox(array(
		'value' => $__vars['dnsKey'],
		'disabled' => 'disabled',
		'class' => 'js-copyDnsKeyTarget',
	)) . '
					<span class="inputGroup-splitter"></span>
					' . $__templater->button('', array(
		'icon' => 'copy',
		'data-xf-init' => 'copy-to-clipboard',
		'data-copy-target' => '.js-copyDnsKeyTarget',
		'class' => 'button--link is-hidden',
	), '', array(
	)) . '
				</div>
			', array(
		'label' => 'Имя',
		'rowtype' => 'button',
	)) . '

			' . $__templater->formRow('
				<div class="inputGroup">
					' . $__templater->formTextBox(array(
		'value' => $__vars['dnsValue'],
		'disabled' => 'disabled',
		'class' => 'js-copyDnsValueTarget',
	)) . '
					<span class="inputGroup-splitter"></span>
					' . $__templater->button('', array(
		'icon' => 'copy',
		'data-xf-init' => 'copy-to-clipboard',
		'data-copy-target' => '.js-copyDnsValueTarget',
		'class' => 'button--link is-hidden',
	), '', array(
	)) . '
				</div>
			', array(
		'label' => 'Значение',
		'rowtype' => 'button',
	)) . '
		</div>
		
		' . $__templater->formSubmitRow(array(
		'submit' => 'Подтвердить',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('options/email-dkim-verify', $__vars['option'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);