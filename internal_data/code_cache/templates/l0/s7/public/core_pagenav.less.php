<?php
// FROM HASH: a9f33623674ed6be3507864914cd74a5
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// ####################################### PAGE NAVIGATION ########################

@_page-paddingV: xf-default(@xf-buttonBase--padding-top, 6px);
@_page-paddingH: 8px;
@_page-paddingHSimple: 10px;
.pageNavWrapper {}

.pageNav {display: flex;}

.pageNav-jump--next {margin-left: 6px;}
.pageNav-jump--prev {margin-right: 6px;}

.m-pageNavElCore()
{
	background: @xf-contentBg;
	color: @xf-textColorMuted;
	.xf-blockBorder();
	// font-size: @xf-fontSizeSmall;
	border-radius: 0;
	border: 1px solid @xf-borderColor;
	white-space: nowrap;
	height: 24px;
	line-height: 24px;

	&:hover,
	&:active
	{
		// background: xf-intensify(@xf-contentHighlightBg, 3%);
		text-decoration: none;
		color: @xf-textColor;
	}
}

.pageNav-jump
{
	display: inline-block;
	.m-pageNavElCore();
	// border-radius: @xf-borderRadiusSmall;
	padding: @_page-paddingV @_page-paddingH;
	height: 26px;
	line-height: 26px;

	&.pageNav-jump--prev:before,
	&.pageNav-jump--next:after
	{
		.m-faBase(\'Pro\', @faWeight-solid);
		font-size: 80%;
		unicode-bidi: isolate; // maintain position in RTL with LTR text
	}

	&.pageNav-jump--prev:before
	{
		.m-faContent("@{fa-var-caret-left}\\00a0", false, ltr); // .61em
		.m-faContent("@{fa-var-caret-right}\\00a0", false, rtl); // .61em
	}

	&.pageNav-jump--next:after
	{
		.m-faContent("\\00a0@{fa-var-caret-right}", false, ltr); // .61em
		.m-faContent("\\00a0@{fa-var-caret-left}", false, rtl); // .61em
	}
}

.pageNav-main
{
	.m-listPlain();
	display: inline-table;
}

.pageNav-page
{
	display: table-cell;
	.m-pageNavElCore();

	&:not(:last-child)
	{
		border-right: none;
	}

	&:not(:first-child)
	{
		border-left-color: @xf-borderColorLight;
	}

	' . '

	> a
	{
		display: block;
		padding: @_page-paddingV @_page-paddingH;
		text-decoration: none;
		color: inherit;
	}

	&.pageNav-page--current
	{
		// background: @xf-contentAccentBg;
		color: @xf-uix_secondaryColor;
		box-shadow: 0 -2px @xf-uix_secondaryColor inset;
		// border: @xf-borderSize solid @xf-borderColorAccentContent;
		cursor: pointer;

		&:hover,
		&:active
		{
			// background: xf-intensify(@xf-contentAccentBg, 3%);
		}

		' . '
	}
}

// Hide relative page numbers on narrow devices when we have a skip entry as we don\'t necessarily have space.
@media (max-width: @xf-responsiveNarrow)
{
	.pageNav--skipStart
	{
		.pageNav-page.pageNav-page--earlier
		{
			display: none;
		}
	}
	.pageNav--skipEnd
	{
		.pageNav-page.pageNav-page--later
		{
			display: none;
		}
		.pageNav-page.pageNav-page--skipEnd
		{
			border-left: none;
		}
	}
}
// ########################### SIMPLE PAGE NAV VARIANT ########################
.pageNavSimple
{
	display: inline-flex;
	height: 24px;
	line-height: 24px;
}
.pageNavSimple-el
{
	display: inline-block;
	.xf-blockBorder();
	border-radius: @xf-borderRadiusSmall;
	padding: @_page-paddingV @_page-paddingHSimple;
	font-size: @xf-fontSizeSmall;
	text-align: center;
	white-space: nowrap;
	margin-right: 4px;
	&:last-child
	{
		margin-right: 0;
	}
	&.pageNavSimple-el--current
	{
		// .xf-contentAccentBase();
		color: @xf-uix_primaryColor;
		background-color: none;
		&:hover,
		&:active
		{
			background: xf-intensify(@xf-contentAccentBg, 3%);
			text-decoration: none;
		}
	}
	&.pageNavSimple-el--prev,
	&.pageNavSimple-el--next
	{
		background: @xf-uix_primaryColor;
		color: #fff;
		min-width: 75px;
		@media (max-width: 350px)
		{
			min-width: 0;
		}
		&:hover,
		&:active
		{
			background: xf-intensify(@xf-uix_primaryColor, 5%);
			text-decoration: none;
		}
		i:before
		{
			.m-faBase(\'Pro\', @faWeight-solid);
		}
	}
	&.pageNavSimple-el--prev i:before
	{
		.m-faContent(@fa-var-caret-left, false, ltr); // , .44em
		.m-faContent(@fa-var-caret-right, false, rtl); // , .44em
	}
	&.pageNavSimple-el--next i:before
	{
		.m-faContent(@fa-var-caret-right, false, ltr); // , .44em
		.m-faContent(@fa-var-caret-left, false, rtl); // , .44em
	}
	&.pageNavSimple-el--first,
	&.pageNavSimple-el--last
	{
		border-color: transparent;
		padding-left: (@_page-paddingHSimple / 2);
		padding-right: (@_page-paddingHSimple / 2);
		color: @xf-uix_primaryColor;
		&:hover,
		&:active
		{
			.xf-blockBorder();
			background: xf-intensify(@xf-contentHighlightBg, 3%);
			color: @xf-linkColor;
			text-decoration: none;
		}
		i:before
		{
			.m-faBase(\'Pro\', @faWeight-solid);
		}
	}
	&.pageNavSimple-el--first i:before
	{
		.m-faContent(@fa-var-backward, false, ltr); // 1em
		.m-faContent(@fa-var-forward, false, rtl); // 1em
		width: auto;
		font-size: 18px;
		line-height: inherit;
	}
	&.pageNavSimple-el--last i:before
	{
		.m-faContent(@fa-var-forward, false, ltr); // 1em
		.m-faContent(@fa-var-backward, false, rtl); // 1em
		width: auto;
		font-size: 18px;
		line-height: inherit;
	}
	&.is-disabled
	{
		border-color: transparent;
		background: none;
		color: @xf-textColorMuted;
		text-decoration: none;
		pointer-events: none;
		&:hover
		{
			background: none;
			color: @xf-textColorMuted;
		}
	}
}
// #################### DISPLAY VARIANTS #########################
.pageNavWrapper--simple
{
	.pageNav
	{
		display: none;
	}
}
.pageNavWrapper--full
{
	.pageNavSimple
	{
		display: none;
	}
}
.pageNavWrapper--mixed
{
	.pageNavSimple
	{
		display: none;
	}
	@media (max-width: @xf-responsiveMedium)
	{
		.pageNav
		{
			display: none;
		}
		.pageNavSimple
		{
			display: inline-flex;
		}
	}
}

';
	if ($__templater->func('property', array('uix_hideTopPagenavMobile', ), false)) {
		$__finalCompiled .= '
// Hide any block page nav that goes before the block as we will be wasting vertical space.
@media (max-width: @xf-responsiveNarrow)
{
	.block-outer:not(.block-outer--after) .pageNavWrapper:not(.pageNavWrapper--forceShow)
	{
		display: none;
	}
	// this is a sanity check in case .block-outer--after is forgotten
	.block-container + .block-outer .pageNavWrapper
	{
		display: block;
	}
}
';
	}
	return $__finalCompiled;
}
);