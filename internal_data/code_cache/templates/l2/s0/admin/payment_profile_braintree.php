<?php
// FROM HASH: 973030a140575c5977128d1469754b1b
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formTextBoxRow(array(
		'name' => 'options[merchant_id]',
		'value' => $__vars['profile']['options']['merchant_id'],
	), array(
		'label' => 'Merchant ID',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[public_key]',
		'value' => $__vars['profile']['options']['public_key'],
	), array(
		'label' => 'Public key',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[private_key]',
		'value' => $__vars['profile']['options']['private_key'],
	), array(
		'label' => 'Private key',
		'explain' => 'Пожалуйста, укажите свои API keys и Merchant ID, которые можно получить на сайте <a href="https://www.braintreegateway.com/" target="_blank">Braintree</a>, перейдя по пути: Account > My User > API Keys, Tokenization Keys, Encryption Keys > View Authorizations.<br />
<br />
Если Вы хотите активировать поддержку PayPal, пожалуйста, следуйте <a href="https://developer.paypal.com/braintree/articles/guides/payment-methods/paypal/setup-guide" target="_blank">этой инструкции</a>.',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[merchant_account]',
		'value' => $__vars['profile']['options']['merchant_account'],
	), array(
		'label' => 'Merchant account ID',
		'explain' => 'Merchant ID указан на странице Settings > Processing.<br />
<br />
<b>Примечание:</b> по умолчанию Braintree не поддерживает несколько валют. Валютное значение, которое Вы можете выбрать для своих товаров <b><i>будет проигнорировано</i></b>.<br />
<br />
Для поддержки нескольких валют, Вам необходимо <a href="mailto:support@braintreepayments.com">связаться с Braintree</a> и попросить их создать multiple Merchant Account. Merchant Account определяет, какие валютные транзакции будут обработаны. Вам необходимо указать ID того Merchant Account, который будет здесь использоваться.',
	)) . '

' . $__templater->formCheckBoxRow(array(
	), array(array(
		'checked' => $__vars['profile']['options']['plan_id'],
		'label' => 'Поддержка повторного выставления счетов с помощью следующего идентификатора плана' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formTextBox(array(
		'name' => 'options[plan_id]',
		'value' => $__vars['profile']['options']['plan_id'],
	))),
		'_type' => 'option',
	)), array(
		'explain' => 'Если Вы хотите включить поддержку повторного выставления счетов для приобретаемого товара, то активируйте данную опцию, и укажите идентификатор плана, который хотите использовать для любых покупок, сделанных с этим профилем, в своей учётной записи <a href="https://www.braintreegateway.com/" target="_blank">Braintree</a>.<br />
<br />
Для поддержки повторного выставления счетов и автоматической отмены покупки при открытии спора о платеже, убедитесь, что Вы включили Webhooks со следующим URL-адресом, иначе Вам придётся контролировать и управлять этим процессом вручную:<br />
<br />
' . $__templater->escape($__vars['xf']['options']['boardUrl']) . '/payment_callback.php?_xfProvider=braintree',
	)) . '

<hr class="formRowSep" />

' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'options[apple_pay_enable]',
		'selected' => $__vars['profile']['options']['apple_pay_enable'],
		'label' => '
		' . 'Включить поддержку Apple Pay' . '
	',
		'_type' => 'option',
	)), array(
		'explain' => 'Требуется проверка домена на странице: "Настройки" в Вашей панели управления Braintree.',
	)) . '

' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'options[paypal_enable]',
		'selected' => $__vars['profile']['options']['paypal_enable'],
		'label' => '
		' . 'Включить поддержку PayPal' . '
	',
		'_type' => 'option',
	)), array(
		'explain' => 'Требуется бизнес-аккаунт в PayPal и дополнительные настройки в личном кабинете Braintree.',
	));
	return $__finalCompiled;
}
);