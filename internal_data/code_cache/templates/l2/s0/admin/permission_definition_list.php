<?php
// FROM HASH: 3daf16d5ce19f0dd1eda6c215252acaf
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Права');
	$__finalCompiled .= '

';
	$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('
		' . 'Добавить право' . '
	', array(
		'href' => $__templater->func('link', array('permission-definitions/permissions/add', ), false),
		'icon' => 'add',
	), '', array(
	)) . '
	' . $__templater->button('
		' . 'Добавить интерфейсную группу' . '
	', array(
		'href' => $__templater->func('link', array('permission-definitions/interface-groups/add', ), false),
		'icon' => 'add',
	), '', array(
	)) . '
');
	$__finalCompiled .= '

';
	if ($__templater->isTraversable($__vars['interfaceGroups'])) {
		foreach ($__vars['interfaceGroups'] AS $__vars['interfaceGroupId'] => $__vars['interfaceGroup']) {
			$__finalCompiled .= '
	<div class="block">
		<div class="block-container">
			<h2 class="block-header">
					<span class="u-pullRight">

						' . $__templater->button('Добавить право', array(
				'href' => $__templater->func('link', array('permission-definitions/permissions/add', null, array('interface_group_id' => $__vars['interfaceGroupId'], ), ), false),
				'class' => 'button--link',
				'fa' => 'fa-plus-square',
			), '', array(
			)) . '
						' . $__templater->button('Изменить', array(
				'href' => $__templater->func('link', array('permission-definitions/interface-groups/edit', $__vars['interfaceGroup'], ), false),
				'class' => 'button--link',
				'fa' => 'fa-edit',
			), '', array(
			)) . '
					</span>
				' . $__templater->func('anchor_target', array('interface_group_' . $__vars['interfaceGroup']['interface_group_id'], ), true) . '
				' . $__templater->escape($__vars['interfaceGroup']['title']) . '
				<span class="block-desc">
					' . $__templater->escape($__vars['interfaceGroupId']) . ' (' . $__templater->escape($__vars['interfaceGroup']['display_order']) . ')
				</span>
			</h2>
			<div class="block-body">
				';
			if (!$__templater->test($__vars['permissionsGrouped'][$__vars['interfaceGroupId']], 'empty', array())) {
				$__finalCompiled .= '
					';
				$__compilerTemp1 = '';
				if ($__templater->isTraversable($__vars['permissionsGrouped'][$__vars['interfaceGroupId']])) {
					foreach ($__vars['permissionsGrouped'][$__vars['interfaceGroupId']] AS $__vars['permission']) {
						$__compilerTemp1 .= '
							' . $__templater->dataRow(array(
							'href' => $__templater->func('link', array('permission-definitions/permissions/edit', $__vars['permission'], ), false),
							'label' => $__templater->escape($__vars['permission']['title']),
							'hint' => $__templater->escape($__vars['permission']['permission_group_id']) . ' / ' . $__templater->escape($__vars['permission']['permission_id']) . ' (' . $__templater->escape($__vars['permission']['display_order']) . ')',
							'hash' => $__vars['permission']['permission_group_id'] . '_' . $__vars['permission']['permission_id'],
						), array()) . '
						';
					}
				}
				$__finalCompiled .= $__templater->dataList('
						' . $__compilerTemp1 . '
					', array(
				)) . '
				';
			} else {
				$__finalCompiled .= '
					<div class="block-row">
						' . 'Для этой интерфейсной группы пока не созданы права. <a href="' . $__templater->func('link', array('permission-definitions/permissions/add', null, array('interface_group_id' => $__vars['interfaceGroupId'], ), ), true) . '">Добавить право</a>.' . '
					</div>
				';
			}
			$__finalCompiled .= '
			</div>
		</div>
	</div>
';
		}
	}
	$__finalCompiled .= '

';
	$__vars['ungroupedKey'] = '';
	$__finalCompiled .= '
';
	if (!$__templater->test($__vars['permissionsGrouped'][$__vars['ungroupedKey']], 'empty', array())) {
		$__finalCompiled .= '
	<div class="block">
		<div class="block-container">
			<h2 class="block-header">
				' . 'Права без групп' . '
			</h2>
			<div class="block-body">
				';
		$__compilerTemp2 = '';
		if ($__templater->isTraversable($__vars['permissionsGrouped'][$__vars['ungroupedKey']])) {
			foreach ($__vars['permissionsGrouped'][$__vars['ungroupedKey']] AS $__vars['permission']) {
				$__compilerTemp2 .= '
						' . $__templater->dataRow(array(
					'href' => $__templater->func('link', array('permission-definitions/permissions/edit', $__vars['permission'], ), false),
					'label' => $__templater->escape($__vars['permission']['title']),
					'hint' => $__templater->escape($__vars['permission']['permission_group_id']) . ' / ' . $__templater->escape($__vars['permission']['permission_id']),
					'hash' => $__vars['permission']['permission_group_id'] . '_' . $__vars['permission']['permission_id'],
				), array()) . '
					';
			}
		}
		$__finalCompiled .= $__templater->dataList('
					' . $__compilerTemp2 . '
				', array(
		)) . '
			</div>
		</div>
	</div>
';
	}
	return $__finalCompiled;
}
);