<?php
// FROM HASH: 298826cc0575e4ba63c7cc6df11fa323
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'В данный момент Ваша учётная запись ожидает одобрения администратором. Когда решение будет принято, Вы получите электронное письмо.' . '
';
	if ($__vars['xf']['session']['hasPreRegActionPending']) {
		$__finalCompiled .= '
	' . 'Как только Ваша регистрация будет завершена, Ваш контент будет опубликован автоматически.' . '
';
	}
	return $__finalCompiled;
}
);