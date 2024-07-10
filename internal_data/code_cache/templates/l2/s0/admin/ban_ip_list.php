<?php
// FROM HASH: 120dcd13a2835a8c076c55ab3bf27f1a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Заблокированные IP адреса');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if (!$__templater->test($__vars['ipBans'], 'empty', array())) {
		$__compilerTemp1 .= '
			' . $__templater->button('', array(
			'href' => $__templater->func('link', array('banning/ips/export', null, array('t' => $__templater->func('csrf_token', array(), false), ), ), false),
			'icon' => 'export',
		), '', array(
		)) . '
		';
	}
	$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	<div class="buttonGroup">
		' . $__templater->button('', array(
		'href' => $__templater->func('link', array('banning/ips/import', ), false),
		'icon' => 'import',
		'overlay' => 'true',
	), '', array(
	)) . '
		' . $__compilerTemp1 . '
	</div>
');
	$__finalCompiled .= '

';
	if (!$__templater->test($__vars['ipBans'], 'empty', array())) {
		$__finalCompiled .= '
	';
		$__compilerTemp2 = '';
		if ($__templater->isTraversable($__vars['ipBans'])) {
			foreach ($__vars['ipBans'] AS $__vars['ipBan']) {
				$__compilerTemp2 .= '
						' . $__templater->dataRow(array(
				), array(array(
					'name' => 'delete[]',
					'value' => $__vars['ipBan']['ip'],
					'_type' => 'toggle',
					'html' => '',
				),
				array(
					'class' => 'u-ltr',
					'_type' => 'cell',
					'html' => $__templater->escape($__vars['ipBan']['ip']),
				),
				array(
					'_type' => 'cell',
					'html' => ($__vars['ipBan']['create_date'] ? $__templater->func('date', array($__vars['ipBan']['create_date'], ), true) : 'Н/Д'),
				),
				array(
					'_type' => 'cell',
					'html' => '
								' . ($__vars['ipBan']['last_triggered_date'] ? $__templater->func('date_dynamic', array($__vars['ipBan']['last_triggered_date'], ), true) : 'Никогда') . '
							',
				),
				array(
					'_type' => 'cell',
					'html' => ($__vars['ipBan']['User'] ? $__templater->escape($__vars['ipBan']['User']['username']) : 'Н/Д'),
				),
				array(
					'_type' => 'cell',
					'html' => ($__vars['ipBan']['reason'] ? $__templater->escape($__vars['ipBan']['reason']) : 'Н/Д'),
				))) . '
					';
			}
		}
		$__finalCompiled .= $__templater->form('
		<div class="block-container">
			<div class="block-body">
				' . $__templater->dataList('
					<colgroup>
						<col style="width: 1%">
						<col style="width: 15%">
						<col style="width: 15%">
						<col style="width: 15%">
						<col style="width: 15%">
						<col>
					</colgroup>
					' . $__templater->dataRow(array(
			'rowtype' => 'header',
		), array(array(
			'_type' => 'cell',
			'html' => $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'check-all' => '< .block-container',
			'data-xf-init' => 'tooltip',
			'title' => 'Выделить всё',
			'_type' => 'option',
		))),
		),
		array(
			'href' => $__templater->func('link', array('banning/ips', '', array('order' => 'start_range', 'direction' => (((($__vars['direction'] == 'desc') OR (!$__vars['direction']))) ? 'asc' : ''), ), ), false),
			'_type' => 'cell',
			'html' => '
							' . 'IP' . '
						',
		),
		array(
			'href' => $__templater->func('link', array('banning/ips', '', array('order' => '', 'direction' => (((($__vars['direction'] == 'desc') OR (!$__vars['direction']))) ? 'asc' : ''), ), ), false),
			'_type' => 'cell',
			'html' => '
							' . 'Дата' . '
						',
		),
		array(
			'href' => $__templater->func('link', array('banning/ips', '', array('order' => 'last_triggered_date', 'direction' => (((($__vars['direction'] == 'desc') OR (!$__vars['direction']))) ? 'asc' : ''), ), ), false),
			'_type' => 'cell',
			'html' => '
							' . 'Последнее срабатывание' . '
						',
		),
		array(
			'_type' => 'cell',
			'html' => 'От',
		),
		array(
			'_type' => 'cell',
			'html' => 'Причина',
		))) . '
					' . $__compilerTemp2 . '
				', array(
			'data-xf-init' => 'responsive-data-list',
		)) . '
			</div>
			<div class="block-footer block-footer--split">
				<span class="block-footer-counter">' . $__templater->func('display_totals', array($__vars['ipBans'], $__vars['total'], ), true) . '</span>
				<span class="block-footer-select">' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'check-all' => '< .block-container',
			'label' => 'Выделить всё',
			'_type' => 'option',
		))) . '</span>
				<span class="block-footer-controls">' . $__templater->button('', array(
			'type' => 'submit',
			'icon' => 'delete',
		), '', array(
		)) . '</span>
			</div>
		</div>
			' . $__templater->func('page_nav', array(array(
			'page' => $__vars['page'],
			'total' => $__vars['total'],
			'link' => 'banning/ips',
			'params' => array('order' => (($__vars['order'] != 'create_date') ? $__vars['order'] : ''), 'direction' => (($__vars['direction'] != 'desc') ? $__vars['direction'] : ''), ),
			'wrapperclass' => 'block-outer block-outer--after',
			'perPage' => $__vars['perPage'],
		))) . '
	', array(
			'action' => $__templater->func('link', array('banning/ips/delete', ), false),
			'ajax' => 'true',
			'class' => 'block',
		)) . '
';
	} else {
		$__finalCompiled .= '
	<div class="blockMessage">' . 'Пока не заблокировано ни одного IP адреса.' . '</div>
';
	}
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<h3 class="block-header">' . 'Заблокировать IP адрес' . '</h3>
		<div class="block-body">
			' . $__templater->formTextBoxRow(array(
		'name' => 'ip',
		'value' => $__vars['ip'],
		'dir' => 'ltr',
	), array(
		'label' => 'IP для блокировки',
		'explain' => 'Можно ввести часть IP-адреса (в формате v4 или v6). Частичные адреса IPv4 можно ввести в виде 192.168.* или 192.168.1.1/16. Частичные адреса IPv6 могут быть введены в виде 2001:db8::/32.',
	)) . '
			' . $__templater->formTextBoxRow(array(
		'name' => 'reason',
		'maxlength' => $__templater->func('max_length', array($__vars['newIp'], 'reason', ), false),
	), array(
		'label' => 'Причина',
		'hint' => 'Указывать не обязательно',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('banning/ips/add', ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);