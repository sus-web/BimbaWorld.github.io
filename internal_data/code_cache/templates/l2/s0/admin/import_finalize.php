<?php
// FROM HASH: ae09f4aabd4f527996b4251be2a08a57
return array(
'macros' => array('notes' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'notes' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	' . $__templater->formRow('
		' . $__templater->escape($__vars['notes']['logTable']) . '
	', array(
		'label' => 'Таблица журнала импорта',
		'explain' => 'Эта таблица содержит сопоставления от старых ID к новым. Она может потребоваться для скриптов перенаправления.',
	)) . '
	';
	$__compilerTemp1 = '';
	if ($__vars['notes']['runTime'] > 3600) {
		$__compilerTemp1 .= '
			' . '' . $__templater->func('number', array($__vars['notes']['runTime'] / 3600, 2, ), true) . ' часов' . '
		';
	} else if ($__vars['notes']['runTime'] >= 120) {
		$__compilerTemp1 .= '
			' . '' . $__templater->func('number', array($__vars['notes']['runTime'] / 60, 2, ), true) . ' минут' . '
		';
	} else {
		$__compilerTemp1 .= '
			' . '' . $__templater->func('number', array($__vars['notes']['runTime'], ), true) . ' секунд' . '
		';
	}
	$__finalCompiled .= $__templater->formRow('
		' . $__compilerTemp1 . '
	', array(
		'label' => 'Общее время выполнения',
	)) . '
	';
	$__compilerTemp2 = '';
	if ($__templater->isTraversable($__vars['notes']['totals'])) {
		foreach ($__vars['notes']['totals'] AS $__vars['total']) {
			$__compilerTemp2 .= '
			<dl class="pairs pairs--columns pairs--fixedSmall">
				<dt>' . $__templater->escape($__vars['total']['title']) . '</dt>
				<dd>
					' . $__templater->filter($__vars['total']['total'], array(array('number', array()),), true) . '
					';
			if ($__vars['total']['total']) {
				$__compilerTemp2 .= '
						';
				if ($__vars['total']['time'] > 3600) {
					$__compilerTemp2 .= '
							' . $__templater->func('parens', array('' . $__templater->func('number', array($__vars['total']['time'] / 3600, 0, ), false) . ' часов, ' . $__templater->func('number', array((($__vars['total']['time'] / 60)) % 60, 0, ), false) . ' минут', ), true) . '
						';
				} else if ($__vars['total']['time'] >= 120) {
					$__compilerTemp2 .= '
							' . $__templater->func('parens', array('' . $__templater->func('number', array($__vars['total']['time'] / 60, 2, ), false) . ' минут', ), true) . '
						';
				} else {
					$__compilerTemp2 .= '
							' . $__templater->func('parens', array('' . $__templater->func('number', array($__vars['total']['time'], ), false) . ' секунд', ), true) . '
						';
				}
				$__compilerTemp2 .= '
					';
			}
			$__compilerTemp2 .= '
				</dd>
			</dl>
		';
		}
	}
	$__finalCompiled .= $__templater->formRow('
		' . $__compilerTemp2 . '
	', array(
		'label' => 'Всего импортировано',
	)) . '
	';
	if ($__vars['notes']['notes']) {
		$__finalCompiled .= '
		<hr class="formRowSep" />

		';
		if ($__templater->isTraversable($__vars['notes']['notes'])) {
			foreach ($__vars['notes']['notes'] AS $__vars['noteSet']) {
				$__finalCompiled .= '
			';
				$__compilerTemp3 = '';
				if ($__templater->isTraversable($__vars['noteSet']['entries'])) {
					foreach ($__vars['noteSet']['entries'] AS $__vars['entry']) {
						$__compilerTemp3 .= '
					<li>' . $__templater->escape($__vars['entry']) . '</li>
				';
					}
				}
				$__finalCompiled .= $__templater->formRow('
				<ul style="margin-top: 0; margin-bottom: 0">
				' . $__compilerTemp3 . '
				</ul>
			', array(
					'label' => $__templater->escape($__vars['noteSet']['title']),
				)) . '
		';
			}
		}
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Завершить импорт');
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Все данные теперь импортированы. Последний шаг - завершение импорта. Это вызовет все действия, необходимые для обеспечения того, чтобы импортированные данные были структурированы так, как ожидалось. До тех пор пока это не будет сделано, импортируемые данные могут не отображаться должным образом.' . '
			', array(
	)) . '
			' . $__templater->callMacro(null, 'notes', array(
		'notes' => $__vars['notes'],
	), $__vars) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Завершить импорт',
		'sticky' => 'true',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('import/finalize', ), false),
		'class' => 'block',
	)) . '

';
	return $__finalCompiled;
}
);