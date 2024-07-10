<?php
// FROM HASH: 6379dd7e902a7e381029c98d3f4db52d
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__compilerTemp1 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canViewBookmarks', array())) {
		$__compilerTemp1 .= '
					<a class="blockLink ' . (($__vars['pageSelected'] == 'bookmarks') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/bookmarks', ), true) . '">
						' . 'Закладки' . '
					</a>
				';
	}
	$__compilerTemp2 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canEditSignature', array())) {
		$__compilerTemp2 .= '
					<a class="blockLink ' . (($__vars['pageSelected'] == 'signature') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/signature', ), true) . '">
						' . 'Подпись' . '
					</a>
				';
	}
	$__compilerTemp3 = '';
	if ($__vars['xf']['app']['userUpgradeCount']) {
		$__compilerTemp3 .= '
					<a class="blockLink ' . (($__vars['pageSelected'] == 'upgrades') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/upgrades', ), true) . '">
						' . 'Платные повышения' . '
					</a>
				';
	}
	$__compilerTemp4 = '';
	if ($__vars['xf']['app']['connectedAccountCount']) {
		$__compilerTemp4 .= '
					<a class="blockLink ' . (($__vars['pageSelected'] == 'connected_account') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/connected-accounts', ), true) . '">
						' . 'Связанные аккаунты' . '
					</a>
				';
	}
	$__templater->modifySideNavHtml(null, '
	<div class="block">
		<div class="block-container">
			<h3 class="block-header">' . 'Ваш аккаунт' . '</h3>
			<div class="block-body">
				' . '
				<a class="blockLink" href="' . $__templater->func('link', array('members', $__vars['xf']['visitor'], ), true) . '">' . 'Ваш профиль' . '</a>
				<a class="blockLink ' . (($__vars['pageSelected'] == 'alerts') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/alerts', ), true) . '">
					' . 'Оповещения' . '
				</a>
				<a class="blockLink ' . (($__vars['pageSelected'] == 'reactions') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/reactions', ), true) . '">
					' . 'Полученные реакции' . '
				</a>
				' . $__compilerTemp1 . '
				' . '
<a class="blockLink" href="' . $__templater->func('link', array('mythreads', null, array('user_id' => $__vars['xf']['visitor']['user_id'], ), ), true) . '">
	' . ' My Threads' . '
</a>
			</div>

			<h3 class="block-minorHeader">' . 'Настройки' . '</h3>
			<div class="block-body">
				' . '
				<a class="blockLink ' . (($__vars['pageSelected'] == 'account_details') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/account-details', ), true) . '">
					' . 'Информация' . '
				</a>
				<a class="blockLink ' . (($__vars['pageSelected'] == 'security') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/security', ), true) . '">
					' . 'Безопасность' . '
				</a>
				<a class="blockLink ' . (($__vars['pageSelected'] == 'privacy') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/privacy', ), true) . '">
					' . 'Конфиденциальность' . '
				</a>
				<a class="blockLink ' . (($__vars['pageSelected'] == 'preferences') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/preferences', ), true) . '">
					' . 'Настройки' . '
				</a>
				' . $__compilerTemp2 . '
				' . $__compilerTemp3 . '
				' . $__compilerTemp4 . '
				<a class="blockLink ' . (($__vars['pageSelected'] == 'following') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/following', ), true) . '">
					' . 'Подписки' . '
				</a>
				<a class="blockLink ' . (($__vars['pageSelected'] == 'ignored') ? 'is-selected' : '') . '" href="' . $__templater->func('link', array('account/ignored', ), true) . '">
					' . 'Игнорирование' . '
				</a>
				<a href="' . $__templater->func('link', array('logout', null, array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '" class="blockLink">' . 'Выход' . '</a>
				' . '
			</div>
		</div>
	</div>
', 'replace');
	$__finalCompiled .= '
';
	$__templater->setPageParam('sideNavTitle', 'Ваш аккаунт');
	$__finalCompiled .= '

';
	$__templater->breadcrumb($__templater->preEscaped('Ваш аккаунт'), $__templater->func('link', array('account', ), false), array(
	));
	$__finalCompiled .= '

' . $__templater->filter($__vars['innerContent'], array(array('raw', array()),), true);
	return $__finalCompiled;
}
);