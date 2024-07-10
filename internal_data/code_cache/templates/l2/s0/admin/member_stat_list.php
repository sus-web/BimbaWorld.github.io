<?php
// FROM HASH: 03812faf0a64def2a657de93887db0cc
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Статистика пользователей');
	$__finalCompiled .= '
';
	$__templater->pageParams['pageDescription'] = $__templater->preEscaped('Используйте эту страницу для определения и редактирования групп пользователей, которые могут отображаться на общедоступной странице "Полезные пользователи"');
	$__templater->pageParams['pageDescriptionMeta'] = true;
	$__finalCompiled .= '

';
	$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('Добавить статистику', array(
		'href' => $__templater->func('link', array('member-stats/add', ), false),
		'icon' => 'add',
	), '', array(
	)) . '
');
	$__finalCompiled .= '

';
	if (!$__templater->test($__vars['memberStats'], 'empty', array())) {
		$__finalCompiled .= '
	';
		$__compilerTemp1 = '';
		if ($__templater->isTraversable($__vars['memberStats'])) {
			foreach ($__vars['memberStats'] AS $__vars['memberStat']) {
				$__compilerTemp1 .= '
						' . $__templater->dataRow(array(
					'label' => $__templater->escape($__vars['memberStat']['title']),
					'href' => $__templater->func('link', array('member-stats/edit', $__vars['memberStat'], ), false),
					'delete' => $__templater->func('link', array('member-stats/delete', $__vars['memberStat'], ), false),
				), array(array(
					'name' => 'active[' . $__vars['memberStat']['member_stat_id'] . ']',
					'selected' => $__vars['memberStat']['active'],
					'class' => 'dataList-cell--separated',
					'submit' => 'true',
					'tooltip' => 'Включить / отключить \'' . $__vars['memberStat']['title'] . '\'',
					'_type' => 'toggle',
					'html' => '',
				))) . '
					';
			}
		}
		$__finalCompiled .= $__templater->form('
		<div class="block-outer">
			' . $__templater->callMacro('filter_macros', 'quick_filter', array(
			'key' => 'member_stats',
			'class' => 'block-outer-opposite',
		), $__vars) . '
		</div>
		<div class="block-container">
			<div class="block-body">
				' . $__templater->dataList('
					' . $__compilerTemp1 . '
				', array(
		)) . '
			</div>
			<div class="block-footer">
				<span class="block-footer-counter">' . $__templater->func('display_totals', array($__vars['memberStats'], ), true) . '</span>
			</div>
		</div>
	', array(
			'action' => $__templater->func('link', array('member-stats/toggle', ), false),
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