<?php
// FROM HASH: a9c5064db5dad894340ebcb7b7dc5034
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Фильтры роутинга');
	$__finalCompiled .= '
';
	$__templater->pageParams['pageDescription'] = $__templater->preEscaped('Фильтры роутинга позволяют изменять стандартные URL-адреса, генерируемые XenForo.');
	$__templater->pageParams['pageDescriptionMeta'] = true;
	$__finalCompiled .= '

';
	$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('Добавить фильтр роутинга', array(
		'href' => $__templater->func('link', array('route-filters/add', ), false),
		'icon' => 'add',
	), '', array(
	)) . '
');
	$__finalCompiled .= '

';
	if (!$__templater->test($__vars['routeFilters'], 'empty', array())) {
		$__finalCompiled .= '
	';
		$__compilerTemp1 = '';
		if ($__templater->isTraversable($__vars['routeFilters'])) {
			foreach ($__vars['routeFilters'] AS $__vars['routeFilter']) {
				$__compilerTemp1 .= '
						' . $__templater->dataRow(array(
					'delete' => $__templater->func('link', array('route-filters/delete', $__vars['routeFilter'], ), false),
				), array(array(
					'href' => $__templater->func('link', array('route-filters/edit', $__vars['routeFilter'], ), false),
					'_type' => 'cell',
					'html' => '
								' . $__templater->escape($__vars['routeFilter']['find_route_readable']) . '
							',
				),
				array(
					'href' => $__templater->func('link', array('route-filters/edit', $__vars['routeFilter'], ), false),
					'_type' => 'cell',
					'html' => '
								' . $__templater->escape($__vars['routeFilter']['replace_route_readable']) . '
							',
				),
				array(
					'name' => 'enabled[' . $__vars['routeFilter']['route_filter_id'] . ']',
					'selected' => $__vars['routeFilter']['enabled'],
					'class' => 'dataList-cell--separated',
					'submit' => 'true',
					'tooltip' => 'Включить / отключить фильтр роутинга',
					'_type' => 'toggle',
					'html' => '',
				))) . '
					';
			}
		}
		$__finalCompiled .= $__templater->form('
		<div class="block-outer">
			' . $__templater->callMacro('filter_macros', 'quick_filter', array(
			'key' => 'route-filters',
			'class' => 'block-outer-opposite',
		), $__vars) . '
		</div>
		<div class="block-container">
			<div class="block-body">
				' . $__templater->dataList('
					' . $__templater->dataRow(array(
			'rowtype' => 'header',
		), array(array(
			'_type' => 'cell',
			'html' => 'Найти',
		),
		array(
			'_type' => 'cell',
			'html' => 'Заменить',
		),
		array(
			'_type' => 'cell',
			'html' => '&nbsp;',
		),
		array(
			'_type' => 'cell',
			'html' => '&nbsp;',
		))) . '
					' . $__compilerTemp1 . '
				', array(
		)) . '
			</div>
			<div class="block-footer">
				<span class="block-footer-counter">' . $__templater->func('display_totals', array($__vars['routeFilters'], ), true) . '</span>
			</div>
		</div>
	', array(
			'action' => $__templater->func('link', array('route-filters/toggle', ), false),
			'class' => 'block',
			'ajax' => 'true',
		)) . '
';
	} else {
		$__finalCompiled .= '
	<div class="blockMessage">' . 'Пока не создано ни одного элемента.' . '</div>
';
	}
	return $__finalCompiled;
}
);