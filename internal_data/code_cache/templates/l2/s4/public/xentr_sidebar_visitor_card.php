<?php
// FROM HASH: c907518a3fa39fe5902030e2c0b7de71
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('xentr_sidebar_visitor_card.less');
	$__finalCompiled .= '

';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
<div class="block">
	<div class="block-container">
		<div class="visitor-card">
			<div class="visitor-card-main">
				<div class="visitor-card-content">
					<div class="visitor-card-img">
						' . $__templater->func('avatar', array($__vars['xf']['visitor'], 's', false, array(
			'href' => '',
			'notooltip' => 'true',
			'update' => $__templater->func('link', array('account/avatar', $__vars['xf']['visitor'], ), false),
		))) . '
					</div>
					<h3 class="contentRow-header">' . $__templater->func('username_link', array($__vars['xf']['visitor'], true, array(
			'notooltip' => 'true',
		))) . '</h3>
					<div class="contentRow-lesser">
						' . $__templater->func('user_title', array($__vars['xf']['visitor'], false, array(
		))) . '
					</div>
				</div>
			</div>
			<div class="visitor-card-icons">
				';
		if ($__vars['xf']['options']['xentr_reaction_score']) {
			$__finalCompiled .= '
					<div class="reaction-stats">
						<div class="reaction-stat">
							<i class="' . $__templater->escape($__vars['xf']['options']['xentr_reaction_score_icon']) . '" data-xf-init="tooltip" title="' . 'Реакции' . '"></i>
							<div class="reaction-stat-count">
								<a href="' . $__templater->func('link', array('account/reactions', ), true) . '" class="fauxBlockLink-linkRow u-concealed">
									' . $__templater->filter($__vars['xf']['visitor']['reaction_score'], array(array('number', array()),), true) . '
								</a>
							</div>
						</div>
					</div>
				';
		}
		$__finalCompiled .= '
				
				';
		if ($__vars['xf']['options']['xentr_trophy_points']) {
			$__finalCompiled .= '		
					<div class="reaction-stats">
						<div class="reaction-stat">
							<i class="' . $__templater->escape($__vars['xf']['options']['xentr_trophy_points_icon']) . '" data-xf-init="tooltip" title="' . 'Баллы' . '"></i>
							<div class="reaction-stat-count">
								<a href="' . $__templater->func('link', array('members/trophies', $__vars['xf']['visitor'], ), true) . '" data-xf-click="overlay" class="fauxBlockLink-linkRow u-concealed">
									' . $__templater->filter($__vars['xf']['visitor']['trophy_points'], array(array('number', array()),), true) . '
								</a>
							</div>
						</div>
					</div>
				';
		}
		$__finalCompiled .= '
				
				';
		if ($__vars['xf']['options']['xentr_messages']) {
			$__finalCompiled .= '
					<div class="reaction-stats">
						<div class="reaction-stat">
							<i class="' . $__templater->escape($__vars['xf']['options']['xentr_messages_icon']) . '" data-xf-init="tooltip" title="' . 'Сообщения' . '"></i>
							<div class="reaction-stat-count">
								<a href="' . $__templater->func('link', array('search/member', null, array('user_id' => $__vars['xf']['visitor']['user_id'], ), ), true) . '" class="fauxBlockLink-linkRow u-concealed">
									' . $__templater->filter($__vars['xf']['visitor']['message_count'], array(array('number', array()),), true) . '
								</a>
							</div>
						</div>
					</div>
				';
		}
		$__finalCompiled .= '
								
				';
		if ($__vars['xf']['options']['xentr_question_solution'] AND $__vars['xf']['visitor']['question_solution_count']) {
			$__finalCompiled .= '
					<div class="reaction-stats">
						<div class="reaction-stat">
							<i class="' . $__templater->escape($__vars['xf']['options']['xentr_question_solution_icon']) . '" data-xf-init="tooltip" title="' . 'Решения' . '"></i>
							<div class="reaction-stat-count">
								' . $__templater->filter($__vars['xf']['visitor']['question_solution_count'], array(array('number', array()),), true) . '
							</div>
						</div>
					</div>
				';
		}
		$__finalCompiled .= '
				
				';
		if ($__templater->func('is_addon_active', array('DBTech/Credits', ), false)) {
			$__finalCompiled .= '
					<div class="reaction-stats">
						<div class="reaction-stat">
							<i class="' . $__templater->escape($__vars['xf']['options']['xentr_dbtech_credits_icon']) . '" data-xf-init="tooltip" title="' . 'dbtech_credits_credits' . '"></i>
							<div class="reaction-stat-count">
								' . $__templater->includeTemplate('dbtech_credits_postbit', $__vars) . '
							</div>
						</div>
					</div>
				';
		}
		$__finalCompiled .= '
			</div>
		</div>
		';
		if ($__vars['xf']['options']['xentr_user_reaction_enable']) {
			$__finalCompiled .= '	
			' . $__templater->includeTemplate('xentr_sidebar_user_reaction', $__vars) . '
		';
		}
		$__finalCompiled .= '		
	</div>
</div>
';
	}
	return $__finalCompiled;
}
);