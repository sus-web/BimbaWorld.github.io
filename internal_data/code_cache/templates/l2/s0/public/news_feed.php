<?php
// FROM HASH: 56189719ea47e5495dd9ec55f2a2da88
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Ваша новостная лента');
	$__finalCompiled .= '

';
	$__compilerTemp1 = $__vars;
	$__compilerTemp1['pageSelected'] = 'news_feed';
	$__templater->wrapTemplate('whats_new_wrapper', $__compilerTemp1);
	$__finalCompiled .= '

<div class="block">
	<div class="block-container">
		';
	if (!$__templater->test($__vars['newsFeedItems'], 'empty', array())) {
		$__finalCompiled .= '
			<ul class="block-body js-newsFeedTarget">
				';
		if ($__templater->isTraversable($__vars['newsFeedItems'])) {
			foreach ($__vars['newsFeedItems'] AS $__vars['item']) {
				$__finalCompiled .= '
					' . $__templater->callMacro('news_feed_macros', 'feed_row', array(
					'item' => $__vars['item'],
				), $__vars) . '
				';
			}
		}
		$__finalCompiled .= '
			</ul>
			<div class="block-footer js-newsFeedLoadMore">
				<span class="block-footer-controls">' . $__templater->button('
					' . 'Показать предыдущие элементы' . '
				', array(
			'href' => $__templater->func('link', array('whats-new/news-feed', null, array('before_id' => $__vars['oldestItemId'], ), ), false),
			'rel' => 'nofollow',
			'data-xf-click' => 'inserter',
			'data-append' => '.js-newsFeedTarget',
			'data-replace' => '.js-newsFeedLoadMore',
		), '', array(
		)) . '</span>
			</div>
		';
	} else if ($__vars['beforeId']) {
		$__finalCompiled .= '
			<div class="block-body js-newsFeedTarget">
				<div class="block-row block-row--separated">' . 'Больше нет элементов для показа.' . '</div>
			</div>
		';
	} else {
		$__finalCompiled .= '
			<div class="block-body js-newsFeedTarget">
				<div class="block-row">
					' . 'Сейчас Ваша новостная лента пуста.' . '
					<a href="' . $__templater->func('link', array('account/following', ), true) . '">' . 'Для её наполнения подпишитесь на кого-нибудь из пользователей.' . '</a>
				</div>
			</div>
		';
	}
	$__finalCompiled .= '
	</div>
</div>';
	return $__finalCompiled;
}
);