<?php
// FROM HASH: 909a8e133f259c1418bfb896e46cab04
return array(
'macros' => array('head' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'app' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__vars['cssUrls'] = array('public:normalize.css', 'public:fa.css', 'public:core.less', $__vars['app'] . ':app.less', );
	$__finalCompiled .= '

	';
	if ($__templater->func('property', array('uix_iconFontFamily', ), false) == 'fontawesome') {
		$__finalCompiled .= '
		' . $__templater->includeTemplate('font_awesome_setup', $__vars) . '
	';
	}
	$__finalCompiled .= '

	';
	if ($__templater->func('is_addon_active', array('ThemeHouse/UIX', ), false) AND ($__templater->func('is_addon_active', array('ThemeHouse/UIX', ), false) >= 2000490)) {
		$__finalCompiled .= '
		';
		$__vars['cssUrls'] = $__templater->func('uix_extra_css_urls', array($__vars['cssUrls'], ), false);
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '

	<link rel="stylesheet" href="' . $__templater->func('css_url', array($__vars['cssUrls'], ), true) . '" />

	';
	if ($__templater->func('property', array('uix_iconFontFamily', ), false) != 'fontawesome') {
		$__finalCompiled .= '
		<link rel="preload" href="' . $__templater->func('base_url', array($__templater->func('property', array('uix_imagePath', ), false), ), true) . '/fonts/icons/material-icons/fonts/materialdesignicons-webfont.woff2?v=5.8.55" as="font" type="font/woff2" crossorigin="anonymous" />
		<link rel="stylesheet" href="' . $__templater->func('base_url', array($__templater->func('property', array('uix_imagePath', ), false), ), true) . '/fonts/icons/material-icons/css/materialdesignicons.min.css?d=' . $__templater->escape($__vars['xf']['options']['jsLastUpdate']) . '" />	
	';
	}
	$__finalCompiled .= '

	';
	$__templater->includeCss('uix.less');
	$__finalCompiled .= '
	';
	$__vars['additionalCSS'] = $__templater->filter($__templater->func('property', array('uix_additionalCss', ), false), array(array('split', array(',', )),), false);
	$__finalCompiled .= '
	';
	if ($__templater->isTraversable($__vars['additionalCSS'])) {
		foreach ($__vars['additionalCSS'] AS $__vars['stylesheet']) {
			$__finalCompiled .= '
		';
			$__templater->includeCss($__vars['stylesheet']);
			$__finalCompiled .= '
	';
		}
	}
	$__finalCompiled .= '

	<!--XF:CSS-->
	';
	if ($__templater->func('property', array('uix_googleFonts', ), false)) {
		$__finalCompiled .= '
		<link href=\'//fonts.googleapis.com/css?family=' . $__templater->func('property', array('uix_googleFonts', ), true) . '\' rel=\'stylesheet\' type=\'text/css\'>
	';
	}
	$__finalCompiled .= '
	';
	if ($__vars['xf']['fullJs']) {
		$__finalCompiled .= '
		<script src="' . $__templater->func('js_url', array('xf/preamble.js', ), true) . '"></script>
	';
	} else {
		$__finalCompiled .= '
		<script src="' . $__templater->func('js_url', array('xf/preamble.min.js', ), true) . '"></script>
	';
	}
	$__finalCompiled .= '
	
	<meta name="apple-mobile-web-app-capable" content="yes">
';
	return $__finalCompiled;
}
),
'body' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'app' => '!',
		'jsState' => null,
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	' . $__templater->func('core_js') . '
	<!--XF:JS-->
	';
	if ($__templater->func('property', array('uix_buttonRipple', ), false)) {
		$__templater->includeJs(array(
			'src' => 'themehouse/' . $__templater->func('property', array('uix_jsPath', ), false) . '/ripple.js',
			'min' => 'themehouse/' . $__templater->func('property', array('uix_jsPath', ), false) . '/ripple.min.js',
		));
	}
	$__finalCompiled .= '
	' . $__templater->includeTemplate('uix_js', $__vars) . '
	';
	if ($__templater->func('property', array('uix_parallax', ), false)) {
		$__finalCompiled .= '
		';
		$__templater->includeJs(array(
			'src' => 'themehouse/' . $__templater->func('property', array('uix_jsPath', ), false) . '/vendor/parallax/parallax.js',
			'min' => 'themehouse/uix/vendor/parallax/parallax.min.js',
		));
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
	';
	$__templater->includeJs(array(
		'src' => 'themehouse/' . $__templater->func('property', array('uix_jsPath', ), false) . '/vendor/hover-intent/jquery.hoverIntent.js',
		'min' => 'themehouse/uix/vendor/hover-intent/jquery.hoverIntent.min.js',
	));
	$__finalCompiled .= '
	';
	if ($__templater->func('property', array('uix_backstretch', ), false)) {
		$__finalCompiled .= '
		';
		$__templater->includeJs(array(
			'src' => 'themehouse/' . $__templater->func('property', array('uix_jsPath', ), false) . '/vendor/backstretch/jquery.backstretch.js',
			'min' => 'themehouse/uix/vendor/backstretch/jquery.backstretch.min.js',
		));
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
	<script>
		jQuery.extend(true, XF.config, {
			// ' . '
			userId: ' . $__templater->escape($__vars['xf']['visitor']['user_id']) . ',
			enablePush: ' . ($__vars['xf']['options']['enablePush'] ? 'true' : 'false') . ',
			pushAppServerKey: \'' . $__templater->escape($__vars['xf']['options']['pushKeysVAPID']['publicKey']) . '\',
			url: {
				fullBase: \'' . $__templater->filter($__templater->func('base_url', array(null, true, ), false), array(array('escape', array('js', )),), true) . '\',
				basePath: \'' . $__templater->filter($__templater->func('base_url', array(null, false, ), false), array(array('escape', array('js', )),), true) . '\',
				css: \'' . $__templater->filter($__templater->func('css_url', array(array('__SENTINEL__', ), false, ), false), array(array('escape', array('js', )),), true) . '\',
				keepAlive: \'' . $__templater->filter($__templater->func('link_type', array($__vars['app'], 'login/keep-alive', ), false), array(array('escape', array('js', )),), true) . '\'
			},
			cookie: {
				path: \'' . $__templater->filter($__vars['xf']['cookie']['path'], array(array('escape', array('js', )),), true) . '\',
				domain: \'' . $__templater->filter($__vars['xf']['cookie']['domain'], array(array('escape', array('js', )),), true) . '\',
				prefix: \'' . $__templater->filter($__vars['xf']['cookie']['prefix'], array(array('escape', array('js', )),), true) . '\',
				secure: ' . ($__vars['xf']['cookie']['secure'] ? 'true' : 'false') . '
			},
			cacheKey: \'' . $__templater->filter($__templater->func('cache_key', array(), false), array(array('escape', array('js', )),), true) . '\',
			csrf: \'' . $__templater->filter($__templater->func('csrf_token', array(), false), array(array('escape', array('js', )),), true) . '\',
			js: {\'<!--XF:JS:JSON-->\'},
			css: {\'<!--XF:CSS:JSON-->\'},
			time: {
				now: ' . $__templater->escape($__vars['xf']['time']) . ',
				today: ' . $__templater->escape($__vars['xf']['timeDetails']['today']) . ',
				todayDow: ' . $__templater->escape($__vars['xf']['timeDetails']['todayDow']) . ',
				tomorrow: ' . $__templater->escape($__vars['xf']['timeDetails']['tomorrow']) . ',
				yesterday: ' . $__templater->escape($__vars['xf']['timeDetails']['yesterday']) . ',
				week: ' . $__templater->escape($__vars['xf']['timeDetails']['week']) . '
			},
			borderSizeFeature: \'' . $__templater->func('property', array('borderSizeFeature', ), true) . '\',
			fontAwesomeWeight: \'' . $__templater->func('fa_weight', array(), true) . '\',
			enableRtnProtect: ' . ($__vars['xf']['enableRtnProtect'] ? 'true' : 'false') . ',
			enableFormSubmitSticky: ' . ($__templater->func('property', array('formSubmitSticky', ), false) ? 'true' : 'false') . ',
			uploadMaxFilesize: ' . $__templater->escape($__vars['xf']['uploadMaxFilesize']) . ',
			allowedVideoExtensions: ' . $__templater->filter($__vars['xf']['allowedVideoExtensions'], array(array('json', array()),array('raw', array()),), true) . ',
			allowedAudioExtensions: ' . $__templater->filter($__vars['xf']['allowedAudioExtensions'], array(array('json', array()),array('raw', array()),), true) . ',
			shortcodeToEmoji: ' . ($__vars['xf']['options']['shortcodeToEmoji'] ? 'true' : 'false') . ',
			visitorCounts: {
				conversations_unread: \'' . $__templater->filter($__vars['xf']['visitor']['conversations_unread'], array(array('number', array()),), true) . '\',
				alerts_unviewed: \'' . $__templater->filter($__vars['xf']['visitor']['alerts_unviewed'], array(array('number', array()),), true) . '\',
				total_unread: \'' . $__templater->filter(($__vars['xf']['visitor']['conversations_unread'] + $__vars['xf']['visitor']['alerts_unviewed']), array(array('number', array()),), true) . '\',
				title_count: ' . ($__templater->func('in_array', array($__vars['xf']['options']['displayVisitorCount'], array('title_count', 'title_and_icon', ), ), false) ? 'true' : 'false') . ',
				icon_indicator: ' . ($__templater->func('in_array', array($__vars['xf']['options']['displayVisitorCount'], array('icon_indicator', 'title_and_icon', ), ), false) ? 'true' : 'false') . '
			},
			jsState: ' . ($__vars['jsState'] ? $__templater->filter($__vars['jsState'], array(array('json', array()),array('raw', array()),), true) : '{}') . ',
			publicMetadataLogoUrl: \'' . ($__templater->func('property', array('publicMetadataLogoUrl', ), false) ? $__templater->func('base_url', array($__templater->func('property', array('publicMetadataLogoUrl', ), false), true, ), true) : '') . '\',
			publicPushBadgeUrl: \'' . ($__templater->func('property', array('publicPushBadgeUrl', ), false) ? $__templater->func('base_url', array($__templater->func('property', array('publicPushBadgeUrl', ), false), true, ), true) : '') . '\'
		});

		jQuery.extend(XF.phrases, {
			// ' . '
			date_x_at_time_y: "' . $__templater->filter('{date} в {time}', array(array('escape', array('js', )),), true) . '",
			day_x_at_time_y:  "' . $__templater->filter('{day} в {time}', array(array('escape', array('js', )),), true) . '",
			yesterday_at_x:   "' . $__templater->filter('Вчера в {time}', array(array('escape', array('js', )),), true) . '",
			x_minutes_ago:    "' . $__templater->filter('{minutes} мин. назад', array(array('escape', array('js', )),), true) . '",
			one_minute_ago:   "' . $__templater->filter('1 минуту назад', array(array('escape', array('js', )),), true) . '",
			a_moment_ago:     "' . $__templater->filter('Только что', array(array('escape', array('js', )),), true) . '",
			today_at_x:       "' . $__templater->filter('Сегодня в {time}', array(array('escape', array('js', )),), true) . '",
			in_a_moment:      "' . $__templater->filter('В настоящее время', array(array('escape', array('js', )),), true) . '",
			in_a_minute:      "' . $__templater->filter('Менее минуты назад', array(array('escape', array('js', )),), true) . '",
			in_x_minutes:     "' . $__templater->filter('Через {minutes} мин.', array(array('escape', array('js', )),), true) . '",
			later_today_at_x: "' . $__templater->filter('Сегодня в {time}', array(array('escape', array('js', )),), true) . '",
			tomorrow_at_x:    "' . $__templater->filter('Завтра в {time}', array(array('escape', array('js', )),), true) . '",

			day0: "' . $__templater->filter('Воскресенье', array(array('escape', array('js', )),), true) . '",
			day1: "' . $__templater->filter('Понедельник', array(array('escape', array('js', )),), true) . '",
			day2: "' . $__templater->filter('Вторник', array(array('escape', array('js', )),), true) . '",
			day3: "' . $__templater->filter('Среда', array(array('escape', array('js', )),), true) . '",
			day4: "' . $__templater->filter('Четверг', array(array('escape', array('js', )),), true) . '",
			day5: "' . $__templater->filter('Пятница', array(array('escape', array('js', )),), true) . '",
			day6: "' . $__templater->filter('Суббота', array(array('escape', array('js', )),), true) . '",

			dayShort0: "' . $__templater->filter('Вос', array(array('escape', array('js', )),), true) . '",
			dayShort1: "' . $__templater->filter('Пон', array(array('escape', array('js', )),), true) . '",
			dayShort2: "' . $__templater->filter('Вто', array(array('escape', array('js', )),), true) . '",
			dayShort3: "' . $__templater->filter('Сре', array(array('escape', array('js', )),), true) . '",
			dayShort4: "' . $__templater->filter('Чет', array(array('escape', array('js', )),), true) . '",
			dayShort5: "' . $__templater->filter('Пят', array(array('escape', array('js', )),), true) . '",
			dayShort6: "' . $__templater->filter('Суб', array(array('escape', array('js', )),), true) . '",

			month0: "' . $__templater->filter('Январь', array(array('escape', array('js', )),), true) . '",
			month1: "' . $__templater->filter('Февраль', array(array('escape', array('js', )),), true) . '",
			month2: "' . $__templater->filter('Март', array(array('escape', array('js', )),), true) . '",
			month3: "' . $__templater->filter('Апрель', array(array('escape', array('js', )),), true) . '",
			month4: "' . $__templater->filter('Май', array(array('escape', array('js', )),), true) . '",
			month5: "' . $__templater->filter('Июнь', array(array('escape', array('js', )),), true) . '",
			month6: "' . $__templater->filter('Июль', array(array('escape', array('js', )),), true) . '",
			month7: "' . $__templater->filter('Август', array(array('escape', array('js', )),), true) . '",
			month8: "' . $__templater->filter('Сентябрь', array(array('escape', array('js', )),), true) . '",
			month9: "' . $__templater->filter('Октябрь', array(array('escape', array('js', )),), true) . '",
			month10: "' . $__templater->filter('Ноябрь', array(array('escape', array('js', )),), true) . '",
			month11: "' . $__templater->filter('Декабрь', array(array('escape', array('js', )),), true) . '",

			active_user_changed_reload_page: "' . $__templater->filter('Ваша сессия истекла. Перезагрузите страницу.', array(array('escape', array('js', )),), true) . '",
			server_did_not_respond_in_time_try_again: "' . $__templater->filter('Сервер не ответил вовремя. Пожалуйста, попробуйте снова.', array(array('escape', array('js', )),), true) . '",
			oops_we_ran_into_some_problems: "' . $__templater->filter('Упс! Мы столкнулись с некоторыми проблемами.', array(array('escape', array('js', )),), true) . '",
			oops_we_ran_into_some_problems_more_details_console: "' . $__templater->filter('Упс! Мы столкнулись с некоторыми проблемами. Пожалуйста, попробуйте позже. Более детальную информацию об ошибке Вы можете посмотреть в консоли браузера.', array(array('escape', array('js', )),), true) . '",
			file_too_large_to_upload: "' . $__templater->filter('Файл слишком большой для загрузки.', array(array('escape', array('js', )),), true) . '",
			uploaded_file_is_too_large_for_server_to_process: "' . $__templater->filter('Загруженный файл слишком большой для обработки сервером.', array(array('escape', array('js', )),), true) . '",
			files_being_uploaded_are_you_sure: "' . $__templater->filter('Файлы все ещё загружаются. Вы действительно хотите отправить эту форму?', array(array('escape', array('js', )),), true) . '",
			attach: "' . $__templater->filter('Прикрепить файлы', array(array('escape', array('js', )),), true) . '",
			rich_text_box: "' . $__templater->filter('Текстовое поле с поддержкой форматирования', array(array('escape', array('js', )),), true) . '",
			close: "' . $__templater->filter('Закрыть', array(array('escape', array('js', )),), true) . '",
			link_copied_to_clipboard: "' . $__templater->filter('Ссылка скопирована в буфер обмена.', array(array('escape', array('js', )),), true) . '",
			text_copied_to_clipboard: "' . $__templater->filter('Скопировано', array(array('escape', array('js', )),), true) . '",
			loading: "' . $__templater->filter('Загрузка' . $__vars['xf']['language']['ellipsis'], array(array('escape', array('js', )),), true) . '",

			processing: "' . $__templater->filter('Обработка', array(array('escape', array('js', )),), true) . '",
			\'processing...\': "' . $__templater->filter('Обработка' . $__vars['xf']['language']['ellipsis'], array(array('escape', array('js', )),), true) . '",

			showing_x_of_y_items: "' . $__templater->filter('Показано {count} из {total} элементов', array(array('escape', array('js', )),), true) . '",
			showing_all_items: "' . $__templater->filter('Показаны все элементы', array(array('escape', array('js', )),), true) . '",
			no_items_to_display: "' . $__templater->filter('Нет элементов для отображения', array(array('escape', array('js', )),), true) . '",

			number_button_up: "' . $__templater->filter('Увеличить', array(array('escape', array('js', )),), true) . '",
			number_button_down: "' . $__templater->filter('Уменьшить', array(array('escape', array('js', )),), true) . '",

			push_enable_notification_title: "' . $__templater->filter('Push-уведомления для сайта ' . $__vars['xf']['options']['boardTitle'] . ' успешно активированы', array(array('escape', array('js', )),), true) . '",
			push_enable_notification_body: "' . $__templater->filter('Спасибо за активацию push-уведомлений!', array(array('escape', array('js', )),), true) . '"
		});
	</script>

	<form style="display:none" hidden="hidden">
		<input type="text" name="_xfClientLoadTime" value="" id="_xfClientLoadTime" title="_xfClientLoadTime" tabindex="-1" />
	</form>

	';
	if ($__templater->method($__vars['xf']['visitor'], 'canSearch', array()) AND ($__templater->method($__vars['xf']['request'], 'getFullRequestUri', array()) === $__templater->func('link', array('full:index', ), false))) {
		$__finalCompiled .= '
		<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebSite",
			"url": "' . $__templater->filter($__templater->func('link', array('canonical:index', ), false), array(array('escape', array('js', )),), true) . '",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "' . (($__templater->filter($__templater->func('link', array('canonical:search/search', ), false), array(array('escape', array('js', )),), true) . ($__vars['xf']['options']['useFriendlyUrls'] ? '?' : '&')) . 'keywords={search_keywords}') . '",
				"query-input": "required name=search_keywords"
			}
		}
		</script>
	';
	}
	$__finalCompiled .= '
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