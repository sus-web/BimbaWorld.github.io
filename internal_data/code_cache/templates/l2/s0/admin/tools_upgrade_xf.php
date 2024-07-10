<?php
// FROM HASH: fad07db146b9c036c91977ed71afa15c
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Обновить XenForo' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['availableUpdate']['version_string']));
	$__finalCompiled .= '

<div class="blocks">

<div class="blockMessage blockMessage--important">
	<b>' . 'Примечание' . $__vars['xf']['language']['label_separator'] . '</b>
	' . 'Настоятельно рекомендуется создать резервную копию базы данных и файлов перед продолжением. Это не делается автоматически.' . '
</div>

';
	$__compilerTemp1 = '';
	if ($__vars['availableUpdate']['significant_upgrade']) {
		$__compilerTemp1 .= '
					<br />
					<br />
					' . 'Это глобальное обновление, добавляющее новые функции и содержащее множество изменений. После завершения обновления может потребоваться установка новых версий стилей и плагинов. <br />
<br />
Дополнительные сведения можно посмотреть в наших <a href="https://xenforo.com/community/forums/announcements/" target="_blank">объявлениях о новых выпусках</a>.' . '
				';
	}
	$__compilerTemp2 = '';
	if ($__vars['upgradeCheck']['license_agreement_required']) {
		$__compilerTemp2 .= '
				' . $__templater->formCheckBoxRow(array(
			'standalone' => 'true',
		), array(array(
			'name' => 'agree',
			'required' => 'required',
			'label' => 'I agree to and accept the terms of the <a href="https://xenforo.com/license-agreement/" target="_blank">XenForo license agreement</a>.',
			'_type' => 'option',
		)), array(
			'rowtype' => 'fullWidth noLabel',
			'explain' => 'License agreement last updated: ' . $__templater->func('date_dynamic', array($__vars['upgradeCheck']['last_agreement_update'], array(
		))),
		)) . '
			';
	}
	$__compilerTemp3 = '';
	if ($__vars['useLatest']) {
		$__compilerTemp3 .= '
		' . $__templater->formHiddenVal('latest', '1', array(
		)) . '
	';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			<div class="block-row">
				' . 'XenForo ' . $__templater->escape($__vars['availableUpdate']['version_string']) . ' доступен для установки.' . '
				' . $__compilerTemp1 . '

				<br />
				<br />
				' . 'Вы можете выполнить обновление до этой версии из панели управления. Если Вы продолжите, то будет скачана новая версия, файлы будут скопированы, и будет выполнено обновление. <br />
<br />
Если рекомендуется CLI-обновление, то Вам будет предоставлена возможность использовать его вместо веб-обновления.' . '
			</div>

			' . $__compilerTemp2 . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'download',
		'submit' => 'Скачать и обновить' . $__vars['xf']['language']['ellipsis'],
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
	' . $__templater->formHiddenVal('confirm_version_id', $__vars['availableUpdate']['version_id'], array(
	)) . '
	' . $__compilerTemp3 . '
', array(
		'action' => $__templater->func('link', array('tools/upgrade-xf', ), false),
		'class' => 'block',
	)) . '

';
	if ($__vars['alternativeVersion']) {
		$__finalCompiled .= '
	<div class="blocks-textJoiner"><span></span><em>' . 'или' . '</em><span></span></div>

	<div class="block">
		<div class="block-container">
			<h2 class="block-minorHeader">' . 'Альтернативное обновление: XenForo ' . $__templater->escape($__vars['alternativeVersion']['version_string']) . '' . '</h2>
			<div class="block-body block-row">
				' . 'XenForo ' . $__templater->escape($__vars['alternativeVersion']['version_string']) . ' доступен для установки.' . '
				<br />
				<br />
				' . 'Это глобальное обновление, добавляющее новые функции и содержащее множество изменений. После завершения обновления может потребоваться установка новых версий стилей и плагинов. <br />
<br />
Дополнительные сведения можно посмотреть в наших <a href="https://xenforo.com/community/forums/announcements/" target="_blank">объявлениях о новых выпусках</a>.' . '
			</div>
			' . $__templater->formSubmitRow(array(
		), array(
			'rowtype' => 'simple',
			'html' => '
				' . $__templater->button('Обновить до ' . $__templater->escape($__vars['alternativeVersion']['version_string']) . '' . $__vars['xf']['language']['ellipsis'], array(
			'href' => $__templater->func('link', array('tools/upgrade-xf', null, array('latest' => 1, ), ), false),
			'class' => 'button--primary',
		), '', array(
		)) . '
			',
		)) . '
		</div>
	</div>
';
	}
	$__finalCompiled .= '

</div>';
	return $__finalCompiled;
}
);