<?php
// FROM HASH: ad785f43471c8ce500dbc1f6c0cd25de
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Журнал срабатываний антиспама');
	$__finalCompiled .= '

';
	if (!$__templater->test($__vars['entries'], 'empty', array())) {
		$__finalCompiled .= '
	<div class="block">
		<div class="block-container">
			<div class="block-body">
				';
		$__compilerTemp1 = '';
		if ($__templater->isTraversable($__vars['entries'])) {
			foreach ($__vars['entries'] AS $__vars['entry']) {
				$__compilerTemp1 .= '
						' . $__templater->dataRow(array(
					'label' => ($__vars['entry']['User'] ? $__templater->escape($__vars['entry']['User']['username']) : 'Неизвестная учётная запись') . ' - ' . $__templater->escape($__vars['entry']['details']),
					'href' => $__templater->func('link', array('logs/spam-trigger', $__vars['entry'], ), false),
					'overlay' => 'true',
					'explain' => '
								<ul class="listInline listInline--bullet">
									<li>' . (($__vars['entry']['result'] == 'moderated') ? 'На модерации' : 'Отклонён') . '</li>
									<li>' . $__templater->func('date_dynamic', array($__vars['entry']['log_date'], array(
				))) . '</li>
									<li>' . 'Содержимое' . $__vars['xf']['language']['label_separator'] . ' ' . ($__templater->escape($__templater->method($__vars['xf']['app'], 'getContentTypePhrase', array($__vars['entry']['content_type'], ))) ?: $__templater->escape($__vars['entry']['content_type'])) . '</li>
								</ul>
							',
				), array()) . '
					';
			}
		}
		$__finalCompiled .= $__templater->dataList('
					' . $__compilerTemp1 . '
				', array(
		)) . '
			</div>
			<div class="block-footer">
				<span class="block-footer-counter">' . $__templater->func('display_totals', array($__vars['entries'], $__vars['total'], ), true) . '</span>
			</div>
		</div>
		' . $__templater->func('page_nav', array(array(
			'page' => $__vars['page'],
			'total' => $__vars['total'],
			'link' => 'logs/spam-trigger',
			'wrapperclass' => 'block-outer block-outer--after',
			'perPage' => $__vars['perPage'],
		))) . '
	</div>
';
	} else {
		$__finalCompiled .= '
	<div class="blockMessage">' . 'Пока нет ни одной записи.' . '</div>
';
	}
	return $__finalCompiled;
}
);