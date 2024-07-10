<?php
// FROM HASH: 964be987b86fb7e0386dc22e1fca63c1
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div>
	' . $__templater->button('
		' . 'Отмена' . '
	', array(
		'href' => $__vars['endpoint'] . 'myaccount/autopay/',
		'target' => '_blank',
	), '', array(
	)) . '

	<div class="formRow-explain">
		' . 'Примечание: подписки PayPal можно отменить только со своего счёта PayPal. Если у Вас нет учётной записи PayPal, то свяжитесь с нами или свяжитесь напрямую с PayPal.' . '
	</div>
</div>';
	return $__finalCompiled;
}
);