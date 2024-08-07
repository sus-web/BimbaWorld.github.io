<?php
// FROM HASH: 37311c6b948a84a5ce4194b29b577b0c
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('payment_initiate.less');
	$__finalCompiled .= '
';
	$__templater->includeJs(array(
		'src' => 'xf/payment.js',
		'min' => '1',
	));
	$__finalCompiled .= '

';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Подтвердите платёжные данные');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['paymentProfile']['options']['payment_request_api_enable']) {
		$__compilerTemp1 .= '
				' . $__templater->formRow('
					<div id="payment-request-button"></div>
					<div class="formRow-explain">' . 'Нажмите кнопку выше, чтобы оплатить быстрее, используя сохранённые платёжные данные.' . ' ' . 'Платежи безопасно обрабатываются сервисом <a href="' . 'https://stripe.com/' . '" target="_blank">' . 'Stripe' . '</a>. Мы не обрабатываем и не храним Ваши платёжные реквизиты.' . '</div>
				', array(
			'label' => 'Оплачивайте быстрее',
			'controlid' => 'payment-request-button',
			'rowtype' => 'input',
			'rowclass' => 'js-pr-remove',
			'style' => 'display: none;',
		)) . '

				<h3 class="block-formSectionHeader js-pr-remove" style="display: none;">' . 'Или укажите платёжные данные вручную' . $__vars['xf']['language']['ellipsis'] . '</h3>
			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				<div class="block-rowMessage block-rowMessage--error block-rowMessage--iconic u-hidden" id="card-errors"></div>
			', array(
		'id' => 'card-errors-container',
		'rowclass' => 'u-hidden',
	)) . '

			' . $__compilerTemp1 . '

			' . $__templater->formRow('
				<div id="card-element" class="input"></div>
				<div class="formRow-explain">' . 'Платежи безопасно обрабатываются сервисом <a href="' . 'https://stripe.com/' . '" target="_blank">' . 'Stripe' . '</a>. Мы не обрабатываем и не храним Ваши платёжные реквизиты.' . '</div>
			', array(
		'controlid' => 'card-element',
		'rowtype' => 'input',
		'label' => 'Оплатить с помощью карты',
	)) . '

			' . '

			' . $__templater->formSubmitRow(array(
		'icon' => 'payment',
		'submit' => 'Оплатить ' . $__templater->filter($__vars['purchase']['cost'], array(array('currency', array($__vars['purchase']['currency'], )),), true) . '',
	), array(
	)) . '

			<script type="application/json" class="js-formStyles">
				{
					"base": {
						"color": "' . $__templater->filter($__templater->func('parse_less_color', array($__templater->func('property', array('textColor', '#141414', ), false), ), false), array(array('escape', array('json', )),), true) . '",
						"fontFamily": "' . $__templater->filter($__templater->func('property', array('fontFamilyUi', ), false), array(array('escape', array('json', )),), true) . '",
						"fontSize": "16px",
						"lineHeight": "' . $__templater->filter($__templater->func('property', array('lineHeightDefault', ), false), array(array('escape', array('json', )),), true) . '",
						"::placeholder": {
							"color": "' . $__templater->filter($__templater->func('parse_less_color', array(('fade(' . $__templater->func('property', array('textColor', '#141414', ), false)) . ', 40%)', ), false), array(array('escape', array('json', )),), true) . '"
						}
					},
					"invalid": {
						"color": "#c84448"
					}
				}
			</script>

			' . $__templater->formHiddenVal('payment_method_id', '', array(
	)) . '
		</div>
	</div>
', array(
		'action' => $__templater->func('link', array('purchase/process', null, array('request_key' => $__vars['purchaseRequest']['request_key'], ), ), false),
		'class' => 'block block--paymentInitiate',
		'data-no-auto-focus' => 'on',
		'data-xf-init' => 'stripe-payment-form',
		'data-publishable-key' => $__vars['publishableKey'],
		'data-recurring' => ($__vars['purchase']['recurring'] ? 'true' : 'false'),
		'data-pi-secret' => $__vars['paymentIntent']['client_secret'],
		'data-pr-enabled' => $__vars['paymentProfile']['options']['payment_request_api_enable'],
		'data-pr-country' => $__vars['paymentProfile']['options']['stripe_country'],
		'data-pr-cost' => $__vars['cost'],
		'data-pr-currency' => $__vars['purchase']['currency'],
		'data-pr-label' => $__vars['purchase']['title'],
	));
	return $__finalCompiled;
}
);