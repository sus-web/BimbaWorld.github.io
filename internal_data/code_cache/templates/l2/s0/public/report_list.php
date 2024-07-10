<?php
// FROM HASH: 9296184b8a49b57501b157b21ea180e5
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Жалобы');
	$__finalCompiled .= '

<div class="block">
	<div class="block-outer">
		<div class="block-outer-opposite">
			' . $__templater->button('Найти жалобы', array(
		'class' => 'button--link menuTrigger',
		'data-xf-click' => 'menu',
		'aria-expanded' => 'false',
		'aria-haspopup' => 'true',
	), '', array(
	)) . '
			' . $__templater->callMacro('report_list_macros', 'search_menu', array(), $__vars) . '
		</div>
	</div>
	<div class="block-container">
		<h2 class="block-tabHeader tabs">
			<a href="' . $__templater->func('link', array('reports', ), true) . '" class="tabs-tab is-active">' . 'Активные жалобы' . '</a>
			<a href="' . $__templater->func('link', array('reports/closed', ), true) . '" class="tabs-tab">' . 'Закрытые жалобы' . '</a>
		</h2>
		<div class="block-body">
			';
	if (!$__templater->test($__vars['openReports'], 'empty', array())) {
		$__finalCompiled .= '
				<div class="structItemContainer">
					';
		if ($__templater->isTraversable($__vars['openReports'])) {
			foreach ($__vars['openReports'] AS $__vars['report']) {
				$__finalCompiled .= '
						' . $__templater->callMacro('report_list_macros', 'item', array(
					'report' => $__vars['report'],
				), $__vars) . '
					';
			}
		}
		$__finalCompiled .= '
				</div>
			';
	} else {
		$__finalCompiled .= '
				<div class="block-row">' . 'В данный момент нет жалоб, требующих Вашего внимания.' . '</div>
			';
	}
	$__finalCompiled .= '
		</div>
	</div>
</div>

<div class="block">
	';
	if (!$__templater->test($__vars['closedReports'], 'empty', array())) {
		$__finalCompiled .= '
		<div class="block-container">
			<h3 class="block-header">
				' . 'Последние закрытые жалобы' . '
			</h3>
			<div class="block-body">
				<div class="structItemContainer">
					';
		if ($__templater->isTraversable($__vars['closedReports'])) {
			foreach ($__vars['closedReports'] AS $__vars['report']) {
				$__finalCompiled .= '
						' . $__templater->callMacro('report_list_macros', 'item', array(
					'report' => $__vars['report'],
				), $__vars) . '
					';
			}
		}
		$__finalCompiled .= '
				</div>
			</div>
		</div>
	';
	}
	$__finalCompiled .= '
</div>';
	return $__finalCompiled;
}
);