<?php
// FROM HASH: 4497dac29608d70c55bfdf50f08d8913
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Требуется двухфакторная аутентификация');
	$__finalCompiled .= '

';
	$__templater->setPageParam('loginWide', true);
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__templater->isTraversable($__vars['providers'])) {
		foreach ($__vars['providers'] AS $__vars['tabProvider']) {
			$__compilerTemp1 .= '
				<a href="' . $__templater->func('link', array('login/two-step', null, array('provider' => $__vars['tabProvider']['provider_id'], 'remember' => ($__vars['remember'] ? 1 : null), '_xfRedirect' => $__vars['redirect'], ), ), true) . '"
					class="tabs-tab ' . (($__vars['tabProvider']['provider_id'] == $__vars['providerId']) ? 'is-active' : '') . '">' . $__templater->escape($__vars['tabProvider']['title']) . '</a>
			';
		}
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<h2 class="block-tabHeader tabs hScroller" data-xf-init="h-scroller">
			<span class="hScroller-scroll">
			' . $__compilerTemp1 . '
			</span>
		</h2>

		<div class="block-body">
			' . $__templater->formRow($__templater->escape($__vars['user']['username']), array(
		'label' => 'Вход от имени',
	)) . '

			' . $__templater->filter($__templater->method($__vars['provider'], 'render', array('login', $__vars['user'], $__vars['providerData'], $__vars['triggerData'], )), array(array('raw', array()),), true) . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'trust',
		'value' => '1',
		'hint' => 'Если включить, то Вам не придётся больше выполнять с этого устройства двухфакторную аутентификацию в течение следующих 30 дней.',
		'checked' => $__vars['trustChecked'],
		'label' => '
					' . 'Добавить это устройство к доверенным на 30 дней' . '
				',
		'_type' => 'option',
	)), array(
	)) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'submit' => 'Подтвердить',
	), array(
	)) . '
	</div>

	' . $__templater->formHiddenVal('confirm', '1', array(
	)) . '
	' . $__templater->formHiddenVal('provider', $__vars['providerId'], array(
	)) . '
	' . $__templater->formHiddenVal('_xfRedirect', $__vars['redirect'], array(
	)) . '

', array(
		'action' => $__templater->func('link', array('login/two-step', ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);