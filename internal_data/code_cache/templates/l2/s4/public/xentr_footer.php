<?php
// FROM HASH: b9e80cd4574751370cf331fbd1882c7e
return array(
'macros' => array('footerWidgets' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'block' => $__vars['block'],
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__vars['blockId'] = $__templater->func('property', array('xtr_extra_footer_column' . $__vars['block'], ), false);
	$__finalCompiled .= '
		';
	if ($__vars['blockId'] == 'custom') {
		$__finalCompiled .= '
				<h3 class="block-minorHeader"><i class="' . $__templater->func('property', array('xtr_extra_footer_column_icon' . $__vars['block'], ), true) . '"></i>' . $__templater->func('property', array('xtr_extra_footer_column_title' . $__vars['block'], ), true) . '</h3>
				<div class="block-body block-row">
					' . $__templater->func('property', array('xtr_extra_footer_column_content' . $__vars['block'], ), true) . '
				</div>
		';
	} else if ($__vars['blockId'] == 'socialicons') {
		$__finalCompiled .= '
			' . $__templater->includeTemplate('xentr_social_icons', $__vars) . '	
			';
	} else if ($__vars['blockId'] == 'whatsNewLinks') {
		$__finalCompiled .= '
				' . $__templater->callMacro(null, 'whatsNewLinks', array(), $__vars) . '
			';
	} else if ($__vars['blockId'] == 'NewPost') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('forum_overview_new_posts', array(), array()) . '
			';
	} else if ($__vars['blockId'] == 'ForumStatistics') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('XF\\Widget\\ForumStatistics', array(), array()) . '
			';
	} else if ($__vars['blockId'] == 'OnlineStatistics') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('XF\\Widget\\OnlineStatistics', array(), array()) . '
			';
	} else if ($__vars['blockId'] == 'NewProfilePost') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('forum_overview_new_profile_posts', array(), array()) . '
			';
	} else if ($__vars['blockId'] == 'NewestMembers') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('member_wrapper_newest_members', array(), array()) . '
			';
	} else if ($__vars['blockId'] == 'ShareThisPage') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('forum_overview_share_page', array(), array()) . '
			';
	} else if ($__vars['blockId'] == 'MemberOnline') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('forum_overview_members_online', array(), array()) . '
		';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'whatsNewLinks' => array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<h3 class="block-minorHeader"><i class="' . $__templater->func('property', array('xtr_extra_footer_column_icon' . $__vars['block'], ), true) . '"></i><i class="fas fa-bolt"></i> ' . 'Что нового?' . '</h3>
	<div class="block-body block-row">
		' . '
		<div class="blockLink"><i class="fas fa-caret-right"></i> <a class="' . $__templater->escape($__vars['baseClass']) . ' ' . (($__vars['pageSelected'] == 'new_thread') ? $__templater->escape($__vars['selectedClass']) : '') . '" href="' . $__templater->func('link', array('whats-new/posts', ), true) . '" rel="nofollow">' . 'Новые сообщения' . '</a></div>
		' . '
		';
	if ($__templater->method($__vars['xf']['visitor'], 'canViewProfilePosts', array())) {
		$__finalCompiled .= '
			<div class="blockLink"><i class="fas fa-caret-right"></i> <a class="' . $__templater->escape($__vars['baseClass']) . ' ' . (($__vars['pageSelected'] == 'new_profile_post') ? $__templater->escape($__vars['selectedClass']) : '') . '" href="' . $__templater->func('link', array('whats-new/profile-posts', ), true) . '" rel="nofollow">' . 'Новые сообщения профилей' . '</a></div>
		';
	}
	$__finalCompiled .= '
			' . '
		';
	if ($__vars['xf']['options']['enableNewsFeed']) {
		$__finalCompiled .= '
			';
		if ($__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
				<div class="blockLink"><i class="fas fa-caret-right"></i> <a class="' . $__templater->escape($__vars['baseClass']) . ' ' . (($__vars['pageSelected'] == 'news_feed') ? $__templater->escape($__vars['selectedClass']) : '') . '" href="' . $__templater->func('link', array('whats-new/news-feed', ), true) . '" rel="nofollow">' . 'Ваша новостная лента' . '</a></div>
			';
		}
		$__finalCompiled .= '

			<div class="blockLink"><i class="fas fa-caret-right"></i> <a class="' . $__templater->escape($__vars['baseClass']) . ' ' . (($__vars['pageSelected'] == 'latest_activity') ? $__templater->escape($__vars['selectedClass']) : '') . '" href="' . $__templater->func('link', array('whats-new/latest-activity', ), true) . '" rel="nofollow">' . 'Последняя активность' . '</a></div>
		';
	}
	$__finalCompiled .= '
	</div>		
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('xentr_footer.less');
	$__finalCompiled .= '

<div class="xtr-extra-footer">
	<div class="p-footer-inner">
		<div class="xtr-extra-footer-row">
			';
	if ($__templater->func('property', array('xtr_enable_extra_footer_column1', ), false)) {
		$__finalCompiled .= '
				<div class="block-grid">
					';
		if ($__vars['blockId'] == 'custom') {
			$__finalCompiled .= '
						<h3 class="block-minorHeader"><i class="' . $__templater->func('property', array('xtr_extra_footer_column_icon1', ), true) . '"></i> ' . $__templater->func('property', array('xtr_extra_footer_column_title1', ), true) . '</h3>
						<ul class="block-body">
							' . $__templater->func('property', array('xtr_extra_footer_column1_content', ), true) . '
						</ul>
					';
		} else {
			$__finalCompiled .= '
						' . $__templater->callMacro(null, 'footerWidgets', array(
				'block' => '1',
			), $__vars) . '
					';
		}
		$__finalCompiled .= '
				</div>
			';
	}
	$__finalCompiled .= '

			';
	if ($__templater->func('property', array('xtr_enable_extra_footer_column2', ), false)) {
		$__finalCompiled .= '
				<div class="block-grid">
					';
		if ($__vars['blockId'] == 'custom') {
			$__finalCompiled .= '
						<h3 class="block-minorHeader"><i class="' . $__templater->func('property', array('xtr_extra_footer_column_icon2', ), true) . '"></i> ' . $__templater->func('property', array('xtr_extra_footer_column_title2', ), true) . '</h3>
						<div class="block-body block-row">
							';
			if ($__vars['xf']['options']['homePageUrl']) {
				$__finalCompiled .= '
								<div class="blockLink"><a class="' . $__templater->escape($__vars['baseClass']) . '" href="' . $__templater->escape($__vars['xf']['options']['homePageUrl']) . '">' . 'Главная' . '</a></div>
							';
			}
			$__finalCompiled .= '
							<div class="blockLink"><a class="' . $__templater->escape($__vars['baseClass']) . '" href="' . $__templater->func('link', array('forums', ), true) . '">' . 'Форумы' . '</a></div>
							<div class="blockLink"><a class="' . $__templater->escape($__vars['baseClass']) . '" href="' . $__templater->func('link', array('whats-new/posts', ), true) . '">' . 'Новые сообщения' . '</a></div>
						</div>
					';
		} else {
			$__finalCompiled .= '
						' . $__templater->callMacro(null, 'footerWidgets', array(
				'block' => '2',
			), $__vars) . '
					';
		}
		$__finalCompiled .= '
				</div>
			';
	}
	$__finalCompiled .= '

			';
	if ($__templater->func('property', array('xtr_enable_extra_footer_column3', ), false)) {
		$__finalCompiled .= '
				<div class="block-grid">
					';
		if ($__vars['blockId'] == 'custom') {
			$__finalCompiled .= '
						<h3 class="block-minorHeader"><i class="' . $__templater->func('property', array('xtr_extra_footer_column_icon3', ), true) . '"></i> ' . $__templater->func('property', array('xtr_extra_footer_column_title3', ), true) . '</h3>
					';
		} else {
			$__finalCompiled .= '
						' . $__templater->callMacro(null, 'footerWidgets', array(
				'block' => '3',
			), $__vars) . '
					';
		}
		$__finalCompiled .= '
				</div>
			';
	}
	$__finalCompiled .= '

			';
	if ($__templater->func('property', array('xtr_enable_extra_footer_column4', ), false)) {
		$__finalCompiled .= '
				<div class="block-grid">
					';
		if ($__vars['blockId'] == 'custom') {
			$__finalCompiled .= '
						<h3 class="block-minorHeader"><i class="' . $__templater->func('property', array('xtr_extra_footer_column_icon4', ), true) . '"></i> ' . $__templater->func('property', array('xtr_extra_footer_column_title4', ), true) . '</h3>
					';
		} else {
			$__finalCompiled .= '
						' . $__templater->callMacro(null, 'footerWidgets', array(
				'block' => '4',
			), $__vars) . '
					';
		}
		$__finalCompiled .= '
				</div>
			';
	}
	$__finalCompiled .= '
		</div>
	</div>
</div>

' . '


';
	return $__finalCompiled;
}
);