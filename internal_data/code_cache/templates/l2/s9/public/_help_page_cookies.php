<?php
// FROM HASH: 1b0c6a744d19eb4af8c1e8d58f844637
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<p>На этой странице объясняется, как файлы cookie используются на данном сайте. Если Вы продолжаете использовать этот сайт, Вы соглашаетесь на использование нами Ваших файлов cookie.</p>

<h3 class="textHeading">Что такое файлы cookie?</h3>
<p>Файлы cookie представляют собой небольшие файлы, сохраняемые на Вашем компьютере веб-браузером (например, Internet Explorer, FireFox, Chrome или Opera) по требованию сайта, который Вы просматриваете. Это позволяет просматриваемому сайту запоминать о Вас некоторые вещи. Например, Ваши настройки и историю, или же держать Вас в авторизованном состоянии, когда при посещении сайта в следующий раз уже не нужно вводить логин и пароль.</p>

<p>Файлы cookie могут быть сохранены на Вашем компьютере в течение короткого промежутка времени (например, пока открыт Ваш браузер) или же в течение длительного периода времени, даже на годы. Файлы cookie, установленные другими сайтами, не будут доступны для нас.</p>

<h3 class="textHeading">Использование нами файлов cookie</h3>
<p>Этот сайт использует файлы cookie для многих вещей, в том числе:</p>
<ul>
<li>Регистрация и сохранение Ваших предпочтений. Это включает в себя возможность оставаться авторизованным на данном сайте при повторных посещениях, а также отображение сайта на выбранном Вами языке и стиле.</li>
<li>Анализ данных. Позволяет нам определять, как люди используют сайт, и по возможности улучшить его.</li>
<li>Файлы cookie рекламы (возможно, третьей стороны). Если данный сайт отображает рекламу, то файлы cookie могут быть установлены рекламодателями, чтобы определить, кто и когда просматривал рекламу или другие подобные вещи. Эти файлы могут быть установлены третьими лицами, и в этом случае данный сайт не имеет возможности ни читать, ни записывать эти файлы cookie.</li>
<li>Другие сторонние файлы cookie для таких вещей, как обмен содержимым с Facebook или Twitter. Эти файлы обычно устанавливаются третьей стороной самостоятельно, так что данный сайт не будет иметь к ним доступа.</li>
</ul>

<h3 class="textHeading">Дополнительные файлы cookie и те, которые устанавливаются третьими лицами</h3>
<p>
Дополнительные cookie могут быть установлены во время использования сайта для запоминания информации при выполнении определённых действий или при сохранении определённых настроек.
</p>
<p>
Другие файлы cookie могут устанавливаться сторонними поставщиками услуг, которые могут предоставлять информацию, такую как анонимное отслеживание, или могут быть установлены с помощью содержимого, встроенного в некоторые страницы, например YouTube или других поставщиков медиа-услуг.
</p>

<h3 class="textHeading">Удаление/отключение файлов cookie</h3>
<p>Управление файлами cookie и их настройками должно выполняться в рамках настроек Вашего браузера. Вот ссылки на руководства, как сделать это в популярных браузерах:</p>
<ul>
<li><a href="https://support.microsoft.com/ru-ru/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank">Microsoft Internet Explorer</a></li>
<li><a href="https://privacy.microsoft.com/ru-ru/windows-10-microsoft-edge-and-privacy" target="_blank">Microsoft Edge</a></li>
<li><a href="https://support.mozilla.org/ru/kb/kuki-informaciya-kotoruyu-veb-sajty-hranyat-na-vas" target="_blank">Mozilla Firefox</a></li>
<li><a href="https://support.google.com/chrome/answer/95647?hl=ru" target="_blank">Google Chrome</a></li>
<li><a href="https://support.apple.com/ru-ru/guide/safari/sfri11471/mac" target="_blank">Safari для macOS</a></li>
<li><a href="https://support.apple.com/ru-ru/HT201265" target="_blank">Safari для iOS</a></li>
</ul>

<h3 class="textHeading">Более подробная информация о cookie</h3>
<p>
Чтобы узнать больше о файлах cookie и найти другую дополнительную информацию о них, пожалуйста, посетите страницу сайта <a href="https://ru.wikipedia.org/wiki/Cookie" target="_blank">Википедия</a>.
</p>' . '

<h3 class="textHeading">' . 'Стандартные файлы cookie, которые мы устанавливаем' . '</h3>

';
	$__compilerTemp1 = '';
	$__compilerTemp2 = $__templater->func('array_keys', array($__templater->method($__vars['xf']['cookieConsent'], 'getCookiesInGroup', array('_required', )), ), false);
	if ($__templater->isTraversable($__compilerTemp2)) {
		foreach ($__compilerTemp2 AS $__vars['name']) {
			$__compilerTemp1 .= '
		' . $__templater->dataRow(array(
				'rowclass' => 'dataList-row--noHover',
			), array(array(
				'class' => 'dataList-cell--min dataList-cell--alt',
				'_type' => 'cell',
				'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getCookieLabel', array($__vars['name'], ))),
			),
			array(
				'_type' => 'cell',
				'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getCookieDescription', array($__vars['name'], ))),
			))) . '
	';
		}
	}
	$__compilerTemp3 = '';
	$__compilerTemp4 = $__templater->method($__vars['xf']['cookieConsent'], 'getGroups', array(false, false, ));
	if ($__templater->isTraversable($__compilerTemp4)) {
		foreach ($__compilerTemp4 AS $__vars['group']) {
			$__compilerTemp3 .= '
		' . $__templater->dataRow(array(
				'rowclass' => 'dataList-row--subSection dataList-row--noHover',
			), array(array(
				'colspan' => '2',
				'_type' => 'cell',
				'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getGroupLabel', array($__vars['group'], ))),
			))) . '

		' . $__templater->dataRow(array(
				'rowclass' => 'dataList-row--noHover',
			), array(array(
				'colspan' => '2',
				'_type' => 'cell',
				'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getGroupDescription', array($__vars['group'], ))),
			))) . '

		';
			$__compilerTemp5 = $__templater->func('array_keys', array($__templater->method($__vars['xf']['cookieConsent'], 'getCookiesInGroup', array($__vars['group'], )), ), false);
			if ($__templater->isTraversable($__compilerTemp5)) {
				foreach ($__compilerTemp5 AS $__vars['name']) {
					$__compilerTemp3 .= '
				' . $__templater->dataRow(array(
						'rowclass' => 'dataList-row--noHover',
					), array(array(
						'class' => 'dataList-cell--min dataList-cell--alt',
						'_type' => 'cell',
						'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getCookieLabel', array($__vars['name'], ))),
					),
					array(
						'_type' => 'cell',
						'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getCookieDescription', array($__vars['name'], ))),
					))) . '
		';
				}
			}
			$__compilerTemp3 .= '
	';
		}
	}
	$__compilerTemp6 = '';
	$__compilerTemp7 = $__templater->method($__vars['xf']['cookieConsent'], 'getThirdParties', array());
	if ($__templater->isTraversable($__compilerTemp7)) {
		foreach ($__compilerTemp7 AS $__vars['name']) {
			$__compilerTemp6 .= '
		' . $__templater->dataRow(array(
				'rowclass' => 'dataList-row--noHover',
			), array(array(
				'class' => 'dataList-cell--min dataList-cell--alt',
				'_type' => 'cell',
				'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getThirdPartyLabel', array($__vars['name'], ))),
			),
			array(
				'_type' => 'cell',
				'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getThirdPartyDescription', array($__vars['name'], ))),
			))) . '
	';
		}
	}
	$__finalCompiled .= $__templater->dataList('
	' . $__templater->dataRow(array(
		'rowtype' => 'header',
	), array(array(
		'class' => 'dataList-cell--min',
		'_type' => 'cell',
		'html' => 'Имя',
	),
	array(
		'_type' => 'cell',
		'html' => 'Предназначение',
	))) . '

	' . $__templater->dataRow(array(
		'rowclass' => 'dataList-row--subSection dataList-row--noHover',
	), array(array(
		'colspan' => '2',
		'_type' => 'cell',
		'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getGroupLabel', array('_required', ))),
	))) . '

	' . $__templater->dataRow(array(
		'rowclass' => 'dataList-row--noHover',
	), array(array(
		'colspan' => '2',
		'_type' => 'cell',
		'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getGroupDescription', array('_required', ))),
	))) . '

	' . $__compilerTemp1 . '

	' . $__compilerTemp3 . '

	' . $__templater->dataRow(array(
		'rowclass' => 'dataList-row--subSection dataList-row--noHover',
	), array(array(
		'colspan' => '2',
		'_type' => 'cell',
		'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getGroupLabel', array('_third_party', ))),
	))) . '

	' . $__templater->dataRow(array(
		'rowclass' => 'dataList-row--noHover',
	), array(array(
		'colspan' => '2',
		'_type' => 'cell',
		'html' => $__templater->escape($__templater->method($__vars['xf']['cookieConsent'], 'getGroupDescription', array('_third_party', ))),
	))) . '

	' . $__compilerTemp6 . '
', array(
		'data-xf-init' => 'responsive-data-list',
	));
	return $__finalCompiled;
}
);