<?php
// FROM HASH: 80205a50dec1a0ed4e011788e99726d6
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formTextBoxRow(array(
		'name' => 'options[primary_account]',
		'value' => $__vars['profile']['options']['primary_account'],
		'type' => 'email',
	), array(
		'label' => 'Основной адрес для PayPal',
		'hint' => 'Обязательно',
		'explain' => '
		' . 'Это основной адрес электронной почты для Вашего PayPal. Если он некорректен, то гарантировать удачный процесс оплаты невозможно. Имейте также ввиду, что учётная запись PayPal должна иметь статус Premier или Business, а опция IPN (Instant Payment Notifications) должна быть включена.' . '
	',
	)) . '

' . $__templater->formTextAreaRow(array(
		'name' => 'options[alternate_accounts]',
		'value' => $__vars['profile']['options']['alternate_accounts'],
		'autosize' => 'true',
	), array(
		'label' => 'Альтернативные адреса для PayPal',
		'explain' => 'Альтернативные адреса электронной почты для PayPal, на которые могут приходить платежи от пользователей за повышения прав. Например, это может быть полезно, если основная учётная запись PayPal поменялась, а периодические платежи продолжают поступать на старый адрес электронной почты PayPal. Если старый адрес не будет указан здесь в качестве альтернативы, то такие платежи не будут приняты. Вводите по одному адресу в каждой строке.',
	)) . '

' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'options[require_address]',
		'selected' => $__vars['profile']['options']['require_address'],
		'label' => 'Требовать адрес',
		'hint' => 'Если включено, то платёжный шлюз будет требовать указания адреса получателя при оплате.',
		'_type' => 'option',
	)), array(
	)) . '

' . $__templater->formHiddenVal('options[legacy]', ($__vars['profile']['options']['legacy'] ? 1 : 0), array(
	));
	return $__finalCompiled;
}
);