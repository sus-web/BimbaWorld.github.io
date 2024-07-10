<?php
// FROM HASH: 6e18b5e9b5148f526ded234b6101c86f
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('select2.less');
	$__finalCompiled .= '

';
	$__templater->includeJs(array(
		'prod' => 'xf/token_input-compiled.js',
		'dev' => 'vendor/select2/select2.full.js, xf/token_input.js',
	));
	$__finalCompiled .= '

<input type="text" name="' . $__templater->escape($__vars['name']) . '" value="' . $__templater->escape($__vars['value']) . '" class="input ' . $__templater->escape($__vars['inputClass']) . '"
	data-xf-init="token-input"
	data-ac-url="' . $__templater->escape($__vars['hrefAttr']) . '"
	data-min-length="' . $__templater->escape($__vars['minLength']) . '"
	' . ($__vars['maxLength'] ? (('data-max-length="' . $__templater->escape($__vars['maxLength'])) . '"') : '') . '
	' . ($__vars['maxTokens'] ? (('data-max-tokens="' . $__templater->escape($__vars['maxTokens'])) . '"') : '') . '
	' . ($__vars['listData'] ? (('data-list-data="' . $__templater->escape($__vars['listData'])) . '"') : '') . '
	' . $__templater->filter($__vars['attrsHtml'], array(array('raw', array()),), true) . ' />

';
	$__templater->inlineJs('
jQuery.extend(XF.phrases, {
	s2_error_loading: "' . $__templater->filter('Результаты не могут быть загружены.', array(array('escape', array('js', )),), false) . '",
	s2_input_too_long: "' . $__templater->filter('Пожалуйста, удалите {count} символов.', array(array('escape', array('js', )),), false) . '",
	s2_input_too_short: "' . $__templater->filter('Пожалуйста, введите {count} или более символов.', array(array('escape', array('js', )),), false) . '",
	s2_loading_more: "' . $__templater->filter('Загрузка дополнительных результатов...', array(array('escape', array('js', )),), false) . '",
	s2_maximum_selected: "' . $__templater->filter('Вы можете выбрать не более {count} элементов.', array(array('escape', array('js', )),), false) . '",
	s2_no_results: "' . $__templater->filter('Результаты не найдены.', array(array('escape', array('js', )),), false) . '",
	s2_searching: "' . $__templater->filter('Поиск...', array(array('escape', array('js', )),), false) . '"
});
');
	return $__finalCompiled;
}
);