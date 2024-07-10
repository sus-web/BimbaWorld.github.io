<?php
// FROM HASH: 094bf620860afb35f703f472183a6c90
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('xtr_statistics.less');
	$__finalCompiled .= '

<div class="xentr-statistics block">
	<div class="p-footer-inner">
		<div class="block-container">	
			<div class="block-body">
				<div id="xentr_stats">
					<div class="xentr_stats_col">
						<div class="xentr_stats_icon"><i class="fas fa-comments"></i></div>
						<div class="xentr_stats_text">' . $__templater->filter($__vars['xtr_statistics']['threads'], array(array('number', array()),), true) . '<span>' . 'Темы' . '</span></div>
					</div>
					<div class="xentr_stats_col">
						<div class="xentr_stats_icon"><i class="fas fa-users"></i></div>
						<div class="xentr_stats_text">' . $__templater->filter($__vars['xtr_statistics']['messages'], array(array('number', array()),), true) . '<span>' . 'Сообщения' . '</span></div>
					</div>
					<div class="xentr_stats_col">
						<div class="xentr_stats_icon"><i class="fas fa-chart-line"></i></div>
						<div class="xentr_stats_text">' . $__templater->filter($__vars['xtr_statistics']['users'], array(array('number', array()),), true) . '<span>' . 'Пользователи' . '</span></div>
					</div>
					<div class="xentr_stats_col">
						<div class="xentr_stats_text">' . $__templater->func('username_link', array($__vars['xtr_statistics']['latestUser'], false, array(
	))) . '<span>' . 'Новый пользователь' . '</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';
	return $__finalCompiled;
}
);