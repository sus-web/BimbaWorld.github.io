<?php
// FROM HASH: fdd61de73981c6c9d6ceed96a9ffe556
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<mail:subject>' . 'Квитанция о платном повышении Ваших прав на сайте ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '' . '</mail:subject>

<p>' . 'Спасибо за покупку платного повышения на форуме <a href="' . $__templater->func('link', array('canonical:index', ), true) . '">' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '</a>.' . '</p>

<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td><b>' . 'Купленный товар' . '</b></td>
	<td align="right"><b>' . 'Цена' . '</b></td>
</tr>
<tr>
	<td><a href="' . $__templater->func('link', array('canonical:account/upgrades', ), true) . '">' . $__templater->escape($__vars['purchasable']['title']) . '</a></td>
	<td align="right">' . $__templater->escape($__templater->method($__vars['purchasable']['purchasable'], 'getCostPhraseForPurchaseRequest', array($__vars['purchaseRequest'], ))) . '</td>
</tr>
</table>

<p><a href="' . $__templater->func('link', array('canonical:account/upgrades', ), true) . '" class="button">' . 'Управление Вашими платными повышениями' . '</a></p>

';
	if ($__templater->method($__vars['xf']['toUser'], 'canUseContactForm', array())) {
		$__finalCompiled .= '
	<p>' . 'Спасибо за покупку! Если у Вас есть какие-то вопросы, то, пожалуйста, <a href="' . $__templater->func('link', array('canonical:misc/contact', ), true) . '">свяжитесь с нами</a>.' . '</p>
';
	} else {
		$__finalCompiled .= '
	<p>' . 'Благодарим Вас за покупку!' . '</p>
';
	}
	return $__finalCompiled;
}
);