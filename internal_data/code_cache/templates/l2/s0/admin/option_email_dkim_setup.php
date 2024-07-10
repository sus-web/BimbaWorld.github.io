<?php
// FROM HASH: 324d3aad3a434e4d32afc8de0877ab1a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Настройка e-mail-аутентификации по DKIM');
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">

			' . $__templater->formTextBoxRow(array(
		'name' => 'domain',
		'value' => ($__vars['option']['option_value']['domain'] ?: $__vars['domain']),
		'required' => 'required',
	), array(
		'label' => 'Домен',
		'explain' => 'В большинстве случаев это будет URL вашего сайта или корневой домен за вычетом протоколов и путей. URL должен выглядеть примерно так: example.com',
	)) . '

		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Продолжить' . $__vars['xf']['language']['ellipsis'],
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('options/email-dkim-setup', $__vars['option'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);