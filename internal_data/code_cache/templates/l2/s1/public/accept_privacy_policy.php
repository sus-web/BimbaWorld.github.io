<?php
// FROM HASH: 97c045460e3d2c8bfe9b078c972ab449
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Политика конфиденциальности');
	$__finalCompiled .= '

<div class="blockMessage blockMessage--iconic blockMessage--important">
	' . 'Пожалуйста, прочитайте и примите условия нашей политики конфиденциальности перед тем, как продолжить.' . ' ' . 'Последнее обновление' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->func('date_dynamic', array($__vars['xf']['options']['privacyPolicyLastUpdate'], array(
	))) . '.
</div>

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'accept',
		'required' => 'required',
		'label' => 'Я прочитал(а) и согласен(на) с Вашей <a href="' . $__templater->escape($__vars['xf']['privacyPolicyUrl']) . '" target="_blank">политикой конфиденциальности</a>.',
		'_type' => 'option',
	)), array(
		'label' => '',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'confirm',
		'submit' => 'Принять',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('misc/accept-privacy-policy', ), false),
		'ajax' => 'true',
		'class' => 'block',
		'data-force-flash-message' => 'on',
	)) . '

';
	if ($__vars['privacyPolicyOption']['type'] == 'default') {
		$__finalCompiled .= '
	';
		if ($__vars['page']['advanced_mode']) {
			$__finalCompiled .= '
		' . $__templater->filter($__vars['templateHtml'], array(array('raw', array()),), true) . '
	';
		} else {
			$__finalCompiled .= '
		<div class="block">
			<div class="block-container">
				<div class="block-body block-row">
					' . $__templater->filter($__vars['templateHtml'], array(array('raw', array()),), true) . '
				</div>
			</div>
		</div>
	';
		}
		$__finalCompiled .= '
';
	}
	return $__finalCompiled;
}
);