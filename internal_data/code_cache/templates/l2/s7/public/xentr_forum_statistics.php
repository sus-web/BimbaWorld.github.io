<?php
// FROM HASH: b87deb1d9bd4b50a1d3197f12de32332
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('xtr_bootstrap_grid.less');
	$__finalCompiled .= '
';
	$__templater->includeCss('xentr_forum_statistics.less');
	$__finalCompiled .= '

<div class="xentr-main block">
	<div class="col-sm-12 col-md-6 col-lg-3">
		<div class="card">
			<div class="card-body">
				<div class="xentr_stats_title">' . 'Темы' . '</div>
				<h2 class="stats-content">
					<i class="' . $__templater->func('property', array('xentr_threads_icon', ), true) . ' icon-size float-left text-primary"></i>
					<span class="number-font">' . $__templater->filter($__vars['xentr_forum_statistics']['threads'], array(array('number', array()),), true) . '</span>
				</h2>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-3">
		<div class="card">
			<div class="card-body">
				<div class="xentr_stats_title">' . 'Сообщения' . '</div>
				<h2 class="stats-content">
					<i class="' . $__templater->func('property', array('xentr_messages_icon', ), true) . ' icon-size float-left text-warning"></i>
					<span class="number-font">' . $__templater->filter($__vars['xentr_forum_statistics']['messages'], array(array('number', array()),), true) . '</span>
				</h2>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-3">
		<div class="card">
			<div class="card-body">
				<div class="xentr_stats_title">' . 'Пользователи' . '</div>
				<h2 class="stats-content">
					<i class="' . $__templater->func('property', array('xentr_members_icon', ), true) . ' icon-size float-left text-success"></i>
					<span class="number-font">' . $__templater->filter($__vars['xentr_forum_statistics']['users'], array(array('number', array()),), true) . '</span>
				</h2>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-3">
		<div class="card">
			<div class="card-body">
				<div class="xentr_stats_title">' . 'Новый пользователь' . '</div>
				<h2 class="stats-content">
					<i class="' . $__templater->func('property', array('xentr_latest_member_icon', ), true) . ' icon-size float-left text-danger"></i>
					<span class="number-font">' . $__templater->func('username_link', array($__vars['xentr_forum_statistics']['latestUser'], false, array(
	))) . '</span>
				</h2>
			</div>
		</div>
	</div>
</div>';
	return $__finalCompiled;
}
);