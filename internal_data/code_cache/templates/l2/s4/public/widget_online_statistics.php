<?php
// FROM HASH: 299a1e48a6109503bbc4304782127343
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="block"' . $__templater->func('widget_data', array($__vars['widget'], ), true) . '>
	<div class="block-container">
		<h3 class="block-minorHeader">' . $__templater->escape($__vars['title']) . '</h3>
		<div class="block-body block-row">
			<dl class="pairs pairs--justified">
				<dt>' . 'Пользователей онлайн' . '</dt>
				<dd>' . $__templater->filter($__vars['counts']['members'], array(array('number', array()),), true) . '</dd>
			</dl>

			<dl class="pairs pairs--justified">
				<dt>' . 'Гостей онлайн' . '</dt>
				<dd>' . $__templater->filter($__vars['counts']['guests'], array(array('number', array()),), true) . '</dd>
			</dl>

			<dl class="pairs pairs--justified">
				<dt>' . 'Всего посетителей' . '</dt>
				<dd>' . $__templater->filter($__vars['counts']['total'], array(array('number', array()),), true) . '</dd>
			</dl>
		</div>
		<div class="block-footer">
			' . 'Общее количество посетителей может включать в себя скрытых пользователей.' . '
		</div>
	</div>
</div>';
	return $__finalCompiled;
}
);