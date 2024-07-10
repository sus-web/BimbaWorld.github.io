<?php
// FROM HASH: a1dd645efb9d94d4a978c35690043982
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Интеграция с социальными сетями');
	$__finalCompiled .= '

<div class="block">
	<div class="block-outer">
		' . $__templater->callMacro('filter_macros', 'quick_filter', array(
		'key' => 'connected-accounts',
		'class' => 'block-outer-opposite',
	), $__vars) . '
	</div>
	<div class="block-container">
		';
	if (!$__templater->test($__vars['activeProviders'], 'empty', array())) {
		$__finalCompiled .= '
			<div class="block-body">
				';
		$__compilerTemp1 = '';
		if ($__templater->isTraversable($__vars['activeProviders'])) {
			foreach ($__vars['activeProviders'] AS $__vars['provider']) {
				$__compilerTemp1 .= '
						';
				$__compilerTemp2 = array();
				if ($__templater->method($__vars['provider'], 'canBeTested', array())) {
					$__compilerTemp2[] = array(
						'href' => $__templater->func('link', array('connected-accounts/test', $__vars['provider'], ), false),
						'overlay' => 'true',
						'_type' => 'action',
						'html' => 'Протестировать',
					);
				} else {
					$__compilerTemp2[] = array(
						'_type' => 'cell',
						'html' => '',
					);
				}
				$__compilerTemp2[] = array(
					'href' => $__templater->func('link', array('connected-accounts/deactivate', $__vars['provider'], ), false),
					'tooltip' => 'Деактивировать',
					'_type' => 'delete',
					'html' => '',
				);
				$__compilerTemp1 .= $__templater->dataRow(array(
					'label' => $__templater->escape($__vars['provider']['title']),
					'href' => $__templater->func('link', array('connected-accounts/edit', $__vars['provider'], ), false),
				), $__compilerTemp2) . '
					';
			}
		}
		$__finalCompiled .= $__templater->dataList('
					' . $__templater->dataRow(array(
			'rowtype' => 'subsection',
			'rowclass' => 'dataList-row--noHover',
		), array(array(
			'colspan' => '3',
			'_type' => 'cell',
			'html' => 'Активные',
		))) . '
					' . $__compilerTemp1 . '
				', array(
		)) . '
			</div>
		';
	} else {
		$__finalCompiled .= '
			<!--<div class="block-body block-row">' . 'Пока нет ни одного активного поставщика.' . '</div>-->
		';
	}
	$__finalCompiled .= '

		';
	if (!$__templater->test($__vars['inactiveProviders'], 'empty', array())) {
		$__finalCompiled .= '
			<div class="block-body">
				';
		$__compilerTemp3 = '';
		if ($__templater->isTraversable($__vars['inactiveProviders'])) {
			foreach ($__vars['inactiveProviders'] AS $__vars['provider']) {
				$__compilerTemp3 .= '
						' . $__templater->dataRow(array(
					'label' => $__templater->escape($__vars['provider']['title']),
					'href' => $__templater->func('link', array('connected-accounts/edit', $__vars['provider'], ), false),
				), array()) . '
					';
			}
		}
		$__finalCompiled .= $__templater->dataList('
					' . $__templater->dataRow(array(
			'rowtype' => 'subsection',
			'rowclass' => 'dataList-row--noHover',
		), array(array(
			'_type' => 'cell',
			'html' => 'Отключённые',
		))) . '
					' . $__compilerTemp3 . '
				', array(
		)) . '
			</div>
		';
	}
	$__finalCompiled .= '
		<div class="block-footer">
			<span class="block-footer-counter">' . $__templater->func('display_totals', array($__templater->func('count', array($__vars['activeProviders'], ), false) + $__templater->func('count', array($__vars['inactiveProviders'], ), false), ), true) . '</span>
		</div>
	</div>
</div>';
	return $__finalCompiled;
}
);