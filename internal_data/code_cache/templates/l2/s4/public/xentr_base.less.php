<?php
// FROM HASH: 2257d0496540f588629eb050bce08c38
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '::-webkit-resizer {
    background: @xf-contentBg;
}
::-webkit-scrollbar {
    width: 8px;
    height: auto;
}
::-webkit-scrollbar-button {
    display: none;
}
::-webkit-scrollbar-thumb {
    background: @xf-textColorMuted;
    min-height: 80px;
    border-radius: 0;
}
::-webkit-scrollbar-track {
    background: @xf-contentBg;
    border-left: 1px solid @xf-borderColor;
}


// ######################################### STAFF BAR #################################

// Staff Bar links
.p-staffBar-inner .hScroller-scroll {
    display: flex;
    justify-content: space-between;
}

// Icons for Login and Register buttons
.p-navgroup-link.p-navgroup-link--textual.p-navgroup-link--logIn:before {
    .m-faBase();
    .m-faContent(@fa-var-sign-in, 1em);
    color: @xf-publicNav--color;
}
.p-navgroup-link.p-navgroup-link--textual.p-navgroup-link--register:before {
    .m-faBase();
    .m-faContent(@fa-var-key, 1em);
    color: @xf-publicNav--color;
}

.p-navgroup-link--logIn .p-navgroup-linkText, 
.p-navgroup-link--register .p-navgroup-linkText {
    display: inline-block;
}

// ######################################### HEADER #################################
.p-header-content {
    padding: 0;
}

// ######################################### NAVIGATION #################################

// Progress bar
.xtr-progress-bar {
    .xf-xentr_progress_bar();
    position: absolute;
    bottom: 0;
    left: 0;
}

// SplitTrigger icon
.p-navEl-splitTrigger:after {
    content: "\\f078";
	font-size: 10px;
	font-weight: 300;
}

// Navgroup Links text
.p-navgroup-linkText {
	display: none;
}

// Navigation Home Icon
';
	if ($__templater->func('property', array('showNavHomeIcon', ), false)) {
		$__finalCompiled .= '
.p-navEl a[data-nav-id=\'home\']:before 
{
	.m-faBase();
	content: "\\f015";
	text-indent: 0;
	position: absolute;
	left: 50%;
	line-height: 20px;
	width: 20px;
	text-align: center;
	margin-left: -10px;
}
[data-nav-id=\'home\'].p-navEl-link 
{
	.xf-homeLinkIcon();
}
@media (max-width: @xf-responsiveWide)
{
	[data-nav-id=\'home\'].p-navEl-link:before {
		text-indent: inherit;
	}		
}

// Navigation home icon background
.p-navEl
{
	[data-nav-id="home"] {
	background: @xf-homeLink;
	color: @xf-homeLinkColor--color;	

		+ .p-navEl-splitTrigger
		{
			background: @xf-homeLink;
		}
	}
	&:hover
	{
	[data-nav-id="home"]{
	background: @xf-homeLinkHover !important;
		+ .p-navEl-splitTrigger
			  {
				 background: @xf-homeLinkHover !important;
			}
		}
	}
}
';
	}
	$__finalCompiled .= '

//Navigation tab icons
.p-navEl a&, .menu-linkRow, .offCanvasMenu--nav .js-offCanvasNavTarget a& {

    &:before {
        .m-faBase();
        display: inline-block;
        margin-right: 5px;
    }

    &[data-nav-id=\'home\']:before {.m-faContent(@fa-var-home);}
    &[data-nav-id=\'forums\']:before {.m-faContent(@fa-var-comment-alt);}
    &[data-nav-id=\'whatsNew\']:before {.m-faContent(@fa-var-bell);}
    &[data-nav-id=\'members\']:before {.m-faContent(@fa-var-users);}	
	&[data-nav-id=\'dbtechCredits\']:before {.m-faContent(@fa-var-usd-circle);}	
    &[data-nav-id=\'dbtechEcommerce\']:before {.m-faContent(@fa-var-shopping-cart);}
    &[data-nav-id=\'dbtechShop\']:before {.m-faContent(@fa-var-shopping-basket);}
    &[data-nav-id=\'dbtechMail\']:before {.m-faContent(@fa-var-clipboard-list-check);}
    &[data-nav-id=\'xfrm\']:before {.m-faContent(@fa-var-download);}
    &[data-nav-id=\'xfmg\']:before {.m-faContent(@fa-var-camera);}
    &[data-nav-id=\'mjstSupportTicket\']:before {.m-faContent(@fa-var-ticket-alt);}
    &[data-nav-id=\'dbtechEcommerceTickets\']:before {.m-faContent(@fa-var-ticket-alt);}
    &[data-nav-id=\'paidMembership\']:before {.m-faContent(@fa-var-star);}
	&[data-nav-id=\'xtrHistoryEvents\']:before {.m-faContent(@fa-var-calendar-alt);}
    &[data-nav-id=\'xcfs\']:before {.m-faContent(@fa-var-address-card);}	
	&[data-nav-id="EWRrio"]:before { .m-faContent("\\f1e8"); }	
	&[data-nav-id="EWRatendo"]:before { .m-faContent(@fa-var-calendar-alt); }
	&[data-nav-id="EWRcarta"]:before { .m-faContent(@fa-var-book); }
	&[data-nav-id="EWRdiscord"]:before { .m-faContent(@fa-var-discord); .m-faBase(\'Brands\'); }
	&[data-nav-id="EWRmedio"]:before { .m-faContent(@fa-var-video-plus); }
	&[data-nav-id="EWRporta"]:before { .m-faContent(@fa-var-home); }
	&[data-nav-id="EWRrio"]:before { .m-faContent(@fa-var-play-circle); }
	&[data-nav-id="EWRtorneo"]:before { .m-faContent(@fa-var-trophy); }
	&[data-nav-id="snog_raffles_navtab"]:before { .m-faContent("\\f145"); }
	&[data-nav-id="th_donate"]:before { .m-faContent("\\f2b5"); }
	&[data-nav-id=\'xa_ams\']:before {.m-faContent(@fa-var-book);}
	&[data-nav-id="xa_ubs"]:before { .m-faContent("\\f303"); }
	&[data-nav-id="xa_showcase"]:before { .m-faContent("\\f00b"); }
	&[data-nav-id="xa_sportsbook"]:before { .m-faContent("\\f091"); }
	&[data-nav-id="xa_pickem"]:before { .m-faContent("\\f51e"); }	
}

// Navigation hover top
.p-nav-list > li,
.p-navgroup-link--user,
.p-navgroup-link--linked,
.p-navgroup-link--language,
.p-navgroup-link--whatsnew,
.p-navgroup-link--search {
    position: relative;
}

.p-nav-list > li:after,
.p-navgroup-link--user:after,
.p-navgroup-link--linked:after,
.p-navgroup-link--language:after,
.p-navgroup-link--whatsnew:after,
.p-navgroup-link--search:after {
    content: \'\';
    width: 100%;
    height: 4px;
    background-color: @xf-xentr_navigation_hover_border;
    position: absolute;
    top: 0;
    left: -100%;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.p-nav-list > li:hover:after,
.p-navgroup-link--user:hover:after,
.p-navgroup-link--linked:hover:after,
.p-navgroup-link--language:hover:after,
.p-navgroup-link--whatsnew:hover:after,
.p-navgroup-link--search:hover:after {
    opacity: 1;
    left: 0;
}


// Sub Navigations
';
	if ($__templater->func('property', array('xtr_hide_sub_nav', ), false)) {
		$__finalCompiled .= '
.p-nav-list .p-navEl.is-selected
{
	.p-navEl-splitTrigger
	{
		display: inline;
		position: relative;
	}
	.p-navEl-link.p-navEl-link--splitMenu
	{
		padding-right: (@xf-paddingMedium - 1);
	}
}
';
	}
	$__finalCompiled .= '

// Nav group radius
.p-navgroup {
    border-radius: 0;
}

// ######################################### SEARCH BOX #################################
.search-box {
	position: relative;
	display: flex;
	min-width: 270px;
	.input {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0;
		padding: (@xf-paddingMedium - 2);
	}
	.btn-group {
		display: flex;
		.button {
			min-width: auto;
			border-radius: 0;
			padding: (@xf-paddingSmall + 1) @xf-paddingMedium;
		}
		.button.button.button--link {
			border-top-right-radius: @xf-borderRadiusMedium;
			border-bottom-right-radius: @xf-borderRadiusMedium;
			padding: (@xf-paddingSmall + 1) (@xf-paddingMedium + 2);
		}
	}
	.menuTrigger:after {
		display: none;
	}
}


// Icons in Visitor menu
.menu-content.js-visitorMenuBody a.menu-linkRow {
    padding: @xf-paddingMedium @xf-paddingSmall @xf-paddingMedium @xf-paddingMedium;
	
    &:before {
        .m-faBase();
    }
    &[href*="whats-new/news-feed"]:before {
        .m-faContent(@fa-var-rss);
    }
    &[href*="search/member"]:before {
        .m-faContent(@fa-var-comments);
    }
    &[href*="account/reactions"]:before {
        .m-faContent(@fa-var-thumbs-up);
    }
    &[href*="account/alerts"]:before {
        .m-faContent(@fa-var-bell);
    }
    &[href*="account/account-details"]:before {
        .m-faContent(@fa-var-user-cog);
    }
    &[href*="account/security"]:before {
        .m-faContent(@fa-var-shield-alt);
    }
    &[href*="account/privacy"]:before {
        .m-faContent(@fa-var-lock);
    }
    &[href*="account/preferences"]:before {
        .m-faContent(@fa-var-cogs);
    }
    &[href*="account/signature"]:before {
        .m-faContent(@fa-var-signature);
    }
    &[href*="account/upgrades"]:before {
        .m-faBase(\'Brands\');
        .m-faContent(@fa-var-paypal);
    }
    &[href*="support-tickets/yours"]:before {
        .m-faContent(@fa-var-ticket-alt);
    }
    &[href*="hizmetler"]:before {
    	.m-faContent(@fa-var-star);
    }
    &[href*="account/connected-accounts"]:before {
        .m-faContent(@fa-var-users-class);
    }
	&[href*="membership"]:before {
        .m-faContent(@fa-var-star);
    }
    &[href*="account/following"]:before {
        .m-faContent(@fa-var-user-plus);
    }
	&[href*="/account/tc-dogrulama"]:before {
        .m-faContent(@fa-var-check-circle);
    }
    &[href*="account/ignored"]:before {
        .m-faContent(@fa-var-user-minus);
    }
    &[href*="/members/sms-confirmed"]:before {
    	.m-faContent(@fa-var-sms);
    }
    &[href*="/hesap/sms-dogrulama"]:before {
    	.m-faContent(@fa-var-sms);
    }
    &[href*="account/keywords"]:before {
        .m-faContent(@fa-var-key);
    }
    &[href*="/xenforo-license"]:before {
    	.m-faContent(@fa-var-copyright);
    }
    &[href*="account/sms-confirmation"]:before {
        .m-faContent(@fa-var-sms);
    }
    &[href*="/members/banned"]:before {
    	.m-faContent(@fa-var-ban);
    }
    &[href*="/conversation-view"]:before {
    	.m-faContent(@fa-var-eye);
    }
    &[href*="/members/sms-confirmed"]:before {
    	.m-faContent(@fa-var-user-check);
    }
    &[href*="logout"]:before {
        .m-faContent(@fa-var-sign-out);
    }
}

// ######################################### BREADCRUMB #################################
// Top Breadcrumb
';
	if ($__templater->func('property', array('xentr_remove_breadbrumb_top', ), false)) {
		$__finalCompiled .= '
.p-breadcrumbs:not(.p-breadcrumbs--bottom) {
	display: none;
}
.p-body-inner {
	padding-top: @xf-elementSpacer;
}
';
	}
	$__finalCompiled .= '

// Bottom Breadcrumb
';
	if ($__templater->func('property', array('xentr_remove_breadbrumb_bottom', ), false)) {
		$__finalCompiled .= '
.p-breadcrumbs.p-breadcrumbs--bottom {
	display: none;
}
.p-body-inner {
	padding-bottom: @xf-elementSpacer;
}
';
	}
	$__finalCompiled .= '

.breadcrumb-content {
    display: flex;
    @media (max-width: @xf-responsiveMedium) {
        flex-direction: column;
        align-items: center;
    }  
	
    .p-breadcrumbs{
        flex: 1 1 auto;
        width: 100%;
    }
	.block-minorHeader {
    	display: none;
	}
	.block {
    	display: none;
	}
}

.p-breadcrumbs {
	.xf-xentr_breadcrumb();
	overflow: hidden;
	line-height: ' . $__templater->func('property', array('xentr_breadcrumbHeight', ), true) . 'px;
	margin-bottom: 10px;
	position: relative;
	z-index: 0;	

	&::before {
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		border: @xf-borderSize solid @xf-xentr_breadcrumb--border-color;
		border-radius: inherit;
		pointer-events: none;
		z-index: 2;
	}

	> li {
		margin: 0;
		font-size: inherit;
		padding-left: 15px;
            
		&:first-child {
			border-top-left-radius: inherit;
			border-bottom-left-radius: inherit;
			span {
				&:before {
					.m-faBase();
					text-rendering: auto;
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale;
					content: "\\f015";
					padding-right: 5px;
				}
			}
		}

		&::before,
		&::after{
			display: none;
		}

		a{
			padding: 0 15px;
			position: relative;
			z-index: 1;
			display: block;
			overflow: visible;
			max-width: none;
			text-decoration: none;
			color: inherit;
			margin-left: -15px;
               
			&:hover{
				color: xf-default(@xf-xentr_breadcrumbHover--color, inherit);
			}

			&::before,
			&::after {
				border-style: solid;
				border-width: 0;
				border-right-width: 1px;
				border-color: @xf-xentr_breadcrumbBorder--border-color;
				color: rgba(255, 255, 255, 0.38);
				box-shadow: inset currentColor -1px 0px 0px 0px;
				content: \'\';
				position: absolute;
				height: 50%;
				width: 100%;
				right: 0;
				z-index: -1;
				box-sizing: border-box;
				transform-origin: 100% 50%;
			}

			html[dir=\'rtl\'] &:before,
			html[dir=\'rtl\'] &:after{
				box-shadow: inset currentColor 1px 0px 0px 0px;
			}

			&::before {
				top: 0;
				transform: skewX(35deg);
			}

			&::after {
				top: 50%;
				transform: skewX(-35deg);
			}

			html[dir=\'rtl\'] &:before{
				transform: skewX(-35deg);
			}
			    
			html[dir=\'rtl\'] &:after{
				transform: skewX(35deg);
			}

			/* Hover */
			&:hover::before,
			&:hover::after {
				background: @xf-xentr_breadcrumbHover--background-color;
			}

			/* Active */
			&:active::before,
			&:active::after{
				background-color: fade(@xf-xentr_breadcrumbHover--color, 3%);
				color: rgba(0,0,0,0.05);
				box-shadow: inset currentColor -2px 1px 1px;
			}

			&:active::after{
				box-shadow: inset currentColor -2px -1px 1px;
			}

            }

		&:first-of-type a::before,
		&:first-of-type a::after {
			width: ~"calc(100% + 20px)";
		}
	}
}

@media (max-width: @xf-responsiveNarrow) {
		.p-breadcrumbs {
			& > li a {
				padding: 0 22px;

				&::before,
				&::after {
				transform: skewX(-30deg);
				width: ~"calc(100% + 20px)";
			}
				&::after {
					transform: skewX(30deg);
			}
		}
	}
}

// ######################################### CONTENT #################################

';
	if ($__templater->func('property', array('xentr_button_hover_effect', ), false)) {
		$__finalCompiled .= '
.palette,
.button {
	position: relative;
	overflow: hidden;
	&:after {
		content: \'\';
		position: absolute;
		display: inline-block;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 1;
		transition: all 0.5s;
		opacity: 1;
		-webkit-transform: translate(-105%, 0);
		transform: translate(-105%, 0);
		border-right-width: @xf-borderSize;
		border-right-style: solid;
		border-right-color: @xf-borderColorFaint;
		background-color: rgba(255, 255, 255, 0.25);
	}
	&:hover {
		&:after {
			opacity: 0;
			-webkit-transform: translate(0, 0);
			transform: translate(0, 0);
		}
	}
}
';
	}
	$__finalCompiled .= '

// Body header style
.p-body-header
{
	.xf-xentr_forum_title_style();
	
	body[data-template="forum_view"]
	{
		margin-bottom: 0;
	}
}


// Page content
.block-container {
    border: none;
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
}

// Block Margin
@media (max-width: @xf-responsiveMedium)
{	
	.block-container, .blockMessage {
		margin-left: 0;
		margin-right: 0;
	}
}

// Block
.block-box .block-header,
.block-minorHeader {
    position: relative;
}

// Block before background
.block-box .block-header:before {
    content: "";
    position: absolute;
    left: -10px;
    bottom: 5px;
    min-height: 40px;
    width: 3px;
}

// Block before background
.block-minorHeader:before {
    content: "";
    position: absolute;
    left: 0;
    top: 10px;
    bottom: 5px;
    height: 35px;
    width: 3px;
}

// Block Header Background
.block-minorHeader:before,
.block-box .block-header:before {
    background: @xf-xentr_block_border_color;
}

// ######################################### SIDEBAR #################################

@media (min-width: @xf-responsiveWide) 
{
	.p-body-main--withSidebar{
		display: flex;
		align-items: flex-start;
		
		.p-body-sideNavCol,
		.p-body-sidebarCol
		{
			width: auto;
		}
		
		.p-body-content{
			flex: 1 1 auto;
			// IE fix
			display: block;
			width: ~"calc(100% - @xf-sidebarWidth)";
			padding-right: @xf-sidebarSpacer;
		}
		
		.p-body-sideNav,
		.p-body-sidebar{
			flex: 0 0 auto;
			width: @xf-sidebarWidth;
			// IE fix
			display: block;
		}

	}
}

// Sidebar block row border
.p-body-sidebar .block .block-body .block-row {
    border-bottom: @xf-borderSize solid @xf-borderColorFaint;
}

// Sticky sidebar height
@sticky-top: @xf-xentr_stickySidebarHeight;

// Disable Sidebar
';
	if ($__templater->func('property', array('xentr_sidebarDisable', ), false)) {
		$__finalCompiled .= '
.p-body-main .p-body-sidebar {
	display: none;
}
.p-body-main.p-body-main--withSidebar .p-body-content {
	width: 100%;
	max-width: 100%;
	padding-right: 0;
	padding-left: 0;
}
';
	}
	$__finalCompiled .= '

// Sidebar Position
';
	if ($__templater->func('property', array('xentr_sidebarPosition', ), false) == 'left') {
		$__finalCompiled .= '
@media (min-width: @xf-responsiveWide) {
	.p-body-main--withSidebar .p-body-content {
		order: 2;
		padding-left: @xf-sidebarSpacer;
		padding-right: 0 !important
	}
	.p-body-main.p-body-main--withSidebar.is-active .p-body-content, .p-body-main.p-body-main--withSideNav.is-active .p-body-content {
		width: 100%;
		max-width: 100%;
		padding-left: 0;
	}
	.p-body-sidebar {
		order: 1;
	}
}
';
	}
	$__finalCompiled .= '

// Sticky Sidebar
';
	if ($__templater->func('property', array('xentr_stickySidebar', ), false) AND (!$__templater->func('property', array('xentr_sidebarDisable', ), false))) {
		$__finalCompiled .= '
@media (min-width: @xf-publicNavCollapseWidth)
{
.p-body-sidebar {
	position: -webkit-sticky;
	position: sticky;
	';
		if (($__templater->func('property', array('publicNavSticky', ), false) === 'primary') OR ($__templater->func('property', array('publicNavSticky', ), false) === 'all')) {
			$__finalCompiled .= '
	top: @sticky-top * 1px + @xf-publicNavPaddingV;
	';
		} else {
			$__finalCompiled .= '
	top: 10px;
	';
		}
		$__finalCompiled .= '
}
}	
';
	}
	$__finalCompiled .= '

// Collapsible Sidebar
';
	if ($__templater->func('property', array('xentr_collapsibleSidebar', ), false) AND (!$__templater->func('property', array('xentr_sidebarDisable', ), false))) {
		$__finalCompiled .= '
.p-title-pageAction {
	.collapseTrigger {
		margin-left: auto;
		display: inline-flex;
		.m-faBase();
		font-size: @xf-fontSizeSmall;
		
		&:before
        {
			content: "\\' . $__templater->func('property', array('xentr_collapsibleOffIcon', ), true) . '";
			width: 100%;
			margin-left: 0;
        }
		
		&.is-active:before
        {
			content: "\\' . $__templater->func('property', array('xentr_collapsibleOnIcon', ), true) . '";
        }
		
	}
}	

@media (max-width: @xf-responsiveWide) {
	.p-title-pageAction .collapseTrigger {
		display: none;
	}
}

@media (min-width: @xf-responsiveWide) 
{
	#XF .p-body-main.p-body-main--withSidebar.is-active .p-body-content, #XF .p-body-main.p-body-main--withSideNav.is-active .p-body-content {
		width: 100%;
		max-width: 100%;
		padding-right: 0;
	}

	#XF .p-body-main.p-body-main--withSidebar.is-active .p-body-sidebar, #XF .p-body-main.p-body-main--withSideNav.is-active .p-body-sidebar, #XF .p-body-main.p-body-main--withSidebar.is-active .p-body-sideNav, #XF .p-body-main.p-body-main--withSideNav.is-active .p-body-sideNav {
		width: 0;
		height: 0;
		opacity: 0;
		overflow: hidden;
	}	
}
';
	}
	$__finalCompiled .= '

// ######################################### FORUM NODE #################################

.block-box {
    position: relative;
	display: flex;
    flex-direction: column;
	border: none;
    .xf-xentr_category_block_box();
}
.block-box .block-body .node,
.block .block-body .node {
    .xf-xentr_category_list_node();
}

// Node Expander 
.block--category
{
    .collapseTrigger
    {
		position: absolute;
		right: 8px;
		top: 20%;
        &.is-active:before
        {
            content: "\\f068";
            font-size: 15px;
			font-weight: 300;
        }
        &:before
        {
            content: "\\f067";
			font-weight: 300;
        }
    }
}


// Node 2n Child Background
.node:nth-child(2n) {
    background-color: @xf-contentAltBg;
}
.node+.node {
    border: none;
}
// Node Last child radius
.node:last-child {
    border-bottom-left-radius: @xf-borderRadiusLarge;
    border-bottom-right-radius: @xf-borderRadiusLarge;
}

// Node Title Hover
.node-title {
	a {
		&:before {
			margin-right: 3px;
			content: \'[\';
			-webkit-transform: translateX(20px);
			-moz-transform: translateX(20px);
			transform: translateX(20px);
			display: inline-block;
			opacity: 0;
			-webkit-transition: -webkit-transform 0.3s,opacity 0.2s;
			-moz-transition: -moz-transform 0.3s,opacity 0.2s;
			transition: transform 0.3s,opacity 0.2s;
		}
		&::after {
			margin-left: 3px;
			content: \']\';
			-webkit-transform: translateX(-20px);
			-moz-transform: translateX(-20px);
			transform: translateX(-20px);
		}
		&:after {
			display: inline-block;
			opacity: 0;
			-webkit-transition: -webkit-transform 0.3s,opacity 0.2s;
			-moz-transition: -moz-transform 0.3s,opacity 0.2s;
			transition: transform 0.3s,opacity 0.2s;
		}
	}
}

.node-title a:hover:before, .node-title a:hover:after, .node-title a:focus:before, .node-title a:focus:after {
    opacity: 1;
    -webkit-transform: translateX(0px);
    -moz-transform: translateX(0px);
    transform: translateX(0px);
    color: @xf-linkHoverColor;
}

.block--category .node .node-description {
    margin-left: (@xf-paddingMedium - 2px);
}

// Node Unread
.node--unread {
    position: relative;
    &:before {
        content: \'\';
        background-color: @xf-xentr_primary_color;
        width: 2px;
        border-radius: 4px;
        height: 30px;
        position: absolute;
        top: 0;
        bottom: 0;
        right: -2px;
        margin: auto 0;
    }
}

.block--category:nth-child(odd) {
    & .node--unread:before {
        background-color: @xf-xentr_primary_color;
    }
}

.block--category:nth-child(even) {
    & .node--unread:before {
        background-color: @xf-xentr_primary_color;
    }
}

// Node New Badge

.is-unread .structItem-title:after {
    content: \'' . 'Новое' . '\';
    color: @xf-paletteNeutral1;
    background: @xf-xentr_primary_color;
    display: inline-block;
    font-size: (@xf-fontSizeSmallest - 1px);
    border-radius: (@xf-borderRadiusMedium - 1px);
    padding-top: 1px;
    padding-right: 4px;
    padding-bottom: 1px;
    padding-left: 4px;
}

// Forum Node Icons

';
	if ($__templater->func('property', array('xentr_nodeIcons', ), false) AND ($__templater->func('property', array('xentr_select_font_awesome_style', ), false) == 'pro')) {
		$__finalCompiled .= '
	/* Read Icon */
	#XF .node--forum.node--read {
		.node-icon {
			.fa-comments {
				&:before {
					content: "\\@xf-nodeIconRead";
				}
			}
		}
	}
	
	/* Unread Icon */
	#XF .node--forum.node--unread {
		.node-icon {
			i {
				&:before {
					content: "\\@xf-nodeIconUnread";
				}
			}
		}
	}

	/* Article Icon */
	#XF .node--forum.node--read,
	#XF .node--forum.node--unread {
		.node-icon {
			.fa-file-alt {
				&:before {
					content: "\\@xf-nodeIconArticle";
				}
			}
		}
	}

	/* Question Icon */
	#XF .node--forum.node--read,
	#XF .node--forum.node--unread {
		.node-icon {
			.fa-lightbulb-on {
				&:before {
					content: "\\@xf-nodeIconQuestion";
				}
			}
		}
	}
	
	/* Suggestion Icon */
	#XF .node--forum.node--read,
	#XF .node--forum.node--unread {
		.node-icon {
			.fa-question-circle {
				&:before {
					content: "\\@xf-nodeIconSuggestion";
				}
			}
		}
	}
	
	/* Link Icon */
	#XF .node--link {
		.node-icon {
			i {
				&:before {
					content: "\\@xf-nodeLinkIcon";
				}
			}
		}
	}
		
	/* Page Icon */
	#XF .node--page {
		.node-icon {
			i {
				&:before {
					content: "\\@xf-nodePageIcon";
				}
			}
		}
	}

	/* Search Icon */
	#XF .node--search {
		.node-icon {
			i {
				&:before {
					content: "\\@xf-nodeSearchIcon";
				}
			}
		}
	}

';
	} else {
		$__finalCompiled .= '
// DOUTONE FONTS
.node-body .node-icon i,
.node-body .node-icon i.fa-question-circle,
.node-body .node-icon i.fa-lightbulb-on,
.node-body .node-icon i.fa-file-alt
{
    font-family: \'Font Awesome 5 Duotone\';
    font-style: normal;
    font-weight: 900;
    position: relative;
    &:before
    {
        opacity: .7;
		content: "\\@xf-nodeIconUnread";
		position: absolute;
		font-family: inherit;
		font-weight: inherit;
		color: xf-intensify(@xf-paletteNeutral3, 15%);
		background: @xf-nodeIconReadColor;
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
        .node--link & { content: "\\@xf-nodeLinkIcon"; }
        .node--page & { content: "\\@xf-nodePageIcon"; }
		.node--search & { content: "\\@xf-nodeSearchIcon"; }
    }
    &:after
    {
        color: xf-intensify(@xf-paletteNeutral1, 5%);
		opacity: .5;
		content: "\\10@xf-nodeIconUnread";
		background: @xf-nodeIconUnreadColor;
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
        .node--link & { content: "\\10@xf-nodeLinkIcon"; }
        .node--page & { content: "\\10@xf-nodePageIcon"; }
		.node--search & { content: "\\@xf-nodeSearchIcon"; }
    }
}

// Article Icon
.node-body .node-icon i.fa-file-alt:before {
    content: "\\@xf-nodeIconArticle";
}

.node-body .node-icon i.fa-file-alt:after {
    content: "\\10@xf-nodeIconArticle";
}

// Question Icon
.node-body .node-icon i.fa-question-circle:before {
    content: "\\@xf-nodeIconQuestion";
}

.node-body .node-icon i.fa-question-circle:after {
    content: "\\10@xf-nodeIconQuestion";
}

// Suggestion Icon
.node-body .node-icon i.fa-lightbulb-on:before {
    content: "\\@xf-nodeIconSuggestion";
}

.node-body .node-icon i.fa-lightbulb-on:after {
    content: "\\10@xf-nodeIconSuggestion";
}


// Search Icon
#XF .node--search .node-body .node-icon i:before {
    content: "\\10@xf-nodeSearchIcon";
}

#XF .node--page .node-body .node-icon i:before {
    content: "\\10@xf-nodePageIcon";
}

#XF .node--unread .node-body .node-icon i:before,
#XF .node--unread .node-body .node-icon i:after {
    opacity: 1;
}
';
	}
	$__finalCompiled .= '

// ######################################### SUBFORUMS #################################
.node-subNodeFlatList {
    >li {
        float: left;
		width: 50%;
		margin-right: 0 !important;
		padding: (@xf-paddingSmall - 2);
        overflow: hidden;
        text-overflow: ellipsis;
        vertical-align: middle;
        white-space: nowrap;
    }
}

// Node statistics
.node-extra-footer {
	display: flex;
	flex-direction: column;
	.node-extra-content {
		position: relative;
		top: @xf-paddingSmall; 
		padding: (@xf-paddingSmall + 1);
		font-size: @xf-fontSizeSmaller;
	}
	.node-extra-content-left {
		float: left;
	}
	.node-extra-footer-main {
		display: flex;
		align-items: center;
		dl {
			margin-right: @xf-paddingSmall;
		}
		.pairs:nth-child(2) dd:after {
			content: \'|\';
			margin-left: @xf-paddingSmall;
		}
	}
	.node-extra-footer-title {
		font-weight: bold;
		&:after {
			content: ":";
			margin-right: @xf-paddingSmall;
		}
	}
	.node-extra-content-right {
		float: right;
	}
}

// ######################################### ACCONUT PAGE #################################

// Icons in sidenav on Account page
[data-template="account_alerts"], &[data-template="account_reactions"], &[data-template="account_bookmarks"],
&[data-template="account_details"], &[data-template="account_security"], &[data-template="account_privacy"],
&[data-template="account_preferences"], &[data-template="account_signature"], &[data-template="account_upgrades"],
&[data-template="account_connected"], &[data-template="account_following"], &[data-template="account_ignored"] {
    .p-body-sideNavContent a.blockLink {
        &:before {
            .m-faBase();
            padding-right: @xf-paddingSmall;
        }
        &[href*="members/"]:before {
            .m-faContent(@fa-var-user);
        }
        &[href*="account/alerts"]:before {
            .m-faContent(@fa-var-bell);
        }
        &[href*="account/reactions"]:before {
            .m-faContent(@fa-var-thumbs-up);
        }
        &[href*="account/bookmarks"]:before {
            .m-faContent(@fa-var-bookmark);
        }
        &[href*="account/account-details"]:before {
            .m-faContent(@fa-var-user-cog);
        }
        &[href*="account/security"]:before {
            .m-faContent(@fa-var-shield-alt);
        }
        &[href*="account/privacy"]:before {
            .m-faContent(@fa-var-lock);
        }
        &[href*="account/preferences"]:before {
            .m-faContent(@fa-var-cogs);
        }
        &[href*="account/signature"]:before {
            .m-faContent(@fa-var-signature);
        }
        &[href*="account/upgrades"]:before {
            .m-faBase(\'Brands\');
            .m-faContent(@fa-var-paypal);
        }
        &[href*="account/connected-accounts"]:before {
            .m-faContent(@fa-var-users-class);
        }
        &[href*="account/following"]:before {
            .m-faContent(@fa-var-user-plus);
        }
        &[href*="account/ignored"]:before {
            .m-faContent(@fa-var-user-minus);
        }
        &[href*="logout"]:before {
            .m-faContent(@fa-var-sign-out);
        }
    }
}
/*****/

// ######################################### THREAD PAGE #################################
// Actions bar
.actionBar-action:before {
    margin-right: @xf-paddingSmall;
}
.actionBar-action--edit:before {.m-faContent("\\f040");}
.actionBar-action--report:before {.m-faContent("\\f071");}
.actionBar-action--ip:before {.m-faContent("\\f002");}
.actionBar-action--delete:before {.m-faContent("\\f00d");}
.actionBar-action--spam:before {.m-faContent("\\f024");}
.actionBar-action--warn:before {.m-faContent("\\f12a");}
.actionBar-action--history:before {.m-faContent("\\f1da");}

// Node Stats
.node-stats {
	text-transform: uppercase;
	color: @xf-linkColor;
	>dl.pairs.pairs--rows {
		border-right: @xf-borderSize solid @xf-borderColor;
		&:last-child {
			padding-right: 0;
			border-right: 0;
		}
	}
}

// Node Stats Icon
';
	if ($__templater->func('property', array('xentr_node_layout', ), false) == 'default') {
		$__finalCompiled .= '
.node-stats {
	dl.pairs {
		dd {
			&:before {
				.m-faBase();
				padding-right: .5em;
				position: relative;
				font-weight: 300;
				font-size: @xf-fontSizeSmall;
			}
		}
		&:nth-child(1) {
			dd {
				&:before {
					content: \'\\f4b6\';
				}
			}
		}
		&:nth-child(2) {
			dd {
				&:before {
					content: \'\\f4a6\';
				}
			}
		}
	}
}
';
	}
	$__finalCompiled .= '

// ######################################### FORUM VIEW #################################
.structItemContainer-group--sticky .structItem {
    background: xf-intensify(@xf-contentBg, 5%);
}

// ######################################### FOOTER #################################
// Footer icons
.p-footer-linkList  a[href*="/support-tickets"]:before{ .m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f3ff" }
.p-footer-linkList  a[href*="/misc/contact"]:before{ .m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f0e0" }
.p-footer-linkList  a[href*="help/terms"]:before{.m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f071" !important;}
.p-footer-linkList  a[href*="/help/"]:before{ .m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f059" }
.p-footer-linkList  a[href*="/help/privacy-policy/"]:before{  .m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f21b" !important; }
.p-footer-linkList  a[href*="/index.php?misc/contact"]:before{ .m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f0e0" }
.p-footer-linkList  a[href*="/index.php?help/terms"]:before{.m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f071" !important;}
.p-footer-linkList  a[href*="/index.php?help/"]:before{ .m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f059" }
.p-footer-linkList  a[href*="/faqs"]:before{  .m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f059" !important; }
.p-footer-linkList  a[href*="/index.php?help/privacy-policy/"]:before{  .m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f21b" !important; }
.p-footer-linkList .footer-home:before{  .m-faBase(); padding-right: 5px; color: @xf-publicFooterLink--color; content: "\\f015" !important; }

';
	if (($__templater->func('property', array('xentr_footer_main', ), false) == 'footerAbove')) {
		$__finalCompiled .= '
.p-main-footer {
	background: xf-intensify(@xf-publicFooter--background-color, 5%);
	border-bottom: 1px solid rgba(255, 255, 255, 0.08);
	font-size: @xf-fontSizeSmall;
	.p-footer-inner {
		padding-top: 0;
	}
	.p-footer-row {
		padding: 10px;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
	}
	a {
		color: @xf-publicFooterLink--color;
	}
}
.p-footer-row-main,
.p-footer-row-opposite {
    margin-bottom: 0;
}
.xtr-extra-footer {
	.p-footer-inner {
		padding-bottom: 0;
	}
}
';
	}
	$__finalCompiled .= '

';
	if (($__templater->func('property', array('xentr_footer_main', ), false) == 'footerBelow')) {
		$__finalCompiled .= '
.xtr-extra-footer {
	border-bottom: none !important;
	.p-footer-inner {
		padding-bottom: 0;
    	padding-top: 0;
	}
	.xtr-extra-footer-row {
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
	}
}

.p-footer-row {
    margin-bottom: -5px;
    margin-top: -10px;
    padding: 10px;
	border-top: 1px solid rgba(255, 255, 255, 0.08);
}
.p-footer-row-main,
.p-footer-row-opposite {
    margin-bottom: 0;
}
';
	}
	$__finalCompiled .= '


// Share Buttons

.shareButtons-button
{
	&.shareButtons-button--youtube
	{
		&:hover { background-color: #FF0000; }
		> i:before { .m-faContent(@fa-var-youtube); }
	}

	&.shareButtons-button--gplus
	{
		&:hover { background-color: #dd4b39; }
		> i:before { .m-faContent(@fa-var-google-plus-g); }
	}
	
	&.shareButtons-button--linkedin
	{
		&:hover { background-color: #0077B5; }
		> i:before { .m-faContent(@fa-var-linkedin); }
	}
	
	&.shareButtons-button--vimeo
	{
		&:hover { background-color: #162221; }
		> i:before { .m-faContent(@fa-var-vimeo); }
	}
	
	&.shareButtons-button--steam
	{
		&:hover { background-color: #000000; }
		> i:before { .m-faContent(@fa-var-steam); }
	}
	
	&.shareButtons-button--twitch
	{
		&:hover { background-color: #B9A3E3; }
		> i:before { .m-faContent(@fa-var-twitch); }
	}
	
	&.shareButtons-button--vk
	{
		&:hover { background-color: #6441A5; }
		> i:before { .m-faContent(@fa-var-vk); }
	}
	
	&.shareButtons-button--instagram
	{
		&:hover { background-color: #405DE6; }
		> i:before { .m-faContent(@fa-var-instagram); }
	}
	
	&.shareButtons-button--github
	{
		&:hover { background-color: #4078C0; }
		> i:before { .m-faContent(@fa-var-github); }
	}

	&.shareButtons-button--whatsApp
	{
		&:hover { background-color: #25D366; }
		> i:before { .m-faContent(@fa-var-whatsapp); }
	}

	&.shareButtons-button--email
	{
		&:hover { background-color: #1289ff; }
		> i:before { .m-faContent(@fa-var-envelope); }
	}
	
	&.shareButtons-button--rss
	{
		&:hover { background-color: #F26522; }
		> i:before { .m-faContent(@fa-var-rss); }
	}

	&.shareButtons-button--link
	{
		cursor: pointer;
		&:hover { background-color: #787878; }
		> i:before { .m-faContent(@fa-var-link); }
	}
}

// Footer copyright
.p-footer-copyright {
    margin-top: 5px;
	padding: 5px 0;
	border-top: 1px solid rgba(255, 255, 255, 0.08);
}';
	return $__finalCompiled;
}
);