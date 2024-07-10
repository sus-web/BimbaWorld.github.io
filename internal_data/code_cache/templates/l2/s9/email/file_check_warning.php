<?php
// FROM HASH: 18d7a8170e4fa460403d6bc6f7f7ec9a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<mail:subject>
	' . 'Предупреждение о проверке файлов с форума ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '' . '
</mail:subject>

<p>' . 'Автоматическая проверка целостности файлов была запущена на ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' в ' . $__templater->func('date_time', array($__vars['fileCheck']['check_date'], ), true) . ', и были обнаружены некоторые проблемы, которые должны быть решены как можно скорее.' . '</p>

';
	if ($__vars['fileCheck']['total_missing'] AND $__vars['fileCheck']['total_inconsistent']) {
		$__finalCompiled .= '
	<p>' . 'After checking ' . $__templater->filter($__vars['fileCheck']['total_checked'], array(array('number', array()),), true) . ' files we found ' . $__templater->filter($__vars['fileCheck']['total_missing'], array(array('number', array()),), true) . ' files missing and ' . $__templater->filter($__vars['fileCheck']['total_inconsistent'], array(array('number', array()),), true) . ' files which contained unexpected contents.' . '</p>
';
	} else if ($__vars['fileCheck']['total_missing']) {
		$__finalCompiled .= '
	<p>' . 'After checking ' . $__templater->filter($__vars['fileCheck']['total_checked'], array(array('number', array()),), true) . ' files we found ' . $__templater->filter($__vars['fileCheck']['total_missing'], array(array('number', array()),), true) . ' files missing.' . '</p>
';
	} else if ($__vars['fileCheck']['total_inconsistent']) {
		$__finalCompiled .= '
	<p>' . 'После проверки ' . $__templater->filter($__vars['fileCheck']['total_checked'], array(array('number', array()),), true) . ' файлов мы обнаружили ' . $__templater->filter($__vars['fileCheck']['total_inconsistent'], array(array('number', array()),), true) . ' файлов, которые имеют неожиданное содержание. Если Вы сами отредактировали эти файлы, то Вы можете игнорировать данное предупреждение, в противном случае Вам стоит выяснить причину, так как это может свидетельствовать о повреждении файлов или потенциально вредоносных изменениях в них.' . '</p>
';
	}
	$__finalCompiled .= '

<table cellpadding="10" cellspacing="0" border="0" width="100%" class="linkBar">
	<tr>
		<td>
			<a href="' . $__templater->func('link_type', array('admin', 'canonical:tools/file-check/results', $__vars['fileCheck'], ), true) . '" class="button">' . 'Please review the files' . '</a>
		</td>
	</tr>
</table>';
	return $__finalCompiled;
}
);