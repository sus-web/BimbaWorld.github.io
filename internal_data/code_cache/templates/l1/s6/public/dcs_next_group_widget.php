<?php
// FROM HASH: 46a14876ce6fa43ca5729657a52a5a94
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->inlineCss('

.counterIcon {
    margin-right: 5px;
    width: 24px;
    height: 24px;
    background-size: 24px 24px;
    vertical-align: middle;
    display: inline-block;
}
.likeCounterIcon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' width=\'24\' height=\'24\' stroke=\'rgb(140,140,140)\' stroke-width=\'2\' fill=\'none\' stroke-linecap=\'round\' stroke-linejoin=\'round\' class=\'css-i6dzq1\'%3E%3Cpath d=\'M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z\'%3E%3C/path%3E%3C/svg%3E");
}
	
.postCounterIcon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' width=\'24\' height=\'24\' stroke=\'rgb(140,140,140)\' stroke-width=\'2\' fill=\'none\' stroke-linecap=\'round\' stroke-linejoin=\'round\' class=\'css-i6dzq1\'%3E%3Cpath d=\'M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\'%3E%3C/path%3E%3C/svg%3E");
}

.nextGroup {
	margin-top: 20px;
	margin-left: 10px;
	}

.accountUpgradesButton {
	margin-top: 20px
	margin-bottom: 10px
	}
	
');
	$__finalCompiled .= '

';
	$__vars['like_icon'] = $__templater->preEscaped('<span class="counterIcon likeCounterIcon"></span>');
	$__finalCompiled .= '
';
	$__vars['messages_icon'] = $__templater->preEscaped('<span class="counterIcon postCounterIcon"></span>');
	$__finalCompiled .= '

';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
<div class="block" ' . $__templater->func('widget_data', array($__vars['widget'], ), true) . '>
        <div class="block-container">
            <h3 class="block-minorHeader">
				<div class="contentRow">
					<div class="contentRow-figure">
						' . $__templater->func('avatar', array($__vars['user'], 'xs', false, array(
		))) . '
					</div>
					<div class=\'contentRow-main\'>
						' . $__templater->func('username_link', array($__vars['user'], true, array(
		))) . '
						<div class="contentRow-minor">
							' . $__templater->func('user_title', array($__vars['user'], false, array(
		))) . '
						</div>
					</div>
				</div>
            </h3>
			<div class="userStats" style="display: flex; margin-left: 5px; margin-top: 2px;">
				<div class="likes" style="margin-left: 10px; margin-right: 60px;" title="Ваше кол-во реакций" data-xf-init=\'tooltip\'>
					' . $__templater->escape($__vars['like_icon']) . '
					<span style="font-weight: bold;">' . $__templater->filter($__vars['user']['reaction_score'], array(array('number', array()),), true) . '</span>
				</div>
				<div class="messages" title="Ваше кол-во сообщений" data-xf-init=\'tooltip\'>
					' . $__templater->escape($__vars['messages_icon']) . '
					<span style="font-weight: bold;">' . $__templater->filter($__vars['user']['message_count'], array(array('number', array()),), true) . '</span>
				</div>
			</div>
			';
		if ((!$__vars['next']) == 0) {
			$__finalCompiled .= '
			<div style="margin-left: 10px; margin-top: 10px;">
				' . $__templater->escape($__vars['phrase']) . '
			</div>
			<div class="nextGroup">
				Следующая группа: <br> <strong>' . $__templater->escape($__vars['next_title']['title']) . '</strong>
			</div>
			';
		}
		$__finalCompiled .= '
			<div style="text-align: center; margin-top: 10px; margin-bottom: 10px;">
				' . $__templater->button('Платное повышения прав', array(
			'href' => $__templater->func('link', array('account/upgrades', ), false),
			'class' => 'accountUpgradesButton',
		), '', array(
		)) . '
			</div>
        </div>
</div>
';
	}
	return $__finalCompiled;
}
);