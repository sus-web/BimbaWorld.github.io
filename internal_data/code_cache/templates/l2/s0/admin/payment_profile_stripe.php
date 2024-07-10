<?php
// FROM HASH: be705c37a123b3d2bc8ddd6f3ff4b9dc
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formTextBoxRow(array(
		'name' => 'options[live_publishable_key]',
		'value' => $__vars['profile']['options']['live_publishable_key'],
	), array(
		'label' => 'Реальный publishable key',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[live_secret_key]',
		'value' => $__vars['profile']['options']['live_secret_key'],
	), array(
		'label' => 'Реальный secret key',
		'explain' => 'Укажите действующие secret и publishable ключи со страницы <a href="https://dashboard.stripe.com/account/apikeys" target="_blank">Developers > API keys</a>
Вам также необходимо настроить webhook в своей учётной записи Stripe по следующей ссылке: <a href="https://dashboard.stripe.com/account/webhooks">Developers > Webhooks</a>',
	)) . '

<hr class="formRowSep" />

' . $__templater->formTextBoxRow(array(
		'name' => 'options[test_publishable_key]',
		'value' => $__vars['profile']['options']['test_publishable_key'],
	), array(
		'label' => 'Тестовый publishable key',
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'options[test_secret_key]',
		'value' => $__vars['profile']['options']['test_secret_key'],
	), array(
		'label' => 'Тестовый secret key',
		'explain' => 'Тестовые ключи используются только в том случае, если параметр <code>enableLivePayments</code> в файле <code>config.php</code> имеет значение false.<br />
<br /><b>Примечание:</b> перед тем, как начать принимать "реальные" платежи, Вам необходимо активировать свою учётную запись Stripe на одноимённом сайте.',
	)) . '

<hr class="formRowSep" />

' . $__templater->formTextBoxRow(array(
		'name' => 'options[statement_descriptor]',
		'value' => $__vars['profile']['options']['statement_descriptor'],
		'minlength' => '5',
		'maxlength' => '22',
	), array(
		'label' => 'Дескриптор выписки',
		'explain' => 'Дескрипторы выписок поясняют сборы или платежи в банковских выписках. Если оставить это поле пустым, то будет использоваться название форума. Если Вы хотите установить собственный дескриптор, то он должен соответствовать формату, <a href="https://stripe.com/docs/statement-descriptors#requirements" target="_blank">описанному в документации Stripe</a>.',
	)) . '

<hr class="formRowSep" />

';
	$__compilerTemp1 = '';
	if ($__templater->isTraversable($__vars['events'])) {
		foreach ($__vars['events'] AS $__vars['event']) {
			$__compilerTemp1 .= '
				<li><pre>' . $__templater->escape($__vars['event']) . '</pre></li>
			';
		}
	}
	$__finalCompiled .= $__templater->formRow('
	<div class="formRow-explain">
		' . '<strong>Примечание:</strong> Вам необходимо настроить webhook endpoint, чтобы Stripe мог отправлять сообщения для проверки и обработки платежей. Вы можете сделать это, перейдя по пути: <a href="https://dashboard.stripe.com/account/webhooks">Developers > Webhooks</a> в Вашей панели управления по следующему адресу:
<pre><code>' . $__templater->escape($__vars['xf']['options']['boardUrl']) . '/payment_callback.php?_xfProvider=stripe</code></pre>
Вы также должны настроить конечную точку webhook endpoint на прослушивание следующих событий: ' . '

		<ul>
			' . $__compilerTemp1 . '
		</ul>

		' . 'Для дополнительной безопасности рекомендуется также ввести свой "Signing secret" ниже.' . '
	</div>
', array(
		'label' => '',
	)) . '

<hr class="formRowSep" />

' . $__templater->formCheckBoxRow(array(
	), array(array(
		'label' => 'Проверка веб-хука с секретной подписью' . $__vars['xf']['language']['label_separator'],
		'selected' => $__vars['profile']['options']['signing_secret'],
		'_dependent' => array($__templater->formTextBox(array(
		'name' => 'options[signing_secret]',
		'value' => $__vars['profile']['options']['signing_secret'],
	))),
		'_type' => 'option',
	)), array(
		'explain' => 'Чтобы проверить входящие подписки webhook и предотвратить повторные атаки, Вы должны указать &quot;Signing secret&quot; из панели управления Stripe, перейдя по адресу: <a href="https://dashboard.stripe.com/account/webhooks">Developers > Webhooks</a>.',
	)) . '

<hr class="formRowSep" />

' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'options[payment_request_api_enable]',
		'selected' => $__vars['profile']['options']['payment_request_api_enable'],
		'label' => '
		' . 'Включить поддержку API при запросе платежа' . '
	',
		'_type' => 'option',
	)), array(
		'explain' => '<a href="https://w3c.github.io/payment-request/" target="_blank">API для запроса платежа</a> - это стандарт браузера, который позволяет клиентам с совместимым браузером оплачивать товары и услуги без необходимости повторно вводить свои платёжные данные.<br />
<br />
Если включено, то пользователи смогут оплачивать свои покупки с помощью Apple Pay, Android Pay, Google Pay и Microsoft Pay в дополнение к своей действующей кредитной/дебетовой карте. <a href="https://dashboard.stripe.com/account/apple_pay" target="_blank">Apple Pay требует дополнительных настроек в Вашей панели управления Stripe</a>.',
	)) . '

' . $__templater->formHiddenVal('options[stripe_country]', $__vars['profile']['options']['stripe_country'], array(
	));
	return $__finalCompiled;
}
);