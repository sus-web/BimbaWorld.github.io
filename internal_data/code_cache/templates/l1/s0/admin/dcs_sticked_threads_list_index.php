<?php
// FROM HASH: 94d6986e1023b2d75d50c86a7cdef2c2
return array(
'macros' => array('row' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'entity' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
		' . $__templater->dataRow(array(
	), array(array(
		'href' => $__templater->func('link', array('dcs-sticked-threads/list/view', $__vars['entity'], ), false),
		'label' => $__templater->escape($__vars['entity']['name']),
		'hash' => $__vars['entity']['count'],
		'dir' => 'auto',
		'explain' => '
				<ul class="listInline listInline--bullet">
					<li>' . 'Thread' . ' #' . $__templater->escape($__vars['entity']['count']) . '</li>
					<li>' . $__templater->escape($__vars['entity']['link']) . '</li>
				</ul>
			',
		'_type' => 'main',
		'html' => '',
	),
	array(
		'href' => $__templater->func('link', array('dcs-sticked-threads/list/delete', $__vars['entity'], ), false),
		'tooltip' => 'Delete' . ' ',
		'_type' => 'delete',
		'html' => '',
	))) . '
	
';
	return $__finalCompiled;
}
),
'full_block' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'parentTemplate' => '!',
		'blockOuterMacro' => '',
		'searchFilterUrl' => '',
		'blockBodyBefore' => '',
		'blockBodyAfter' => '',
		'entities' => '!',
		'entityRow' => '!',
		'total' => '!',
		'perPage' => '!',
		'page' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="block">
		<div class="block-outer">
			<div class="block-outer-main">
				';
	if ($__vars['blockOuterMacro']) {
		$__finalCompiled .= '
					' . $__templater->callMacro($__vars['parentTemplate'], $__vars['blockOuterMacro'], array(), $__vars) . '
				';
	}
	$__finalCompiled .= '
			</div>

			';
	if ($__vars['searchFilterUrl']) {
		$__finalCompiled .= '
				' . $__templater->callMacro('filter_macros', 'quick_filter', array(
			'key' => $__vars['parentTemplate'],
			'ajax' => $__vars['searchFilterUrl'],
			'class' => 'block-outer-opposite',
		), $__vars) . '
			';
	}
	$__finalCompiled .= '
		</div>

		<div class="block-container">
			';
	if ($__vars['blockBodyBefore']) {
		$__finalCompiled .= '
				' . $__templater->callMacro($__vars['parentTemplate'], $__vars['blockBodyBefore'], array(), $__vars) . '
			';
	}
	$__finalCompiled .= '

			<div class="block-body">
				';
	$__compilerTemp1 = '';
	if ($__vars['filter'] AND ($__vars['total'] > $__vars['perPage'])) {
		$__compilerTemp1 .= '
						' . $__templater->dataRow(array(
			'rowclass' => 'dataList-row--note dataList-row--noHover js-filterForceShow',
		), array(array(
			'colspan' => '2',
			'_type' => 'cell',
			'html' => 'There are more records matching your filter. Please be more specific.',
		))) . '
					';
	}
	$__finalCompiled .= $__templater->dataList('
					' . $__templater->callMacro(null, 'list', array(
		'entities' => $__vars['entities'],
		'page' => $__vars['page'],
		'parentTemplate' => $__vars['parentTemplate'],
		'entityRow' => $__vars['entityRow'],
	), $__vars) . '

					' . $__compilerTemp1 . '
				', array(
	)) . '
			</div>

			<div class="block-footer">
				<span class="block-footer-counter">' . $__templater->func('display_totals', array($__vars['entities'], $__vars['total'], ), true) . '</span>
			</div>

			';
	if ($__vars['blockBodyAfter']) {
		$__finalCompiled .= '
				' . $__templater->callMacro($__vars['parentTemplate'], $__vars['blockBodyAfter'], array(
			'entities' => $__vars['entities'],
			'total' => $__vars['total'],
			'perPage' => $__vars['perPage'],
			'page' => $__vars['page'],
		), $__vars) . '
			';
	}
	$__finalCompiled .= '
		</div>
	</div>

	' . $__templater->func('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => $__vars['searchFilterUrl'],
		'params' => '',
		'data' => $__vars['style'],
		'wrapperclass' => 'js-filterHide block-outer block-outer--after',
		'perPage' => $__vars['perPage'],
	))) . '
';
	return $__finalCompiled;
}
),
'list' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'entities' => '!',
		'page' => '!',
		'parentTemplate' => '!',
		'entityRow' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	if ($__templater->isTraversable($__vars['entities'])) {
		foreach ($__vars['entities'] AS $__vars['entity']) {
			$__finalCompiled .= '
		' . $__templater->callMacro($__vars['parentTemplate'], $__vars['entityRow'], array(
				'entity' => $__vars['entity'],
			), $__vars) . '
	';
		}
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
	$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('Add thread', array(
		'href' => $__templater->func('link', array('dcs-sticked-threads/list/add', ), false),
		'icon' => 'add',
	), '', array(
	)) . '
');
	$__finalCompiled .= '

';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Threads list');
	$__finalCompiled .= '

' . '

' . '

' . $__templater->callMacro(null, 'full_block', array(
		'parentTemplate' => 'dcs_sticked_threads_list_index',
		'searchFilterUrl' => $__vars['searchFilterUrl'],
		'entities' => $__vars['threads'],
		'entityRow' => 'row',
		'total' => $__vars['total'],
		'perPage' => $__vars['perPage'],
		'page' => $__vars['page'],
	), $__vars);
	return $__finalCompiled;
}
);