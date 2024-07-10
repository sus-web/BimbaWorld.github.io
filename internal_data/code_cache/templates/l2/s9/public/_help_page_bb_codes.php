<?php
// FROM HASH: a4656c4ba0299202777e77652080023e
return array(
'macros' => array('row_output' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'title' => '!',
		'desc' => '!',
		'example' => '!',
		'anchor' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<li class="bbCodeHelpItem block-row block-row--separated">
		<span class="u-anchorTarget" id="' . $__templater->escape($__vars['anchor']) . '"></span>
		<h3 class="block-textHeader">' . $__templater->escape($__vars['title']) . '</h3>
		<div>' . $__templater->escape($__vars['desc']) . '</div>
		' . $__templater->callMacro(null, 'example_output', array(
		'bbCode' => $__vars['example'],
	), $__vars) . '
	</li>
';
	return $__finalCompiled;
}
),
'example_output' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'bbCode' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="bbCodeDemoBlock">
		<dl class="bbCodeDemoBlock-item">
			<dt>' . 'Пример' . $__vars['xf']['language']['label_separator'] . '</dt>
			<dd>' . $__templater->filter($__vars['bbCode'], array(array('nl2br', array()),), true) . '</dd>
		</dl>
		<dl class="bbCodeDemoBlock-item">
			<dt>' . 'Результат' . $__vars['xf']['language']['label_separator'] . '</dt>
			<dd>' . $__templater->func('bb_code', array($__vars['bbCode'], 'help', null, ), true) . '</dd>
		</dl>
	</div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('help_bb_codes.less');
	$__finalCompiled .= '

<div class="block">
	<div class="block-container">
		<ul class="listPlain block-body">

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[B], [I], [U], [S] - полужирный, курсив, подчёркивание и зачёркивание', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Делает выделенный текст полужирным, наклонным, подчёркнутым или зачёркнутым.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('Это [B]полужирный[/B] текст.
Это [I]курсивный[/I] текст.
Это [U]подчёркнутый[/U] текст.
Это [S]зачёркнутый[/S] текст.', array(array('preEscaped', array()),), false),
		'anchor' => 'basic',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[COLOR=<span class="block-textHeader-highlight">цвет</span>], [FONT=<span class="block-textHeader-highlight">название</span>], [SIZE=<span class="block-textHeader-highlight">размер</span>] - цвет текста, шрифт и размер', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Изменяет цвет, шрифт или размер выделенного текста.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('Это [COLOR=red]красный[/COLOR] и [COLOR=#0000cc]голубой[/COLOR] текст.
Это шрифт [FONT=Courier New]Courier New[/FONT].
Это [SIZE=1]маленький[/SIZE] и [SIZE=7]большой[/SIZE] текст.', array(array('preEscaped', array()),), false),
		'anchor' => 'style',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[URL], [EMAIL] - ссылки', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Создаёт ссылку из выделенного текста.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('[URL]https://www.example.com[/URL]
[EMAIL]example@example.com[/EMAIL]', array(array('preEscaped', array()),), false),
		'anchor' => 'email-url',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[URL=<span class="block-textHeader-highlight">ссылка</span>], [EMAIL=<span class="block-textHeader-highlight">адрес</span>] - ссылки (дополнительно)', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Делает выделенный текст ссылкой на интернет-страницу или на адрес электронной почты.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('[URL=https://www.example.com]Перейти на example.com[/URL]
[EMAIL=example@example.com]Моя электронная почта[/EMAIL]', array(array('preEscaped', array()),), false),
		'anchor' => 'email-url-advanced',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[USER=<span class="block-textHeader-highlight">ID</span>] - ссылка на профиль', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Ссылка на профиль пользователя. Как правило добавляется автоматически при упоминании пользователя.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('[USER=' . ($__vars['xf']['visitor']['user_id'] ? $__templater->escape($__vars['xf']['visitor']['user_id']) : '1') . ']' . 'Имя пользователя' . '[/USER]', array(array('preEscaped', array()),), false),
		'anchor' => 'user-mention',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[IMG] - изображение', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Показывает изображение, используя выделенный текст как URL-адрес.', array(array('preEscaped', array()),), false),
		'example' => '[IMG]' . $__templater->func('base_url', array(($__templater->func('property', array('publicMetadataLogoUrl', ), false) ?: $__templater->func('property', array('publicLogoUrl', ), false)), true, ), false) . '[/IMG]',
		'anchor' => 'image',
	), $__vars) . '

			<li class="bbCodeHelpItem block-row block-row--separated">
				<span class="u-anchorTarget" id="media"></span>
				<h3 class="block-textHeader">' . '[MEDIA=<span class="block-textHeader-highlight">сайт</span>] - вставка медиа' . '</h3>
				<div>
					' . 'Вставляет в сообщение медиа с разрешенных сайтов. Рекомендуется использовать кнопку добавления медиа в панели инструментов редактора.' . '<br />
					' . 'Поддерживаемые сайты' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->func('media_sites', array(), true) . '
				</div>
				<div class="bbCodeDemoBlock">
					<dl class="bbCodeDemoBlock-item">
						<dt>' . 'Пример' . $__vars['xf']['language']['label_separator'] . '</dt>
						<dd>[MEDIA=youtube]kQ0Eo1UccEE[/MEDIA]</dd>
					</dl>
					<dl class="bbCodeDemoBlock-item">
						<dt>' . 'Результат' . $__vars['xf']['language']['label_separator'] . '</dt>
						<dd><i>' . 'Встроенный YouTube плеер появится здесь.' . '</i></dd>
					</dl>
				</div>
			</li>

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[LIST] - списки', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Отображает нумерованный или маркированный список.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('[LIST]
[*]Маркер 1
[*]Маркер 2
[/LIST]
[LIST=1]
[*]Запись 1
[*]Запись 2
[/LIST]', array(array('preEscaped', array()),), false),
		'anchor' => 'list',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[LEFT], [CENTER], [RIGHT] - выравнивание текста', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Изменяет выравнивание выделенного текста.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('[LEFT]Выравнивание по левому краю[/LEFT]
[CENTER]Выравнивание по центру[/CENTER]
[RIGHT]Выравнивание по правому краю[/RIGHT]', array(array('preEscaped', array()),), false),
		'anchor' => 'align',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[QUOTE] - цитата текста', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Отображает текст, как процитированный из другого источника. Можно также указать имя этого источника.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('[QUOTE]Цитируемый текст[/QUOTE]
[QUOTE=Пользователь]Пользователь что-то сказал[/QUOTE]', array(array('preEscaped', array()),), false),
		'anchor' => 'quote',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[SPOILER] - текст, содержащий спойлеры', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Скрывает текст, который может содержать спойлеры (преждевременно раскрытая важная сюжетная информация). Чтобы увидеть текст, нужно нажать кнопку спойлера.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('[SPOILER]Обычный спойлер[/SPOILER]
[SPOILER=Заголовок спойлера]Спойлер с заголовком[/SPOILER]', array(array('preEscaped', array()),), false),
		'anchor' => 'spoiler',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[ISPOILER] - однострочный текст, содержащий спойлеры', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Однострочный текст внутри обычного содержимого, который является скрытым и может содержать спойлеры. Для его просмотра - необходимо выполнить нажатие на данный текст.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('Вам необходимо выполнить нажатие на данное [ISPOILER]слово[/ISPOILER], чтобы увидеть содержимое.', array(array('preEscaped', array()),), false),
		'anchor' => 'ispoiler',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[CODE] - вставка программного кода', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Отображает текст на одном из языков программирования, выделяя синтаксис где это возможно.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('Основной код:
[CODE]Основной код[/CODE]

Код с поддержкой форматирования:
[CODE=rich]Код с поддержкой [COLOR=red]форматирования[/COLOR][/CODE]

PHP-код:
[CODE=php]echo $hello . \' world\';[/CODE]

JS-код:
[CODE=javascript]var hello = \'world\';[/CODE]', array(array('preEscaped', array()),), false),
		'anchor' => 'code',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[ICODE] - отображение однострочного программного кода', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Позволяет отображать однострочный код внутри обычного содержимого сообщения. Синтаксис не будет подсвечен.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('Блоки однострочного кода - [ICODE]это лучший способ[/ICODE] отображения кода одной строкой.
[ICODE=rich][COLOR=red]Также[/COLOR] [U]поддерживается[/U][/ICODE] расширенное форматирование в разделах однострочного кода.', array(array('preEscaped', array()),), false),
		'anchor' => 'icode',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[INDENT] - отступ текста', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Увеличивает отступ выделенного текста. Можно использовать несколько раз для создания больших отступов.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('Обычный текст
[INDENT]Небольшой отступ[/INDENT]
[INDENT=2]Значительный отступ[/INDENT]', array(array('preEscaped', array()),), false),
		'anchor' => 'indent',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[TABLE] - таблицы', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Специальная разметка для отображения таблиц в Вашем контенте.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('[TABLE]
[TR]
[TH]Заголовок 1[/TH]
[TH]Заголовок 2[/TH]
[/TR]
[TR]
[TD]Содержимое 1[/TD]
[TD]Содержимое 2[/TD]
[/TR]
[/TABLE]', array(array('preEscaped', array()),), false),
		'anchor' => 'table',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[HEADING=<span class="block-textHeader-highlight">уровень</span>] - заголовки с первого по третий уровень', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Помечает текст как структурированный заголовок для облегчения машинного чтения.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('[HEADING=1]Основной заголовок[/HEADING]
Этот текст подпадает под основной заголовок, используемый для разделения основных разделов статьи. 

[HEADING=2]Второстепенный заголовок[/HEADING]
Если вам нужно разделить основные разделы статьи, используйте второстепенный заголовок второго уровня.

[HEADING=3]Подзаголовок[/HEADING]
Если вам требуется дополнительное разделение, то Вы можете воспользоваться подзаголовком.', array(array('preEscaped', array()),), false),
		'anchor' => 'heading',
	), $__vars) . '

			' . $__templater->callMacro(null, 'row_output', array(
		'title' => $__templater->filter('[PLAIN] - обычный текст', array(array('preEscaped', array()),), false),
		'desc' => $__templater->filter('Отключает обработку BB-кодов внутри выделенного текста.', array(array('preEscaped', array()),), false),
		'example' => $__templater->filter('[PLAIN]Это не [B]полужирный[/B] текст.[/PLAIN]', array(array('preEscaped', array()),), false),
		'anchor' => 'plain',
	), $__vars) . '

			<li class="bbCodeHelpItem block-row block-row--separated">
				<span class="u-anchorTarget" id="attach"></span>
				<h3 class="block-textHeader">' . '[ATTACH] - вставка вложений' . '</h3>
				<div>' . 'Вставляет вложение в указанной точке. Если вложение является изображением, будет вставлена его уменьшенная версия или всё оно целиком. Для этого нужно нажать на соответствующую кнопку.' . '</div>
				<div class="bbCodeDemoBlock">
					<dl class="bbCodeDemoBlock-item">
						<dt>' . 'Пример' . $__vars['xf']['language']['label_separator'] . '</dt>
						<dd>
							' . 'Миниатюра' . $__vars['xf']['language']['label_separator'] . ' [ATTACH]123[/ATTACH]<br />
							' . 'Полный размер' . $__vars['xf']['language']['label_separator'] . ' [ATTACH=full]123[/ATTACH]
						</dd>
					</dl>
					<dl class="bbCodeDemoBlock-item">
						<dt>' . 'Результат' . $__vars['xf']['language']['label_separator'] . '</dt>
						<dd><i>' . 'Содержимое вложений появится здесь.' . '</i></dd>
					</dl>
				</div>
			</li>

			';
	if ($__templater->isTraversable($__vars['bbCodes'])) {
		foreach ($__vars['bbCodes'] AS $__vars['bbCode']) {
			if (!$__templater->test($__vars['bbCode']['example'], 'empty', array())) {
				$__finalCompiled .= '
				<li class="bbCodeHelpItem block-row block-row--separated">
					<span class="u-anchorTarget" id="' . $__templater->escape($__vars['bbCode']['bb_code_id']) . '"></span>
					<h3 class="block-textHeader">
						';
				if (($__vars['bbCode']['has_option'] == 'no') OR ($__vars['bbCode']['has_option'] == 'optional')) {
					$__finalCompiled .= '[' . $__templater->filter($__vars['bbCode']['bb_code_id'], array(array('to_upper', array()),), true) . ']';
				}
				$__finalCompiled .= '
						';
				if ($__vars['bbCode']['has_option'] == 'optional') {
					$__finalCompiled .= '<span role="presentation" aria-hidden="true">&middot;</span>';
				}
				$__finalCompiled .= '
						';
				if (($__vars['bbCode']['has_option'] == 'yes') OR ($__vars['bbCode']['has_option'] == 'optional')) {
					$__finalCompiled .= '[' . $__templater->filter($__vars['bbCode']['bb_code_id'], array(array('to_upper', array()),), true) . '=<span class="block-textHeader-highlight">option</span>]';
				}
				$__finalCompiled .= '
						- ' . $__templater->escape($__vars['bbCode']['title']) . '
					</h3>
					';
				$__compilerTemp1 = '';
				$__compilerTemp1 .= $__templater->escape($__vars['bbCode']['description']);
				if (strlen(trim($__compilerTemp1)) > 0) {
					$__finalCompiled .= '
						<div>' . $__compilerTemp1 . '</div>
					';
				}
				$__finalCompiled .= '
					<div class="bbCodeDemoBlock">
						<dl class="bbCodeDemoBlock-item">
							<dt>' . 'Пример' . $__vars['xf']['language']['label_separator'] . '</dt>
							<dd>' . $__templater->filter($__vars['bbCode']['example'], array(array('nl2br', array()),), true) . '</dd>
						</dl>
						<dl class="bbCodeDemoBlock-item">
							<dt>' . 'Результат' . $__vars['xf']['language']['label_separator'] . '</dt>
							<dd>' . (!$__templater->test($__vars['bbCode']['output'], 'empty', array()) ? $__templater->escape($__vars['bbCode']['output']) : $__templater->func('bb_code', array($__vars['bbCode']['example'], 'help', null, ), true)) . '</dd>
						</dl>
					</div>
				</li>
			';
			}
		}
	}
	$__finalCompiled .= '

		</ul>
	</div>
</div>

' . '

';
	return $__finalCompiled;
}
);