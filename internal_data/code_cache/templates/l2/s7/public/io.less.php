<?php
// FROM HASH: 7698c1ee08c95f0f7a69aa4d212b8024
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// VARIABLES

@io-primaryGradient: linear-gradient(-270deg, @xf-uix_primaryColor 0%, xf-diminish(@xf-uix_primaryColor, 15%) 100%);
@io-nodeColor1: desaturate(lighten(@xf-uix_primaryColor, 5%, relative), 30%, relative);

.m-io_catGradient (@color, @spin) {
	background: linear-gradient(to left, spin(@color, @spin), spin(@color, (@spin + 30%)) );
}

.m-io_catGradient (@color, @spin) when (luma(spin(@color, @spin)) >= 43%) {
	@darkColor: darken(@color, 10%);
	background: linear-gradient(to left, spin(@darkColor, @spin), spin(@darkColor, (@spin + 30%)) );
}

.m-io_catColor (@color, @spin) {
	color: spin(@color, @spin);
}

.m-io_catColor (@color, @spin) when (luma(spin(@color, @spin)) >= 43%) {
	@darkColor: darken(@color, 20%);
	color: spin(@darkColor, @spin);
}

// HEADER

@media (max-width: @xf-responsiveMedium) {
	.uix_headerContainer--stickyFix {display: none;}
	.p-nav-inner {height: @xf-uix_stickyNavHeight !important;}
	.p-header-logo--image img {
		transition: none !important;
		max-height: calc(@xf-uix_stickyNavHeight - (@xf-uix_navLogoVertSpacing * 2)) !important;
	}
}

@media (max-width: @xf-uix_search_maxResponsiveWidth) {
	.uix_searchForm .uix_searchInput {box-shadow: none;}
}

.p-account {font-size: @xf-fontSizeSmall;}

.m-io_navLine() {
	position: absolute;
	bottom: 10px;
	left: @xf-publicNavPaddingH - 4px;
	right: @xf-publicNavPaddingH - 4px;
	height: 4px;
	border-radius: @xf-borderRadiusLarge;
	background: @xf-borderColor;
	display: block;
	transition: ease-in .2s right;
}

.p-nav-list .p-navEl {
	position: relative;
	&:after {right: 100%;}
	
	&:hover:after {
		.m-io_navLine();
	}
	
	&.is-selected:after {
		.m-io_navLine();
		background: @io-primaryGradient;
	}
}

// NODES

.category--collapsed .block-header {
	border-bottom-left-radius: @xf-borderRadiusLarge;
	border-bottom-right-radius: @xf-borderRadiusLarge;
}

.block.block--category {
	.block-header {
	    text-shadow: 0 0 1px rgba(0,0,0,.7);
		position: relative;
		transition: ease-in .15s border-bottom-left-radius, ease-in .15s border-bottom-right-radius;
		&:after {
			content: \'\';
			background: url(@xf-uix_imagePath/io/images/swirl.png);
			background-size: cover;
			background-position: center;
			position: absolute;
			height: 100%;
			width: 100%;
			z-index: 1;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			display: block;
			mix-blend-mode: overlay;
			pointer-events: none;
		}
	}
	';
	if ($__templater->func('property', array('io_nodeGradients', ), false)) {
		$__finalCompiled .= '
	&:nth-child(1n) {
		.block-header {.m-io_catGradient(@io-nodeColor1, 0%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 0%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 30%);}
	}
	&:nth-child(2n) {
		.block-header {.m-io_catGradient(@io-nodeColor1, 60%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 60%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 90%);}
	}
	&:nth-child(3n) {
		.block-header {.m-io_catGradient(@io-nodeColor1, 120%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 120%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 150%);}
	}
	&:nth-child(4n) {
		.block-header {.m-io_catGradient(@io-nodeColor1, 180%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 180%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 210%);}
	}
	&:nth-child(5n) {
		.block-header {.m-io_catGradient(@io-nodeColor1, 240%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 240%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 270%);}
	}
	&:nth-child(6n) {
		.block-header {.m-io_catGradient(@io-nodeColor1, 300%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 300%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 330%);}
	}
	';
	} else {
		$__finalCompiled .= '
	&.io-spin1 {
		.block-header {.m-io_catGradient(@io-nodeColor1, 0%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 0%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 30%);}		
	}
	&.io-spin2 {
		.block-header {.m-io_catGradient(@io-nodeColor1, 60%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 60%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 90%);}		
	}
	&.io-spin3 {
		.block-header {.m-io_catGradient(@io-nodeColor1, 120%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 120%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 150%);}		
	}
	&.io-spin4 {
		.block-header {.m-io_catGradient(@io-nodeColor1, 180%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 180%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 210%);}		
	}
	&.io-spin5 {
		.block-header {.m-io_catGradient(@io-nodeColor1, 240%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 240%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 270%);}		
	}
	&.io-spin6 {
		.block-header {.m-io_catGradient(@io-nodeColor1, 300%);}
		.node--unread .node-icon i {.m-io_catGradient(@io-nodeColor1, 300%);}
		.block-body a:hover {.m-io_catColor(@io-nodeColor1, 330%);}		
	}
	';
	}
	$__finalCompiled .= '
}

.block-body .node + .node {border: none;}

.node--unread .node-icon i {
	background: @io-primaryGradient;
}

.has-flexbox .node .node-body .node-icon {
	display: inline-flex;
	align-items: center;
	justify-content: center;
}

' . '

// WELCOME SECTION

body .uix_welcomeSection:before {
	background-size: cover;
	background-position: center;
	mix-blend-mode: overlay;
}

.uix_welcomeSection .button.button--cta {
	background: #fff;
	color: @xf-uix_primaryColor;
	
	&:hover, &:active, &:focus {
		color: #fff;
	}
}

// SIDEBAR

@supports not (display: contents) {
	.uix_sidebarInner:not(.offCanvasMenu-content) .block {
		.block-minorHeader, .block-header {
			position: absolute;
			transform: translateY(-100%);
			width: 100%;
			height: 30px;
			padding-top: 0;

			+ .block-body {
				margin-top: 60px;
			}
		}
		&:first-child {
			';
	if ($__templater->func('property', array('uix_stickySidebar', ), false) == 'sticky') {
		$__finalCompiled .= '
			.block-minorHeader + .block-body {margin-top: 155px;}
			';
	} else {
		$__finalCompiled .= '
			.block-minorHeader + .block-body {margin-top: 30px;}
			';
	}
	$__finalCompiled .= '
		}
	}
}

@supports (display: contents) {
	.uix_sidebarInner:not(.offCanvasMenu-content) .block {
		.block-container {
			display: contents;
		}
		.block-minorHeader {

		}

		.block-body {
			.xf-contentBase();
			.xf-blockBorder()
			border-radius: @xf-blockBorderRadius;
			.xf-uix_blockContainer();
			.xf-uix_sidebarWidgetWrapper();

			&:not(:last-child) {
				border-bottom-left-radius: 0;
				border-bottom-right-radius: 0;
			}
		}
	}	
}

// FOOTER

.uix_extendedFooter {
	position: relative;

	&:before {
		position: absolute;
		top: 0;
		width: 100%;
		content: \'\';
		display: block;
		height: 4px;
		background: @io-primaryGradient;
	}
}

// DISCUSSION LIST

body .structItem {border: none;}

.block-container .structItemContainer {
	padding: @xf-paddingLarge;
	display: block;
	
	.structItemContainer-group {display: block;}
}

.block-body .block-minorHeader.uix_threadListSeparator {
	position: relative;
	padding-bottom: @xf-uix_structPaddingV + 4px;
	
	&:before {
		content: " ";
		display: table;
		background: @io-primaryGradient;
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
		height: 4px;
		display: block;
		border-radius: 8px;
	}
}

// Post Comments

.p-body-inner .block--messages .message .thpostcomments_commentsContainer {
	border-top: none;
	border-radius: @xf-borderRadiusLarge;
	background: @xf-contentAltBg;
	padding: 1px 0 @xf-messagePadding;
	margin: @xf-messagePadding;
	margin-top: 0px;
	
	.message {background: none;}
}

.p-body-inner .thpostcomments_commentsContainer .message:after {display: none;}

// MESSAGES

.structItem.structItem--note {margin-bottom: @xf-paddingMedium;}

.block-container .message + .message, .message.message--bordered {border-top: none;}

.message:last-child {padding-bottom: 1px; magin-bottom: -1px;}

.block.block--messages .block-container, .block.js-quickReply .block-container {
	box-shadow: @xf-uix_elevation1;
	border-radius: @xf-borderRadiusMedium;
}

.actionBar-action .iconic--checkbox i:before {color: @xf-textColorMuted;}

.message:not(:last-child) {
	position: relative;
	padding-bottom: 4px;
	
	&:after {
		content: \'\';
		position: absolute;
		bottom: 0;
		left: @xf-messagePadding;
		right: @xf-messagePadding;
		height: 4px;
		border-radius: @xf-borderRadiusLarge;
		background: @xf-borderColor;
		display: block;
	}
}

.message-responses {
	.js-replyNewMessageContainer {
		border-top-left-radius: @xf-borderRadiusLarge;
		border-top-right-radius: @xf-borderRadiusLarge;		
		overflow: hidden;
		
		.message-responseRow {margin: 0 !important;}
		
		+ .message-responseRow {
			border-bottom-left-radius: @xf-borderRadiusLarge;
			border-bottom-right-radius: @xf-borderRadiusLarge;			
		}
	}
	
	.message-responseRow {border: none}
	/*
	border-radius: @xf-borderRadiusLarge;
	overflow: hidden;
	.message-responseRow {border: none}
	
	.message-responseRow {
		&:first-child {
			border-top-left-radius: @xf-borderRadiusLarge;
			border-top-right-radius: @xf-borderRadiusLarge;
		}
		&:last-child {
			border-bottom-left-radius: @xf-borderRadiusLarge;
			border-bottom-right-radius: @xf-borderRadiusLarge;
		}

		&.toggleTarget {
			border-radius: @xf-borderRadiusLarge;
		}
	}
	*/
}

// FOOTER

.uix_extendedFooterRow .blockLink {
	padding-left: 0;
	padding-right: 0;
}

.pageNav-page {
	&:first-child {
		border-top-left-radius: @xf-borderRadiusSmall;
		border-bottom-left-radius: @xf-borderRadiusSmall;
	}
	
	&:last-child {
		border-top-right-radius: @xf-borderRadiusSmall;
		border-bottom-right-radius: @xf-borderRadiusSmall;
	}
}

.pageNav-jump {border-radius: @xf-borderRadiusSmall;}

.pageNav-page.pageNav-page--current {
	box-shadow: none; 
	background: @xf-uix_primaryColor; 
	color: #fff;
	border-color: @xf-uix_primaryColor;
}

.p-account .fa.fa-bookmark:before{content: "\\f0c3";}

.node .pairs > dd {
	font-size: @xf-fontSizeNormal;
}

.uix_tabList {
	background: @io-primaryGradient;
	
	.uix_tabItem {color: rgba(255,255,255,.7);}
}

// Icons

' . '

.p-header-logo--image img {transition: ease-in .1s max-height;}

.menu-content {
	position: relative;
	padding-top: 4px;
	
	&:before {
		content: \'\';
		background: @io-primaryGradient;
		left: 0;
		right: 0;
		top: 0;
		height: 4px;
		display: block;
		border-top-left-radius: @xf-borderRadiusLarge;
		border-top-right-radius: @xf-borderRadiusLarge;
		position: absolute;
	}
}';
	return $__finalCompiled;
}
);