<?php
// FROM HASH: 509c7a6775496e3ceb40a9029dfd5f05
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['xf']['visitor']['user_id'] AND (($__templater->func('property', array('uix_visitorTabsMobile', ), false) == 'canvas'))) {
		$__finalCompiled .= '
	<ul class="sidePanel__tabs">
		<li>
			<a data-attr="navigation" class="sidePanel__tab sidePanel__tab--active js-visitorTab">' . $__templater->fontAwesome('fa-bars', array(
		)) . '</a>
		</li>

		';
		if ($__vars['xf']['visitor']['user_id'] AND (($__templater->func('property', array('uix_visitorTabsMobile', ), false) == 'canvas'))) {
			$__finalCompiled .= '

		<li>
			<a data-attr="account" data-xf-click="toggle" data-target=".js-visitorTabPanel .uix_canvasPanelBody" class="sidePanel__tab js-visitorTab">' . $__templater->fontAwesome('fa-user', array(
			)) . '</a>
		</li>

		<li>
			<a data-attr="inbox" data-xf-click="toggle" data-target=".js-convoTabPanel .uix_canvasPanelBody" data-badge="' . $__templater->filter($__vars['xf']['visitor']['conversations_unread'], array(array('number', array()),), true) . '" class="sidePanel__tab js-convoTab js-badge--conversations badgeContainer' . ($__vars['xf']['visitor']['conversations_unread'] ? ' badgeContainer--highlighted' : '') . '">
				' . $__templater->fontAwesome('fa-inbox', array(
			)) . '
			</a>
		</li>

		<li>
			<a data-attr="alerts" data-xf-click="toggle" data-target=".js-alertTabPanel .uix_canvasPanelBody" data-badge="' . $__templater->filter($__vars['xf']['visitor']['alerts_unread'], array(array('number', array()),), true) . '" class="sidePanel__tab js-alertTab js-badge--alerts badgeContainer' . ($__vars['xf']['visitor']['alerts_unread'] ? ' badgeContainer--highlighted' : '') . '">
				' . $__templater->fontAwesome('fa-bell', array(
			)) . '
			</a>
		</li>
		';
		}
		$__finalCompiled .= '
	</ul>
';
	}
	return $__finalCompiled;
}
);