<?php
// FROM HASH: 6edf9a51121031acf2f56f3c62359f8f
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// ######################################### NAVIGATION POSITION #################################

// XenTR Style Changer Addons
';
	if (($__templater->func('is_addon_active', array('XENTR\\StyleChanger', ), false) AND ($__templater->func('property', array('xentr_navigation_position', ), false) == 'default')) OR ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'header')) {
		$__finalCompiled .= '
.p-header .p-navgroup-link.style-changer {
    display: block;
}
.p-navSticky .p-navgroup-link.style-changer {
    display: none;
}
';
	}
	$__finalCompiled .= '

';
	if (($__templater->func('is_addon_active', array('XENTR\\StyleChanger', ), false) AND ($__templater->func('property', array('xentr_navigation_position', ), false) == 'default')) OR ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'staffBar')) {
		$__finalCompiled .= '
.p-staffBar .p-navgroup-link.style-changer {
    display: block;
}
.p-navSticky .p-navgroup-link.style-changer {
    display: none;
}
';
	}
	$__finalCompiled .= '

';
	if (($__templater->func('is_addon_active', array('XENTR\\StyleChanger', ), false) AND ($__templater->func('property', array('xentr_navigation_position', ), false) == 'default')) OR ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'navigation')) {
		$__finalCompiled .= '
.p-navSticky .p-navgroup.p-discovery .p-navgroup-link.style-changer {
    display: block;
}
';
	}
	$__finalCompiled .= '

// Default Navigation
';
	if ($__templater->func('property', array('xentr_navigation_position', ), false) == 'default') {
		$__finalCompiled .= '

';
	}
	$__finalCompiled .= '

// Navigation Next Logo
';
	if ($__templater->func('property', array('xentr_navigation_position', ), false) == 'nextLogo') {
		$__finalCompiled .= '
.p-header {
    display: none;
}
.p-nav-smallLogo {
    display: block;
	max-width: none;
	margin-right: @xf-publicNavPaddingV;
}
.p-navgroup.p-discovery {
    margin-left: 0;
}

// Top section action
.xentr-top-section {
	.p-title-pageAction {
		display: none;
	}
	.u-muted {
		color: inherit;
	}
	.contentRow {
		display: inline-flex;
	}
	.p-description {
		.tagList {
			display: none;
		}
		li {
			&:before {
				display: none;
			}
		}
	}
}

@media (max-width: @xf-responsiveWide)
{
	.xentr-top-section .contentRow {
		flex-direction: column;
	}	
}
';
	}
	$__finalCompiled .= '

// Navigation Next Logo Visitor Menu Staff Bar
';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'nextLogo') AND ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'staffBar')) {
		$__finalCompiled .= '
.p-navgroup-link--logIn .p-navgroup-linkText, 
.p-navgroup-link--register .p-navgroup-linkText {
    display: inline-block;
}

.p-nav .p-navgroup-link.style-changer {
    display: none;
}

.p-nav .p-nav-opposite .p-navgroup-link--iconic.p-navgroup-link--search {
    display: none;
}

#XF .p-staffBar .p-navgroup-link.badgeContainer:after {
    top: 3px;
}

@media (min-width: @xf-responsiveWide)
{
	.p-nav .p-navgroup.p-account.p-navgroup--guest {
		display: none;
	}
}

@media (max-width: @xf-responsiveWide)
{
	.has-js {
		.p-nav-scroller {
			display: none;
		}
		.p-nav {
			.p-nav-menuTrigger {
				display: block;
				padding: 0 5px;
			}
			.p-nav-opposite {
				.p-account.p-navgroup--member {
					display: block;
				}
				.p-navgroup.p-discovery .search-box {
					display: none;
				}
				.p-navgroup-link--iconic.p-navgroup-link--search {
					display: block;
				}
			}
		}
		.p-staffBar-inner {
			display: block;
		}
		.p-staffBar {
			.p-nav-opposite {
				display: none;
			}
		}
	}
}

@media (min-width: @xf-responsiveWide)
{
	.has-js {
		.p-nav {
			.p-nav-inner {
				align-items: center;
			}
			.p-nav-opposite {
				.p-account.p-navgroup--member {
					display: none;
				}
				.p-navgroup-link--iconic.p-navgroup-link--search {
					display: none;
				}
			}
		}
	}	
}	

@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js {
		.p-nav-scroller {
			display: none;
		}
		.p-nav .p-nav-menuTrigger
		{
			display: block;
			padding: 0 5px;
		}
		
		.has-js .p-staffBar .p-nav-opposite {
			display: none;
		}
		.has-js .p-nav .p-nav-opposite .p-account.p-navgroup--member {
			display: block;
		}
	}
}

@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js .p-nav-opposite .p-navgroup-link {
		padding: @xf-publicNavPaddingV (@_navAccount-hPadding - 6px );
	}
}	
';
	}
	$__finalCompiled .= '

// Navigation Next Logo Visitor Menu Header
';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'nextLogo') AND ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'header')) {
		$__finalCompiled .= '
@media (min-width: @xf-publicNavCollapseWidth)
{
	.has-js {
		.p-nav {
			.p-nav-opposite {
				.p-navgroup.p-account.p-navgroup--member {
					display: block;
				}
				.search-box {
					display: none;
				}
				.p-navgroup-link--iconic.p-navgroup-link--search {
					display: block;
				}
			}
		}
	}
}

@media (max-width: @xf-responsiveWide)
{
	.has-js {
		.p-nav-scroller {
			display: none;
		}
		.p-nav .p-nav-menuTrigger
		{
			display: inline-block;
			padding: 0 5px;
		}
		.p-nav-opposite .p-navgroup-link {
			padding: @xf-publicNavPaddingV (@_navAccount-hPadding - 6px );
		}
		.p-nav-opposite .search-box {
			display: none;
		}
	}
}
';
	}
	$__finalCompiled .= '

// Navigation Next Logo Visitor Menu Navigation
';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'nextLogo') AND ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'navigation')) {
		$__finalCompiled .= '
.p-nav .p-nav-opposite .p-navgroup-link--iconic.p-navgroup-link--search {
    display: block;
}

@media (max-width: @xf-responsiveWide)
{
	.has-js {
		.p-staffBar {
			.p-navgroup-link--search {
				display: block;
			}
		}
		.p-nav-scroller {
			display: none;
		}
		.p-nav .p-nav-menuTrigger
		{
			display: inline-block;
			padding: 0 5px;
		}
		.search-box {
			display: none;
		}
	}
}

@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js {
		.p-nav {
			.p-nav-opposite {
				display: block;
			}
			.p-navgroup-link--iconic.p-navgroup-link--search {
				display: block;
			}
			.p-nav-opposite .p-navgroup-link {
				padding: @xf-publicNavPaddingV (@_navAccount-hPadding - 6px );
			}
		}
	}
}	
';
	}
	$__finalCompiled .= '

// Navigation Next Logo Visitor Menu Header
';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'default') AND ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'header')) {
		$__finalCompiled .= '
@media (min-width: @xf-publicNavCollapseWidth)
{
	// Header
	.p-header {
		.p-nav-opposite {
			margin-right: 0;
			.p-navgroup-link--search {
				display: none;
			}
		}
		.p-navgroup {
			background: transparent;
		}
		.p-navgroup-link.badgeContainer {
			opacity: 1;
			&:after {
    			top: (@xf-publicNavPaddingV - 6px);
			}
		}	
		.p-navgroup-link.is-menuOpen {
			color: @xf-paletteNeutral1;
		}
		.p-navgroup-link {
			padding: @xf-publicNavPaddingV (@xf-publicNavPaddingV - 5px);
		}
	}	
	// Navigation
	.p-nav {
		.p-nav-opposite {
			.p-navgroup.p-account.p-navgroup--member {
				display: none;
			}
			.p-navgroup-link--search {
				display: none;
			}
		}
		.p-nav-inner {
			align-items: center;
		}
		.p-navgroup--guest {
			display: none;
		}
	}
}

// Responsive Navigation Collapse Width
@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js
	{
		.search-box {
			display: none;
		}
		.p-nav-opposite .p-navgroup-link--search {
			display: block;
		}
		.p-nav-opposite .p-navgroup-link {
				padding: @xf-publicNavPaddingV (@_navAccount-hPadding - 6px );
		}
	}	
}

// Guest linkText
.p-header {
	.p-navgroup-linkText {
		display: inline-block;
	}
	.p-navgroup-link.p-navgroup-link--textual.p-navgroup-link--logIn,
	.p-navgroup-link.p-navgroup-link--textual.p-navgroup-link--register{
		&:before {
			color: inherit;
		}
	}
}
';
	}
	$__finalCompiled .= '

';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'default') AND ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'staffBar')) {
		$__finalCompiled .= '
.p-staffBar .p-navgroup-linkText {
    display: inline-block;
}

#XF .p-staffBar .p-navgroup-link.badgeContainer:after {
    top: 3px;
}

@media (min-width: @xf-publicNavCollapseWidth)
{
	.p-nav .p-navgroup.p-account.p-navgroup--guest {
		display: none;
	}
}	
';
	}
	$__finalCompiled .= '


// Notify animation effect

.badgeContainer.badgeContainer--highlighted:after {
    -webkit-animation: notify-pulse 1s infinite;
}

@-webkit-keyframes notify-pulse {
    0% {
        box-shadow: 0 0 0 0px rgba(255, 68, 68, 0.7);
    }

    100% {
        box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
    }
}

@keyframes notify-pulse {
    0% {
        box-shadow: 0 0 0 0px rgba(255, 68, 68, 0.7);
    }

    100% {
        box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
    }
}

// ######################################### VISITOR MENU #################################
// Visitor Menu Position Staffbar
';
	if ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'staffBar') {
		$__finalCompiled .= '
// Staff Bar Navgroup links
.p-staffBar-link {
    padding: (@xf-xentr_staff_bar_paddingV - 4px) 6px;
}

.p-staffBar .p-navgroup-link
{
	float: left;
	padding: @xf-xentr_staff_bar_paddingV @_navAccount-hPadding;
	font-size: @xf-fontSizeNormal;

	&:first-of-type
	{
		border-top-left-radius: 0;
		border-left: none;
	}

	&:last-of-type
	{
		border-top-right-radius: 0;
	}

	&.badgeContainer
	{
		opacity: 1;

		&:after
		{
			position: absolute;
			left: (@_navAccount-hPadding - 6px);
			top: (@xf-publicNavPaddingV - 2px);
			padding: 1px 3px;
			margin: 0;
			font-size: 10px;
			line-height: 11px;
		}
	}
}

// Navigation Search
@media (min-width: @xf-publicNavCollapseWidth)
{
	.p-staffBar .p-navgroup-link--search {
		display: none;
	}
}	

.p-nav {
	.nav-search {
		margin-left: @xf-elementSpacer;
		i {
			font-size: @xf-fontSizeLarger;
			position: relative;
			line-height: 0;
		}
		.p-navgroup-link {
			&:hover {
				background: transparent;
			}
		}
	}
}

@media (max-width: @xf-publicNavCollapseWidth)
{
	.p-staffBar-inner .hScroller-scroll {
		display: flex;
		justify-content: space-between;
	}
	
}	

@media (min-width: @xf-publicNavCollapseWidth)
{
	.p-staffBar-inner {
		display: flex;
		flex-flow: wrap;
		justify-content: space-between;
		align-items: center;
		padding: 0;
	}	
}

@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js {
		.p-staffBar {
			.p-nav-opposite {
				.p-navgroup {
					display: none;
				}
			}
		}
		.p-nav {
			.p-nav-menuTrigger {
				padding: 0 5px;
			}
			.search-box {
				display: none;
			}
		}
	}
}
';
	}
	$__finalCompiled .= '

// Visitor Menu Position Navigation
';
	if ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'navigation') {
		$__finalCompiled .= '
@media (min-width: @xf-publicNavCollapseWidth)
{
	.p-nav {
		.p-navgroup-link--iconic.p-navgroup-link--search {
			display: none;
		}
	}
	.p-navgroup {
		background: transparent;
	}
}	
';
	}
	$__finalCompiled .= '

// User Text
@media (max-width: @xf-responsiveWide)
{
	.has-js
	{
		.p-navgroup-user-linkText {
			display: none;
		}
	}	
}

// Visitor Menu Position Header

';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'default') AND ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'staffBar')) {
		$__finalCompiled .= '
.p-nav {
	.p-nav-inner {
		align-items: center;
	}
	.p-navgroup--member {
		display: none;
	}
	.p-navgroup-link--search {
		display: none;
	}
}

@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js {
		.p-nav-opposite {
			.p-navgroup {
				display: block;
			}
		}
		.p-nav {
			.p-navgroup-link--search {
				display: block;
			}
			.p-navgroup-link {
				padding: @xf-publicNavPaddingV (@_navAccount-hPadding - 6px );
			}
		}
	}
}

';
	}
	$__finalCompiled .= '

';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'default') AND ($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'navigation')) {
		$__finalCompiled .= '
@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js {
		.p-nav {
			.p-navgroup-link {
				padding: @xf-publicNavPaddingV (@_navAccount-hPadding - 6px );
			}
		}
	}
}
';
	}
	$__finalCompiled .= '

// ######################################### NAVIGATION STYLE #################################

';
	if ($__templater->func('property', array('xentr_bg_chooser', ), false)) {
		$__finalCompiled .= '
.p-navgroup {
    background: transparent;
}
';
	}
	$__finalCompiled .= '
';
	if ((((!$__templater->func('property', array('xentr_navigation_border_color', ), false))) == 'default') AND $__templater->func('property', array('xentr_bg_chooser', ), false)) {
		$__finalCompiled .= '
.p-navgroup-link {
    border-left: none;
}
';
	}
	$__finalCompiled .= '

// Navlist border
';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'nextLogo') AND $__templater->func('property', array('xentr_navigation_border_color', ), false)) {
		$__finalCompiled .= '
.p-nav {
	border-bottom: @xf-borderSize solid @xf-xentr_transparent_light_color;
}
.p-nav-list>li {
    border-left: @xf-borderSize solid @xf-xentr_transparent_light_color;
}

.p-nav-list>li:last-child {
    border-right: @xf-borderSize solid @xf-xentr_transparent_light_color;
}
.p-navgroup-link {
	border-left: @xf-borderSize solid @xf-xentr_transparent_light_color;
	&:first-of-type {
		border-radius: 0;
		border-left: @xf-borderSize solid @xf-xentr_transparent_light_color;
	}
	&:last-of-type {
		border-radius: 0;
	}
}
.p-navgroup.p-discovery {
	&:last-of-type {
		border-right: @xf-borderSize solid @xf-xentr_transparent_light_color;
	}
}
';
	}
	$__finalCompiled .= '

';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'default') AND $__templater->func('property', array('xentr_navigation_border_color', ), false)) {
		$__finalCompiled .= '
.p-nav {
    border-top: @xf-borderSize solid @xf-xentr_transparent_light_color;
}
.p-nav-list>li {
    border-left: @xf-borderSize solid @xf-xentr_transparent_light_color;
}

.p-nav-list>li:last-child {
    border-right: @xf-borderSize solid @xf-xentr_transparent_light_color;
}
.p-sectionLinks {
    border-top: @xf-borderSize solid @xf-xentr_transparent_light_color;
}
';
	}
	$__finalCompiled .= '

';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'default') AND (($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'navigation') AND $__templater->func('property', array('xentr_navigation_border_color', ), false))) {
		$__finalCompiled .= '
.p-navgroup-link {
	border-left: @xf-borderSize solid @xf-xentr_transparent_light_color;
	&:first-of-type {
		border-radius: 0;
		border-left: @xf-borderSize solid @xf-xentr_transparent_light_color;
	}
	&:last-of-type {
		border-radius: 0;
		border-right: @xf-borderSize solid @xf-xentr_transparent_light_color;
	}
}
.p-navgroup.p-discovery {
	&:last-of-type {
		border-right: @xf-borderSize solid @xf-xentr_transparent_light_color;
	}
}
';
	}
	$__finalCompiled .= '

';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'nextLogo') AND (($__templater->func('property', array('xentr_visitormenu_position', ), false) == 'navigation') AND $__templater->func('property', array('xentr_navigation_border_color', ), false))) {
		$__finalCompiled .= '
.p-navgroup.p-discovery {
	&:last-of-type {
		border-left: @xf-borderSize solid @xf-xentr_transparent_light_color;
	}
}
';
	}
	$__finalCompiled .= '

// ######################################### PARTICLES EFFECT #################################
';
	if ($__vars['xf']['options']['xtr_enable_canvas_effect'] == 'yes') {
		$__finalCompiled .= '
.p-header {
    position: relative;
	overflow: hidden;
}

.p-header-logo,
.p-nav-opposite {
    position: relative;
}

#particles-js {
    position: absolute;
    width: 100%;
    height: auto;
	opacity: 0.1;
}
';
	}
	$__finalCompiled .= '

// ######################################### FORUM TITLE #################################
';
	if ($__templater->func('property', array('xentr_forum_title_disable', ), false)) {
		$__finalCompiled .= '
body[data-template="forum_list"]
{
	.p-title-value
	{
		display: none;
	}
	.p-title-pageAction
	{
		margin-left: auto;
	}
}
';
	}
	$__finalCompiled .= '

// ######################################### MESSAGE USER INFO BLOCK #################################
';
	if ($__templater->func('property', array('xentr_messageUserInfoBlockPosition', ), false) == 'default') {
		$__finalCompiled .= '
@media (max-width: @xf-messageSingleColumnWidth)
{
	.block--messages {
		.message {
			&:not(.message--simple) {
				.message-cell {
					.collapseTrigger.collapseTrigger--block {
						&:before {
							float: right;
						}
					}
				}

				.message-cell.message-cell--user {
					.message-user {
						.xtr-message-container {
							display: flex;
							flex-grow: 1;
							flex-direction: column;
							min-width: 0;
							max-width: 100%;
						}

						.message-userDetails {
							margin-left: 0;
							flex: 1;
							min-width: 0;
							padding-left: @xf-messagePadding;
							width: 100%;
						}

						.message-name {
							text-align: left;
						}

						.message-userExtras {
							display: flex;
							flex-wrap: wrap;
							align-items: center;
							margin-top: (@xf-messagePadding - 10px);
							padding-left: @xf-messagePadding;

							dl {
								padding-right: (@xf-messagePadding - 5px);

								dt {
									margin-right: (@xf-messagePadding - 10px);
								}
							}
						}
					}
				}
			}
		}
	}
}

';
	}
	$__finalCompiled .= '

// First post Horizontal
';
	if ($__templater->func('property', array('xentr_messageUserInfoBlockPosition', ), false) == 'firstPostHorizontal') {
		$__finalCompiled .= '
@media (min-width: @xf-messageSingleColumnWidth) {
	.message-user-inner {
		display: flex;
	}	

	.message.is-first .message-user {
		position: relative;
		top: inherit;
	}	
	.message.is-first {

		.message-user-inner {
			flex-direction: column;
		}
		.message-user-inner .message-cell.message-cell--user,
		.message-user-inner .message-cell.message-cell--action {
			border-right: none;
			border-bottom: @xf-messageUserBlock--border-width solid @xf-messageUserBlock--border-color;
		}
		.message-user-inner .message-cell.message-cell--user {
			flex: 0 0 100%;

				#collapse-side {
				margin-right: 45px;
				display: inline-block;
				float: right;
			}
		}
		.message-cell.message-cell--user .message-user {
			display: flex;
			align-items: center;

			.message-userExtras {	
				display: flex;
				flex-wrap: wrap;
				align-items: center;
				padding-left: @xf-messagePadding;
				padding-top: 4px;
				dl.pairs dt:after {
					content: \'\';
				}
				.userflag-info {
					margin: 0;
				}
			}
			.message-userExtras .pairs {
				margin-right: @xf-messagePadding;
				line-height: 1.3;
			}

			.xtr-message-container {
				display: flex;
				flex-grow: 1;
				flex-direction: column;
				min-width: 0;
				max-width: 100%;
			}
			.message-userDetails {
				margin-left: 0;
				flex: 1;
				min-width: 0;
				padding-left: @xf-messagePadding;
				width: 100%;
			}
			.message-name {
				text-align: left;
			}
			.message-userTitle, .message-userBanner.userBanner {
				display: inline-block;
				text-align: left;
				margin: 0;
			}
			.message--deleted .message-userDetails {
				display: block;
			}

			.message-avatar {
				margin-bottom: 0;
			}

			@media (min-width: @xf-messageSingleColumnWidth) {
				.message-userArrow {
					position: absolute;
					bottom: (-@xf-messagePadding - 1);
					left: (@xf-messageUserBlockWidth / 3 - 6);
					top: initial;
					right: initial;

					.m-triangleUp(xf-default(@xf-messageUserBlock--border-color, transparent), @xf-messagePadding);

					&:after
					{
						position: absolute;
						top: 2px;
						right: -@xf-messagePadding + 1;
						content: "";

						.m-triangleUp(@xf-contentBg, @xf-messagePadding - 1px);
					}
				}
			}
		}
	}
}	
	
@media (max-width: @xf-messageSingleColumnWidth)
{
	.message.is-first:not(.message--forceColumns) .message-userArrow {
    		bottom: 0;
	}
	
	.message {
		&:not(.message--forceColumns) {
			.message-cell.message-cell--user {
				border-bottom: none;
			}
		}
	}
	
	.reputation-ranks {
		position: absolute;
		right: 10px;
		top: 0px;
		
		img {
			width: 100%;
			max-width: 100px;
		}	
	}
}

';
	}
	$__finalCompiled .= '


';
	if (($__templater->func('property', array('xentr_messageUserInfoBlockPosition', ), false) == 'horizontal') OR (($__templater->func('property', array('xentr_messageUserInfoBlockPosition', ), false) == 'firstPostHorizontal'))) {
		$__finalCompiled .= '
.message.is-first {
	position: relative;
	.message-cell.message-cell--vote {
		position: absolute;
		right: 0;
		top: 0px;
		padding: 0;
		line-height: 2;
	}
}
';
	}
	$__finalCompiled .= '

/* User Extras Collapse */

@media (min-width: @xf-messageSingleColumnWidth) {
.message-userExtras-body
{
    .m-listPlain();

    &.message-userExtras--collapsible
    {
        .has-no-js & { display: block; }

        .m-transitionFadeDown();
    }
}

	.message-cell
	{
		.collapseTrigger
		{
			text-align: center;

			&.is-active:before
			{
				transform: rotate(-180deg);
			}
			&:before
			{
				content: "\\f13a";
				color: @xf-linkColor;
				transition: ease-in transform .3s;
				width: auto;
			}
			&.collapseTrigger--block:before
			{
				float: none;
			}
		}
	}
}


@media (max-width: @xf-messageSingleColumnWidth) {
// Collapse Trigger button
	.message .collapseTrigger:not(.button).collapseTrigger--block {
    	display: none;
	}
}	
	
	
@media (max-width: @xf-responsiveNarrow)
{
    .message-cell
    {
        .collapseTrigger
        {
            display: none;
        }
    }
}
// User Extra collapse button
.message-cell .collapseTrigger:not(.button)
{
	&:before
	{
		.m-faContent(@fa-var-chevron-circle-down);
		color: inherit;
		width: auto;
	}

	&.is-active:before
	{
		.m-faContent(@fa-var-chevron-circle-up);
		transition: ease-in transform .3s;
		width: auto;
	}
}

// Avatar Online Animation
.message-avatar-online {
    display: inline-flex;
    align-items: center;
    justify-content: center;
	&:after {
		content: \'\';
		position: absolute;
		height: 100%;
		width: 100%;
		border-radius: 100%;
		border: 1px solid #7fb900;
		height: 13px;
		width: 13px;
		opacity: 1;
		animation: pulse 1.5s;
		animation-iteration-count: infinite;
		animation-timing-function: ease;
		transform-origin: center
	}
}

@keyframes pulse {
    from {
        opacity: 1;
        border-width: 0px;
        transform: scale(1)
    }
    to {
        transform: scale(2);
        opacity: 0;
        border-width: 8px
    }
}


// Online offline status
';
	if ($__templater->func('property', array('xentr_user_offline_status', ), false) == 'yes') {
		$__finalCompiled .= '
.js-replyNewMessageContainer .message-avatar.message-avatar--online .avatar {
	border: ' . $__templater->func('property', array('xentr_user_status_border_size', ), true) . 'px solid rgb(127, 185, 0);
}
.js-replyNewMessageContainer .message-avatar .avatar {
	border: ' . $__templater->func('property', array('xentr_user_status_border_size', ), true) . 'px solid ' . $__templater->func('property', array('xentr_user_offline_border_color', ), true) . ';
}
';
	}
	$__finalCompiled .= '

// Offline icon
.message-avatar-wrapper .message-avatar-offline:before {
	.m-faBase();
	.m-faContent(@fa-var-user-circle, .969em);
	line-height: 1;
	font-weight: bold;
	color: xf-intensify(@xf-xentr_user_offline_border_color, 35%);
	background: @xf-messageUserBlock--background-color;
	border: @xf-messageUserBlock--background-color solid 2px;
	border-radius: 50%;
	display: inline-block;	
}

.message-avatar-wrapper .message-avatar-offline {
    position: absolute;
    left: 50%;
    margin-left: -.615em;
    bottom: -.5em;
}

';
	if ($__templater->func('property', array('xentr_user_info_block_sticky', ), false) == 'yes') {
		$__finalCompiled .= '
@media (min-width: ' . ($__templater->func('property', array('responsiveMedium', ), false) + 1) . 'px )
{
	.message-cell.message-cell--user section .message-userArrow,
	.message-inner .message-userArrow {
		right: -(@xf-messagePadding + 1px); 
	}
	.message-user {
		position: -webkit-sticky;
		position: sticky;
		top: @header-navHeight + @xf-publicSubNavPaddingH;
	}
}

';
	}
	$__finalCompiled .= '

/* User Extras Collapse */
.message-userExtras-body
{
    .m-listPlain();

    &.message-userExtras--collapsible
    {
        .has-no-js & { display: block; }

        .m-transitionFadeDown();
    }
}

.message-cell
{
    .collapseTrigger
    {
        text-align: center;

        &.is-active:before
        {
            transform: rotate(-180deg);
        }
        &:before
        {
            content: "\\f13a";
            color: @xf-linkColor;
            transition: ease-in transform .3s;
            width: auto;
        }
        &.collapseTrigger--block:before
        {
            float: none;
        }
    }
}
@media (max-width: @xf-responsiveNarrow)
{
    .message-cell
    {
        .collapseTrigger
        {
            display: none;
        }
    }
}

// Message block link color
#XF .block--messages .message .message-content a {
    .xf-xentr_message_content_link_color();
}

// ######################################### PAGINATION #################################

// Pagination
@xentr-pagination: true;
@pagination-radius: @xf-buttonBase--border-radius;
@pagination-active: @xf-paletteColor4;
@pagination-minor: @xf-textColorMuted;
@pagination-gap: 5px;
@pagination-page: @xf-contentBg;
@pagination-shadow: rgba(0,0,0,0.12) 0px 1px 1px, rgba(0,0,0,0.05) 0px 1px 2px;
@pagination-shadow-active: inset rgba(0,0,0,0.2) 0px 1px 3px;
@pagination-page-hover: lighten(@pagination-page, 3%);

// Pagination

.xentr-pagination(@debug) when (@debug = true) {

	.pageNav{
		display: flex;

		> *{
			flex: 0 0 auto;
			margin-right: @pagination-gap;
		}
	}

		.pageNav-main{
			display: flex;
		}

		.pageNav-jump{
			padding-left: 12px;
			padding-right: 12px;
		}

	.pageNav-page{
		display: block;
		flex: 0 0 auto;
		border-radius: inherit;
		font-weight: bold;

		&:not(:last-child){
			margin-right: @pagination-gap;
		}

		> a{
			padding-left: 11px;
			padding-right: 11px;
		}
	}


	// Make border-radius inherit from parent
	.pageNavWrapper{
		border-radius: @pagination-radius;
	}

		.pageNav,
		.pageNav-main,
		.pageNavSimple,
		.pageNav-jump,
		.pageNavSimple-el,
		#XF .pageNav-page{
			border-radius: inherit;
		}


	// Style pagination buttons
	#XF{

		.pageNav-jump,
		.pageNav-page,
		.pageNavSimple-el{
			background: @pagination-page;
			color: contrast(@pagination-page, @xf-textColor, #fff);
			border-width: 0px;
			box-shadow: @pagination-shadow;

			&:hover,
			&:active{
				background-color: @pagination-page-hover;
				//color: contrast(@pagination-page, rgba(0,0,0,0.8), #fff);
			}
		}

		// Active page
		.pageNav-page.pageNav-page--current,
		.pageNavSimple-el.pageNavSimple-el--current{
			background: @pagination-active;
			color: contrast(@pagination-active, rgba(0,0,0,0.8), #fff);
			border-width: 0;
			box-shadow: @pagination-shadow-active;

			&:hover,
			&:active{
				background-color: xf-intensify(@pagination-active, 3%);
			}
		}

		// First and Last buttons on mobiles
		.pageNavSimple-el{
			padding-left: 10px;
			padding-right: 10px;
		}

	}

	// Add space around prev/next arrow
	.pageNavSimple-el--prev i::before,
	.pageNav-jump.pageNav-jump--prev::before{
		margin-right: 3px;
		width: auto;
	}

	.pageNavSimple-el--next i::before,
	.pageNav-jump.pageNav-jump--next::after{
		margin-left: 3px;
		width: auto;
	}

}
.xentr-pagination(@xentr-pagination);

';
	if ($__templater->func('property', array('xentr_node_layout', ), false) == 'default') {
		$__finalCompiled .= '
.node-stats .pairs {
    display: flex;
    flex-direction: column;
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xentr_node_layout', ), false) == 'dual') {
		$__finalCompiled .= '
.block-box {
	padding: 5px;
	
	.block-body {
		.node {
			margin-bottom: 3px;
		}
	}
}

@_nodeList-statsCellBreakpoint: 1000px;

.node
{
	& + .node
	{
		/// border-top: @xf-borderSize solid @xf-borderColorFaint;
	}
	
	float: left;
	margin: 3px;
	width: ~"calc(50% - 7px)";
    border: @xf-borderSize solid @xf-borderColor;
	border-radius: @xf-borderRadiusMedium;
	
	&:nth-child(2n+1)
	{
		clear: left;
	}
	
	&:last-child:nth-child(2n+1)
	{
		width: ~"calc(100% - 10px)";
	}
	
	.node-icon {
		width: 60px;
		padding: 15px 0;
	}
	
	.node-main {
		padding: 10px 0;
		border-left: @xf-borderSize solid @xf-borderColor;
	}
	
	.node-extra {
		display: block;
		width: 100%;
		padding: 10px;
		border-top: @xf-borderSize solid @xf-borderColor;
	}

	.node-stats {
		>dl.pairs.pairs--rows {
			display: flex;
			justify-content: center;
			
			dt{
				font-size: 15px;
				margin-right: 5px;
			}	
		}
	}
	
	.node-subNodesFlat {
		padding: 0 5px;
	}
	
	.node-subNodeMenu {
		padding: 0 10px;
	}
	
	@media (max-width: @_nodeList-statsCellBreakpoint)
	{
		width: ~"calc(100% - 10px)";
		min-height: auto;
		
		.node .node-main {
			padding: 10px;
		}
		
		.node-meta {
			padding: 0 8px;
		}
	}
}

@media (max-width: @xf-responsiveMedium)
{
	.node .node-main {
    	padding: 10px;
	}	
}	

.node-extra-footer {
    display: inline-flex;
}

.node-extra-footer .node-extra-content-right {
    position: absolute;
    right: 15px;
}

.node--unread:before {
    bottom: 50%;
}
';
	}
	return $__finalCompiled;
}
);