<?php
// FROM HASH: 3e6e487c9a05bb3da77cb50897bab8ea
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Недавнее содержимое от ' . $__templater->escape($__vars['user']['username']) . '');
	$__finalCompiled .= '

';
	$__templater->setPageParam('head.' . 'metaNoindex', $__templater->preEscaped('<meta name="robots" content="noindex" />'));
	$__finalCompiled .= '

';
	$__templater->breadcrumb($__templater->preEscaped($__templater->escape($__vars['user']['username'])), $__templater->func('link', array('members', $__vars['user'], ), false), array(
	));
	$__finalCompiled .= '

';
	$__templater->includeCss('search_results.less');
	$__finalCompiled .= '

';
	if ($__vars['resultCount']) {
		$__finalCompiled .= '
	<div class="block">
		<div class="block-container">
			<ol class="block-body">
				';
		if ($__templater->isTraversable($__vars['results'])) {
			foreach ($__vars['results'] AS $__vars['result']) {
				$__finalCompiled .= '
					' . $__templater->filter($__templater->method($__vars['result'], 'render', array()), array(array('raw', array()),), true) . '
				';
			}
		}
		$__finalCompiled .= '
			</ol>
			';
		if ($__templater->method($__vars['xf']['visitor'], 'canSearch', array())) {
			$__finalCompiled .= '
				<div class="block-footer">
					<span class="block-footer-controls">' . $__templater->button('
						' . 'Посмотреть ещё' . '
					', array(
				'href' => $__templater->func('link', array('search/member', null, array('user_id' => $__vars['user']['user_id'], ), ), false),
				'rel' => 'nofollow',
			), '', array(
			)) . '</span>
				</div>
			';
		}
		$__finalCompiled .= '
		</div>

		<div class="block-outer block-outer--after">
			<div class="block-outer-opposite">
				' . $__templater->func('show_ignored', array(array(
		))) . '
			</div>
		</div>
	</div>
';
	} else {
		$__finalCompiled .= '
	<div class="blockMessage">' . '' . $__templater->escape($__vars['user']['username']) . ' пока не разместил(а) ни одной публикации.' . '</div>
';
	}
	return $__finalCompiled;
}
);