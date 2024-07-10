<?php
// FROM HASH: 166da0dfb158e24c40fc362de850dc11
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->func('property', array('xtr_prefix_filter', ), false)) {
		$__finalCompiled .= '
    ';
		if ($__vars['forum']['prefix_cache']) {
			$__finalCompiled .= '
	<div class="prefix-block-container">
        <div class="block-row block-row--minor">
            <span class="">' . 'Доступные префиксы' . ':</span>
            <a href="' . $__templater->func('link', array('forums', $__vars['forum'], array('page' => $__vars['page'], ), ), true) . '" class="labelLink">
                <span class="label label--primary">' . 'Показать все' . '</span>
            </a>
            ';
			if ($__templater->isTraversable($__vars['forum']['prefix_cache'])) {
				foreach ($__vars['forum']['prefix_cache'] AS $__vars['PrefixId']) {
					$__finalCompiled .= '
                <a class="labelLink" href="?prefix_id=' . $__templater->escape($__vars['PrefixId']) . '">
                    ' . $__templater->func('prefix', array('thread', $__vars['PrefixId'], 'html', '', ), true) . '
                </a>
            ';
				}
			}
			$__finalCompiled .= '
        </div>
	</div>	
    ';
		}
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped($__templater->escape($__vars['forum']['Node']['title']));
	$__templater->pageParams['pageNumber'] = $__vars['page'];
	$__finalCompiled .= '
';
	$__templater->pageParams['pageDescription'] = $__templater->preEscaped($__templater->filter($__vars['forum']['Node']['description'], array(array('raw', array()),), true));
	$__templater->pageParams['pageDescriptionMeta'] = true;
	$__finalCompiled .= '

';
	$__templater->includeCss('structured_list.less');
	$__finalCompiled .= '

' . $__templater->callMacro('metadata_macros', 'canonical_url', array(
		'canonicalUrl' => $__templater->func('link', array('canonical:forums', $__vars['forum'], $__vars['canonicalFilters'] + array('page' => $__vars['page'], ), ), false),
	), $__vars) . '

';
	$__templater->setPageParam('head.' . 'rss_forum', $__templater->preEscaped('<link rel="alternate" type="application/rss+xml" title="' . $__templater->filter('RSS лента для ' . $__vars['forum']['title'] . '', array(array('for_attr', array()),), true) . '" href="' . $__templater->func('link', array('forums/index.rss', $__vars['forum'], ), true) . '" />'));
	$__finalCompiled .= '

' . $__templater->callMacro('forum_macros', 'forum_page_options', array(
		'forum' => $__vars['forum'],
	), $__vars) . '
';
	$__templater->breadcrumbs($__templater->method($__vars['forum'], 'getBreadcrumbs', array(false, )));
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['forum'], 'canCreateThread', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('
		' . 'Создать тему' . '
	', array(
			'href' => $__templater->func('link', array('forums/post-thread', $__vars['forum'], ), false),
			'class' => 'button--cta',
			'icon' => 'write',
		), '', array(
		)) . '
');
	}
	$__finalCompiled .= '

';
	if ($__vars['pendingApproval']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--important">' . 'Ваша публикация отправлена на модерацию и будет отображена после её одобрения.' . '</div>
';
	}
	$__finalCompiled .= '

';
	if ($__vars['nodeTree']) {
		$__finalCompiled .= '
	' . $__templater->callAdsMacro('forum_view_above_node_list', array(
			'forum' => $__vars['forum'],
		), $__vars) . '
	<div class="block ';
		if (($__templater->func('property', array('xmNodeLayout', ), false) == 'classic')) {
			$__finalCompiled .= 'block--category';
		}
		$__finalCompiled .= '">
		<div class="block-container">
			<div class="block-body">
				' . $__templater->callMacro('forum_list', 'node_list', array(
			'children' => $__vars['nodeTree'],
			'extras' => $__vars['nodeExtras'],
			'depth' => '2',
		), $__vars) . '
			</div>
		</div>
	</div>
	' . $__templater->callAdsMacro('forum_view_below_node_list', array(
			'forum' => $__vars['forum'],
		), $__vars) . '
';
	}
	$__finalCompiled .= '

';
	if ($__vars['canInlineMod']) {
		$__finalCompiled .= '
	';
		$__templater->includeJs(array(
			'src' => 'xf/inline_mod.js',
			'min' => '1',
		));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

' . $__templater->callAdsMacro('forum_view_above_thread_list', array(
		'forum' => $__vars['forum'],
	), $__vars) . '
<div class="block" data-xf-init="' . ($__vars['canInlineMod'] ? 'inline-mod' : '') . '" data-type="thread" data-href="' . $__templater->func('link', array('inline-mod', ), true) . '">

	<div class="block-outer">';
	$__compilerTemp1 = '';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
					';
	if ($__vars['canInlineMod']) {
		$__compilerTemp2 .= '
						' . $__templater->callMacro('inline_mod_macros', 'button', array(), $__vars) . '
					';
	}
	$__compilerTemp2 .= '
					';
	if ($__vars['xf']['visitor']['user_id']) {
		$__compilerTemp2 .= '
						' . $__templater->button('
							' . 'Отметить прочитанным(и)' . '
						', array(
			'href' => $__templater->func('link', array('forums/mark-read', $__vars['forum'], array('date' => $__vars['xf']['time'], ), ), false),
			'class' => 'button--link',
			'overlay' => 'true',
		), '', array(
		)) . '
					';
	}
	$__compilerTemp2 .= '
					';
	if ($__templater->method($__vars['forum'], 'canWatch', array())) {
		$__compilerTemp2 .= '
						';
		$__compilerTemp3 = '';
		if ($__vars['forum']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__compilerTemp3 .= 'Прекратить отслеживание';
		} else {
			$__compilerTemp3 .= 'Отслеживать';
		}
		$__compilerTemp2 .= $__templater->button('
							' . $__compilerTemp3 . '
						', array(
			'href' => $__templater->func('link', array('forums/watch', $__vars['forum'], ), false),
			'class' => 'button--link',
			'data-xf-click' => 'switch-overlay',
			'data-sk-watch' => 'Отслеживать',
			'data-sk-unwatch' => 'Прекратить отслеживание',
		), '', array(
		)) . '
					';
	}
	$__compilerTemp2 .= '
				';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__compilerTemp1 .= '
			<div class="block-outer-opposite">
				<div class="buttonGroup">
				' . $__compilerTemp2 . '
				</div>
			</div>
		';
	}
	$__finalCompiled .= $__templater->func('trim', array('
		' . $__templater->func('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => 'forums',
		'data' => $__vars['forum'],
		'params' => $__vars['filters'],
		'wrapperclass' => 'block-outer-main',
		'perPage' => $__vars['perPage'],
	))) . '
		' . $__compilerTemp1 . '
	'), false) . '</div>

	';
	$__vars['dateLimits'] = array('-1' => 'Всё время', '7' => '' . '7' . ' дней', '14' => '' . '14' . ' дней', '30' => '' . '30' . ' дней', '60' => '' . '2' . ' месяцев', '90' => '' . '3' . ' месяцев', '182' => '' . '6' . ' месяцев', '365' => '1 год', );
	$__finalCompiled .= '
	';
	$__vars['sortOrders'] = array('last_post_date' => 'Последнее сообщение', 'post_date' => 'Первое сообщение', 'title' => 'Заголовок', 'reply_count' => 'Ответы', 'view_count' => 'Просмотры', 'first_post_reaction_score' => 'Количество реакций к первому сообщению', );
	$__finalCompiled .= '

	<div class="block-container">
		<div class="block-filterBar">
			<div class="filterBar">
				';
	$__compilerTemp4 = '';
	$__compilerTemp4 .= '
						';
	if ($__vars['filters']['prefix_id']) {
		$__compilerTemp4 .= '
							<li><a href="' . $__templater->func('link', array('forums', $__vars['forum'], $__templater->filter($__vars['filters'], array(array('replace', array('prefix_id', null, )),), false), ), true) . '"
								class="filterBar-filterToggle" data-xf-init="tooltip" title="' . $__templater->filter('Удалить этот фильтр', array(array('for_attr', array()),), true) . '">
								<span class="filterBar-filterToggle-label">' . 'Префикс' . $__vars['xf']['language']['label_separator'] . '</span>
								' . $__templater->func('prefix_title', array('thread', $__vars['filters']['prefix_id'], ), true) . '</a></li>
						';
	}
	$__compilerTemp4 .= '
						';
	if ($__vars['filters']['starter_id'] AND $__vars['starterFilter']) {
		$__compilerTemp4 .= '
							<li><a href="' . $__templater->func('link', array('forums', $__vars['forum'], $__templater->filter($__vars['filters'], array(array('replace', array('starter_id', null, )),), false), ), true) . '"
								class="filterBar-filterToggle" data-xf-init="tooltip" title="' . $__templater->filter('Удалить этот фильтр', array(array('for_attr', array()),), true) . '">
								<span class="filterBar-filterToggle-label">' . 'Автор' . $__vars['xf']['language']['label_separator'] . '</span>
								' . $__templater->escape($__vars['starterFilter']['username']) . '</a></li>
						';
	}
	$__compilerTemp4 .= '
						';
	if ($__vars['filters']['last_days'] AND $__vars['dateLimits'][$__vars['filters']['last_days']]) {
		$__compilerTemp4 .= '
							<li><a href="' . $__templater->func('link', array('forums', $__vars['forum'], $__templater->filter($__vars['filters'], array(array('replace', array('last_days', null, )),), false), ), true) . '"
								class="filterBar-filterToggle" data-xf-init="tooltip" title="' . $__templater->filter('Удалить этот фильтр', array(array('for_attr', array()),), true) . '">
								<span class="filterBar-filterToggle-label">' . 'Последнее обновление' . $__vars['xf']['language']['label_separator'] . '</span>
								' . $__templater->escape($__vars['dateLimits'][$__vars['filters']['last_days']]) . '</a></li>
						';
	}
	$__compilerTemp4 .= '
						';
	if ($__vars['filters']['order'] AND $__vars['sortOrders'][$__vars['filters']['order']]) {
		$__compilerTemp4 .= '
							<li><a href="' . $__templater->func('link', array('forums', $__vars['forum'], $__templater->filter($__vars['filters'], array(array('replace', array(array('order' => null, 'direction' => null, ), )),), false), ), true) . '"
								class="filterBar-filterToggle" data-xf-init="tooltip" title="' . $__templater->filter('Вернуться к сортировке по умолчанию', array(array('for_attr', array()),), true) . '">
								<span class="filterBar-filterToggle-label">' . 'Сортировка' . $__vars['xf']['language']['label_separator'] . '</span>
								' . $__templater->escape($__vars['sortOrders'][$__vars['filters']['order']]) . '
								' . $__templater->fontAwesome((($__vars['filters']['direction'] == 'asc') ? 'fa-angle-up' : 'fa-angle-down'), array(
		)) . '
								<span class="u-srOnly">';
		if ($__vars['filters']['direction'] == 'asc') {
			$__compilerTemp4 .= 'По возрастанию';
		} else {
			$__compilerTemp4 .= 'По убыванию';
		}
		$__compilerTemp4 .= '</span>
							</a></li>
						';
	}
	$__compilerTemp4 .= '
					';
	if (strlen(trim($__compilerTemp4)) > 0) {
		$__finalCompiled .= '
					<ul class="filterBar-filters">
					' . $__compilerTemp4 . '
					</ul>
				';
	}
	$__finalCompiled .= '

				<a class="filterBar-menuTrigger" data-xf-click="menu" role="button" tabindex="0" aria-expanded="false" aria-haspopup="true">' . 'Фильтры' . '</a>
				<div class="menu menu--wide" data-menu="menu" aria-hidden="true"
					data-href="' . $__templater->func('link', array('forums/filters', $__vars['forum'], $__vars['filters'], ), true) . '"
					data-load-target=".js-filterMenuBody">
					<div class="menu-content">
						<h4 class="menu-header">' . 'Показывать только' . $__vars['xf']['language']['label_separator'] . '</h4>
						<div class="js-filterMenuBody">
							<div class="menu-row">' . 'Загрузка' . $__vars['xf']['language']['ellipsis'] . '</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		';
	$__vars['qtPos'] = $__templater->preEscaped((((($__vars['sortInfo']['order'] == 'last_post_date') AND ($__vars['sortInfo']['direction'] == 'asc'))) ? 'bottom' : 'top'));
	$__finalCompiled .= '

		<div class="block-body">
			<div class="structItemContainer">
				' . $__templater->callMacro('thread_list_macros', 'quick_thread', array(
		'forum' => $__vars['forum'],
		'page' => $__vars['page'],
		'order' => $__vars['sortInfo']['order'],
		'direction' => $__vars['sortInfo']['direction'],
	), $__vars) . '
				';
	if (!$__templater->test($__vars['stickyThreads'], 'empty', array()) OR !$__templater->test($__vars['threads'], 'empty', array())) {
		$__finalCompiled .= '
					';
		if (!$__templater->test($__vars['stickyThreads'], 'empty', array())) {
			$__finalCompiled .= '
						';
			if ($__templater->func('property', array('xtr_sticky_threads', ), false)) {
				$__finalCompiled .= '<div class="separate_thread_important">' . $__templater->func('property', array('xtr_sticky_threads_phrase', ), true) . '</div>';
			}
			$__finalCompiled .= '
						<div class="structItemContainer-group structItemContainer-group--sticky">
							';
			if ($__templater->isTraversable($__vars['stickyThreads'])) {
				foreach ($__vars['stickyThreads'] AS $__vars['thread']) {
					$__finalCompiled .= '
								' . $__templater->callMacro('thread_list_macros', 'item', array(
						'thread' => $__vars['thread'],
						'forum' => $__vars['forum'],
					), $__vars) . '
							';
				}
			}
			$__finalCompiled .= '
						</div>
						';
			if ($__templater->func('property', array('xtr_sticky_threads', ), false)) {
				$__finalCompiled .= '<div class="separate_thread_important">' . $__templater->func('property', array('xtr_normal_threads_phrase', ), true) . '</div>';
			}
			$__finalCompiled .= '

						' . $__templater->callAdsMacro('forum_view_below_stickies', array(
				'forum' => $__vars['forum'],
			), $__vars) . '
					';
		}
		$__finalCompiled .= '

					<div class="structItemContainer-group js-threadList">
						';
		if (!$__templater->test($__vars['threads'], 'empty', array())) {
			$__finalCompiled .= '
							';
			if ($__templater->isTraversable($__vars['threads'])) {
				foreach ($__vars['threads'] AS $__vars['thread']) {
					$__finalCompiled .= '
								' . $__templater->callMacro('thread_list_macros', 'item', array(
						'thread' => $__vars['thread'],
						'forum' => $__vars['forum'],
					), $__vars) . '
							';
				}
			}
			$__finalCompiled .= '
							';
			if ($__vars['showDateLimitDisabler']) {
				$__finalCompiled .= '
								<div class="structItem structItem--note">
									<div class="structItem-cell">
										<a href="' . $__templater->func('link', array('forums', $__vars['forum'], array('page' => $__vars['page'], 'no_date_limit' => 1, ) + $__vars['filters'], ), true) . '">
											' . 'Показать предыдущие элементы' . '
										</a>
									</div>
								</div>
							';
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '
					</div>
				';
	} else if ($__vars['filters']) {
		$__finalCompiled .= '
					<div class="structItemContainer-group js-threadList">
						<div class="structItem js-emptyThreadList">
							<div class="structItem-cell">' . 'Нет тем, соответствующих Вашим фильтрам.' . '</div>
						</div>
					</div>
				';
	} else if ($__vars['showDateLimitDisabler']) {
		$__finalCompiled .= '
					<div class="structItemContainer-group js-threadList">
						<div class="structItem js-emptyThreadList">
							<div class="structItem-cell">' . 'Нет тем для отображения.' . '</div>
						</div>
						<div class="structItem structItem--note">
							<div class="structItem-cell">
								<a href="' . $__templater->func('link', array('forums', $__vars['forum'], array('page' => $__vars['page'], 'no_date_limit' => 1, ) + $__vars['filters'], ), true) . '">
									' . 'Показать предыдущие элементы' . '
								</a>
							</div>
						</div>
					</div>
				';
	} else {
		$__finalCompiled .= '
					<div class="structItemContainer-group js-threadList">
						<div class="structItem js-emptyThreadList">
							<div class="structItem-cell">' . 'В этом форуме пока нет ни одной темы.' . '</div>
						</div>
					</div>
				';
	}
	$__finalCompiled .= '
			</div>
		</div>
	</div>

	<div class="block-outer block-outer--after">
		' . $__templater->func('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => 'forums',
		'data' => $__vars['forum'],
		'params' => $__vars['filters'],
		'wrapperclass' => 'block-outer-main',
		'perPage' => $__vars['perPage'],
	))) . '
		' . $__templater->func('show_ignored', array(array(
		'wrapperclass' => 'block-outer-opposite',
	))) . '
		';
	if (!$__templater->method($__vars['forum'], 'canCreateThread', array())) {
		$__finalCompiled .= '
			<div class="block-outer-opposite">
				';
		if ($__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
					<span class="button is-disabled">
						' . 'У Вас недостаточно прав для ответа здесь.' . '
						<!-- this is not interactive so shouldn\'t be a button element -->
					</span>
				';
		} else {
			$__finalCompiled .= '
					' . $__templater->button('
						' . 'Войдите или зарегистрируйтесь для ответа.' . '
					', array(
				'href' => $__templater->func('link', array('login', ), false),
				'class' => 'button--link button--wrap',
				'overlay' => 'true',
			), '', array(
			)) . '
				';
		}
		$__finalCompiled .= '
			</div>
		';
	}
	$__finalCompiled .= '
	</div>
</div>
' . $__templater->callAdsMacro('forum_view_below_thread_list', array(
		'forum' => $__vars['forum'],
	), $__vars) . '

';
	$__templater->modifySidebarHtml('_xfWidgetPositionSidebarfe322c91013383793fda9cb0d7e31c1f', $__templater->widgetPosition('forum_view_sidebar', array(
		'forum' => $__vars['forum'],
	)), 'replace');
	return $__finalCompiled;
}
);