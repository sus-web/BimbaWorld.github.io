<?php
// FROM HASH: 05a4f07c972a5f57f9251d64edefe66e
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Подписки');
	$__finalCompiled .= '

';
	$__templater->wrapTemplate('account_wrapper', $__vars);
	$__finalCompiled .= '

<div class="block">
	<div class="block-container">
		<ol class="block-body">
			';
	$__compilerTemp1 = true;
	if ($__templater->isTraversable($__vars['following'])) {
		foreach ($__vars['following'] AS $__vars['user']) {
			$__compilerTemp1 = false;
			$__finalCompiled .= '
				<li class="block-row block-row--separated">
					';
			$__compilerTemp2 = '';
			if ($__templater->method($__vars['xf']['visitor'], 'canFollowUser', array($__vars['user'], ))) {
				$__compilerTemp2 .= '
							' . $__templater->button('
								' . ($__templater->method($__vars['xf']['visitor'], 'isFollowing', array($__vars['user'], )) ? 'Отписаться' : 'Подписаться') . '
							', array(
					'href' => $__templater->func('link', array('members/follow', $__vars['user'], ), false),
					'class' => 'button--link',
					'data-xf-click' => 'switch',
					'data-sk-follow' => 'Подписаться',
					'data-sk-unfollow' => 'Отписаться',
				), '', array(
				)) . '
						';
			}
			$__vars['switchLink'] = $__templater->preEscaped('
						' . $__compilerTemp2 . '
					');
			$__finalCompiled .= '
					' . $__templater->callMacro('member_list_macros', 'item', array(
				'user' => $__vars['user'],
				'extraData' => $__vars['switchLink'],
			), $__vars) . '
				</li>
			';
		}
	}
	if ($__compilerTemp1) {
		$__finalCompiled .= '
				<div class="block-row">' . 'Вы пока не подписаны ни на одного пользователя.' . '</div>
			';
	}
	$__finalCompiled .= '
		</ol>
	</div>
</div>';
	return $__finalCompiled;
}
);