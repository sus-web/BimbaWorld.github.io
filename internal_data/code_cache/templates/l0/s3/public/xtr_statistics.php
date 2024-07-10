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
						<div class="xentr_stats_text">' . $__templater->filter($__vars['xtr_statistics']['threads'], array(array('number', array()),), true) . '<span>' . 'Threads' . '</span></div>
					</div>
					<div class="xentr_stats_col">
						<div class="xentr_stats_icon"><i class="fas fa-users"></i></div>
						<div class="xentr_stats_text">' . $__templater->filter($__vars['xtr_statistics']['messages'], array(array('number', array()),), true) . '<span>' . 'Messages' . '</span></div>
					</div>
					<div class="xentr_stats_col">
						<div class="xentr_stats_icon"><i class="fas fa-chart-line"></i></div>
						<div class="xentr_stats_text">' . $__templater->filter($__vars['xtr_statistics']['users'], array(array('number', array()),), true) . '<span>' . 'Members' . '</span></div>
					</div>
					<div class="xentr_stats_col">
						<div class="xentr_stats_text">' . $__templater->func('username_link', array($__vars['xtr_statistics']['latestUser'], false, array(
	))) . '<span>' . 'Latest member' . '</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';
	return $__finalCompiled;
}
);