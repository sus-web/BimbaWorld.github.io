<?php
// FROM HASH: 36816a75d4266bc772fd499a2903c933
return array(
'macros' => array('setup' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'canViewAttachments' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	if ($__vars['canViewAttachments']) {
		$__finalCompiled .= '
		';
		$__templater->includeCss('lightbox.less');
		$__finalCompiled .= '
		';
		$__templater->includeJs(array(
			'prod' => 'xf/lightbox-compiled.js',
			'dev' => 'vendor/fancybox/jquery.fancybox.js, xf/lightbox.js',
		));
		$__finalCompiled .= '

		';
		if (!$__templater->func('page_param', array('hasLb', ), false)) {
			$__finalCompiled .= '
			<script class="js-extraPhrases" type="application/json">
			{
				"lightbox_close": "' . $__templater->filter('Закрыть', array(array('escape', array('js', )),), true) . '",
				"lightbox_next": "' . $__templater->filter('Следующее', array(array('escape', array('js', )),), true) . '",
				"lightbox_previous": "' . $__templater->filter('Предыдущее', array(array('escape', array('js', )),), true) . '",
				"lightbox_error": "' . $__templater->filter('Запрашиваемое содержимое не может быть загружено. Пожалуйста, попробуйте позже.', array(array('escape', array('js', )),), true) . '",
				"lightbox_start_slideshow": "' . $__templater->filter('Начать слайд-шоу', array(array('escape', array('js', )),), true) . '",
				"lightbox_stop_slideshow": "' . $__templater->filter('Остановить слайд-шоу', array(array('escape', array('js', )),), true) . '",
				"lightbox_full_screen": "' . $__templater->filter('Полный экран', array(array('escape', array('js', )),), true) . '",
				"lightbox_thumbnails": "' . $__templater->filter('Миниатюры', array(array('escape', array('js', )),), true) . '",
				"lightbox_download": "' . $__templater->filter('Скачать', array(array('escape', array('js', )),), true) . '",
				"lightbox_share": "' . $__templater->filter('Поделиться', array(array('escape', array('js', )),), true) . '",
				"lightbox_zoom": "' . $__templater->filter('Увеличить', array(array('escape', array('js', )),), true) . '",
				"lightbox_new_window": "' . $__templater->filter('Новое окно', array(array('escape', array('js', )),), true) . '",
				"lightbox_toggle_sidebar": "' . $__templater->filter('Скрыть боковую панель', array(array('escape', array('js', )),), true) . '"
			}
			</script>
		';
		}
		$__finalCompiled .= '
		';
		$__templater->setPageParam('hasLb', true);
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'single_image' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'canViewAttachments' => '!',
		'src' => '!',
		'dataUrl' => '',
		'containerZoom' => '1',
		'alt' => '',
		'title' => '',
		'sidebarHref' => '',
		'captionExtraHtml' => '',
		'styleAttr' => '',
		'alignClass' => '',
		'width' => '',
		'height' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

	' . $__templater->callMacro(null, 'setup', array(
		'canViewAttachments' => $__vars['canViewAttachments'],
	), $__vars) . '

	<div class="bbImageWrapper ' . $__templater->escape($__vars['alignClass']) . ' js-lbImage" title="' . $__templater->filter($__vars['alt'], array(array('for_attr', array()),), true) . '"
		data-src="' . $__templater->escape($__vars['src']) . '" data-lb-sidebar-href="' . $__templater->escape($__vars['sidebarHref']) . '" data-lb-caption-extra-html="' . $__templater->filter($__vars['captionExtraHtml'], array(array('for_attr', array()),), true) . '" data-single-image="1">
		<img src="' . $__templater->escape($__vars['src']) . '"
			data-url="' . $__templater->escape($__vars['dataUrl']) . '"
			class="bbImage"
			data-zoom-target="1"
			style="' . $__templater->escape($__vars['styleAttr']) . '"
			alt="' . $__templater->filter($__vars['alt'], array(array('for_attr', array()),), true) . '"
			title="' . $__templater->filter($__vars['title'], array(array('for_attr', array()),), true) . '"
			width="' . $__templater->escape($__vars['width']) . '" height="' . $__templater->escape($__vars['height']) . '" loading="lazy" />
	</div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

';
	return $__finalCompiled;
}
);