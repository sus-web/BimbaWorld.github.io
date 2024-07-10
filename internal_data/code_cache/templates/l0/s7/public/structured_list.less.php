<?php
// FROM HASH: cb320e3b6a79d3aef912f4e3f8ce95e0
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '@_structItem-avatarSize: 36px;
@_structItem-avatarSizeExpanded: 48px;
@_structItem-avatarSizeEnd: @avatar-xxs;
// @_structItem-cellPaddingH: ((@xf-paddingMedium) + (@xf-paddingLarge)) / 2; // average
// @_structItem-cellPaddingV: @xf-paddingLarge;
@_structItem-cellPaddingH: @xf-uix_structPaddingH; 
@_structItem-cellPaddingV: @xf-uix_structPaddingV;

.structItemContainer
{
	display: table;
	table-layout: fixed;
	border-collapse: collapse;
	list-style: none;
	margin: 0;
	padding: 0;
	width: 100%;
}

.structItemContainer-group
{
	display: table-row-group;
}

' . '

.block-minorHeader.uix_threadListSeparator {
	display: flex;
	align-items: center;
	.xf-uix_threadListSeparator();
}

.structItemContainer .structItemContainer-group--sticky {
	.structItem--thread {
		.xf-uix_discussionListItemSticky();
	}
}

.structItem.is-mod-selected .structItem-cell--meta,
.structItem--thread.is-deleted .structItem-cell--meta{background: none;}

.structItem
{
	display: table;
	border-top: @xf-borderSize solid @xf-borderColorFaint;
	list-style: none;
	margin: 0;
	padding: 0;
	width: 100%;
	.xf-uix_discussionListItem();

	.pairs {line-height: inherit;}

	&:nth-child(even) {
		background-color: @xf-uix_discussionListItemEven;
	}

	&--thread:hover {
		background-color: @xf-uix_discussionListItemHover;

		';
	if ($__templater->func('property', array('uix_discussionListItemHover', ), false)) {
		$__finalCompiled .= '
			.structItem-cell--meta {
				background-color: transparent
					}
			';
	}
	$__finalCompiled .= '
			}

		&.is-highlighted,
		&.is-moderated
		{
			// background: @xf-contentHighlightBg;
			.xf-uix_discussionListItemModerated();
			}

		&.is-deleted
		{
			opacity: .7;

			.structItem-title > *
			{
			text-decoration: line-through;
			}
}

&.structItem--thread.is-moderated {.xf-uix_discussionListItemModerated();}
&.structItem--thread.is-deleted {.xf-uix_discussionListItemDeleted();}

&.is-mod-selected
{
	background: @xf-inlineModHighlightColor;
	opacity: 1;
}

&:last-child {
	border-bottom-left-radius: @xf-blockBorderRadius;
	border-bottom-right-radius: @xf-blockBorderRadius;
}
}

.threadListSeparator {
	.xf-uix_threadListSeparator();
}

.structItem-cell
{
	display: table-cell;
	vertical-align: top;
	padding: @_structItem-cellPaddingV @_structItem-cellPaddingH;

	.structItem--middle &
	{
		vertical-align: middle;
	}

	&.structItem-cell--vote
	{
		width: (40px + (@_structItem-cellPaddingH) * 2);
	}

	&.structItem-cell--icon
	{
		width: ((@_structItem-avatarSize) + (@_structItem-cellPaddingH) * 2);
		position: relative;

		&.structItem-cell--iconExpanded
		{
			width: ((@_structItem-avatarSizeExpanded) + (@_structItem-cellPaddingH) * 2);
		}

		&.structItem-cell--iconEnd
		{
			width: ((@_structItem-avatarSizeEnd) + (@_structItem-cellPaddingH) * 2);
			padding-left: @_structItem-cellPaddingH / 2;

			.structItem-iconContainer
			{
				padding-top: @xf-paddingMedium /2;
			}
		}

		&.structItem-cell--iconFixedSmall
		{
			width: (60px + (@_structItem-cellPaddingH) * 2);
		}

		&.structItem-cell--iconFixedSmallest
		{
			width: ((@_structItem-avatarSizeEnd) + (@_structItem-cellPaddingH) * 2);
		}

		.solutionIcon
		{
			padding-left: 0;
			padding-right: 0;
		}
	}

	&.structItem-cell--meta
	{
		width: 135px;
		.xf-uix_metaCell();

		@media (max-width: @xf-uix_discussionListCollapseWidth) {
			background: none;
			// padding: 0;
			border: none;

			.pairs {line-height: inherit;}
		}
	}

	&.structItem-cell--latest
	{
		width: 190px;
		text-align: right;
		font-size: @xf-fontSizeSmaller;

		a:not(:hover) {color: @xf-textColorMuted;}
	}
}

.structItem-iconContainer
{
	position: relative;

	img
	{
		display: block;
		width: 100%;
	}

	.avatar
	{
		.m-avatarSize(@_structItem-avatarSize);

		&.avatar--xxs
		{
			.m-avatarSize(@_structItem-avatarSizeEnd);
		}
	}

	.structItem-secondaryIcon
	{
		position: absolute;
		right: -5px;
		bottom: -5px;

		.m-avatarSize(@_structItem-avatarSize / 2  + 2px);
	}

	.structItem-cell--iconExpanded &
	{
		.avatar
		{
			.m-avatarSize(@_structItem-avatarSizeExpanded);
		}
		.structItem-secondaryIcon
		{
			.m-avatarSize(@_structItem-avatarSizeExpanded / 2 - 2px);
		}
	}
}

.structItem-title
{
	font-size: @xf-fontSizeLarge;
	font-weight: @xf-fontWeightNormal;
	margin: 0;
	padding: 0;
	.xf-uix_discussionListTitle();

	.label
	{
		font-weight: @xf-fontWeightNormal;
	}

	a {
		color: inherit;
		&:hover {color: @xf-linkHoverColor;}
	}

	.is-unread &
	{
		font-weight: @xf-fontWeightHeavy;
		.xf-uix_discussionListTitleUnread();
	}
}

.structItem-minor
{
	font-size: @xf-fontSizeSmaller;
	color: @xf-textColorMuted;

	.structItem-cell--main & {clear: both;}

	.m-hiddenLinks();
}

.structItem-parts
{
	.m-listPlain();
	display: inline;

	> li
	{
		display: inline;
		margin: 0;
		padding: 0;

		&:nth-child(even)
		{
			color: @xf-textColorDimmed;
		}

		&:before
		{
			content: "\\00B7\\20";
		}

		&:first-child:before
		{
			content: "";
			display: none;
		}
	}
}

.structItem-pageJump
{
	margin-left: 8px;
	font-size: @xf-fontSizeSmallest;

	a
	{
		.xf-chip();
		text-decoration: none;
		border-radius: @xf-borderRadiusSmall;
		padding: 0 3px;
		opacity: .5;
		.m-transition();

		.structItem:hover &,
		.has-touchevents &
		{
			opacity: 1;
		}

		&:hover
		{
			text-decoration: none;
			.xf-chipHover();
		}
	}
}

.structItem-statuses,
.structItem .structItem-extraInfo
{
	.m-listPlain();
	float: right;

	label.iconic--checkbox i {text-align: right;}

	> li
	{
		float: left;
		margin-left: 8px;
	}

	input[type=checkbox]
	{
		.m-checkboxAligner();
	}
}

.structItem-statuses .reactionSummary
{
	vertical-align: -2px;
}

.structItem-extraInfo .reactionSummary
{
	vertical-align: middle;
}

.structItem-status
{
	&::before
	{
		.m-faBase();
		display: inline-block;
		font-size: 90%;
		color: @xf-textColorMuted;
	}

	&--deleted::before { .m-faContent(@fa-var-trash-alt, .875em); }
	&--locked::before { .m-faContent(@fa-var-lock, .875em); }
	&--moderated::before { .m-faContent(@fa-var-shield, 1em); color: @xf-textColorAttention; }
	&--redirect::before { .m-faContent(@fa-var-external-link, 1em); }
	&--starred::before { .m-faContent(@fa-var-star, 1.125em); color: @xf-starFullColor; }
	&--sticky::before { .m-faContent(@fa-var-thumbtack, .75em); }
	&--watched::before { .m-faContent(@fa-var-bell, .875em); }

	&--solved::before { .m-faContent(@fa-var-check-circle, 1em); color: @xf-votePositiveColor; }
	&--attention::before { .m-faContent(@fa-var-bullhorn, 1.125em); color: @xf-textColorAttention; }
	&--upvoted::before { .m-faContent(@fa-var-thumbs-up, 1em); }
	&--downvoted::before { .m-faContent(@fa-var-thumbs-down, 1em); }
}

.structItem.structItem--note
{
	.xf-contentHighlightBase();
	color: @xf-textColorFeature;

	.structItem-cell
	{
		padding-top: @_structItem-cellPaddingV / 2;
		padding-bottom: @_structItem-cellPaddingV / 2;
		font-size: @xf-fontSizeSmaller;
		text-align: center;
	}
}

@media (max-width: @xf-responsiveWide)
{
	.structItem-cell
	{
		vertical-align: top;

		&.structItem-cell--meta
		{
			width: 115px;
			font-size: @xf-fontSizeSmaller;
		}

		&.structItem-cell--latest
		{
			width: 140px;
			font-size: @xf-fontSizeSmaller;
		}
	}
}

@media (max-width: @xf-uix_discussionListCollapseWidth)
{
	.structItem-cell
	{

		//padding: (@_structItem-cellPaddingV) / 2 @_structItem-cellPaddingH;

		&.structItem-cell--icon
		{
			.structItem-cell + &
			{
				padding-left: 0;
				width: ((@_structItem-avatarSize) + (@_structItem-cellPaddingH));
			}
		}

		&.structItem-cell--main,
		&.structItem-cell--newThread
		{
			display: block;
			padding-bottom: .2em;

			.structItem-cell + &
			{
				padding-left: 0;
			}
		}

		&.structItem-cell--meta
		{
			display: block;
			width: auto;
			float: left;
			padding-top: 0;
			padding-left: 0;
			padding-right: 0;
			color: @xf-textColorMuted;
			font-size: @xf-fontSizeSmaller;
			line-height: 1;

			dd:before {
				margin-right: 2px;
			}

			.structItem-minor
			{
				display: none;
			}

			.pairs
			{
				> dt,
				> dd
				{
					display: inline;
					float: none;
					margin: 0;
				}

				dt {display: none;}
				dd:before {
					.m-faBase();
					.m-faContent(@fa-var-comment-alt);
				}
				dd:after {
					content: "\\00A0\\00B7\\20";
					color: @xf-textColorMuted;
				}
			}
		}

		&.structItem-cell--latest
		{
			display: block;
			width: auto;
			float: left;
			padding-top: 0;
			padding-left: 0;
			display: flex;
			align-items: center;
			line-height: 1;
			flex-wrap: wrap;

			a {order: 2;}

			.structItem-minor {
				order: 1; 

				&:after {order: 2;}
			}

			.uix_mobileNodeTitle {order: 3;}

			&:before
			{
				// content: "\\00A0\\00B7\\20";
				color: @xf-textColorMuted;
			}

			a
			{
				color: @xf-textColorMuted;
			}

			.structItem-minor
			{
				display: inline-flex;

				&:before {
					.m-faBase();
					.m-faContent(@fa-var-reply);
					margin-right: 2px;
				}

				&:after {
					content: " ' . 'replied' . ' ";

					.uix_posterIsUser& {
						content: " ' . 'posted' . ' ";
					}

					white-space: pre;
				}

			}
		}

		&.structItem-cell--iconEnd
		{
			display: none;
		}
	}

	.structItem-pageJump,
	.structItem-extraInfoMinor
	{
		display: none;
	}

	.is-unread .structItem-latestDate
	{
		font-weight: @xf-fontWeightNormal;
	}
}

@media (max-width: @xf-uix_discussionListCollapseWidth) {
	.structItem .lastPostAv {display: none;}
}

/* if sidebar, then break discussion list earlier */

.p-body-main--withSidebar {

	@media (min-width: @xf-uix_sidebarBreakpoint) and (max-width: 1200px)
	{
		.structItem-cell
		{

			//padding: (@_structItem-cellPaddingV) / 2 @_structItem-cellPaddingH;

			&.structItem-cell--main
			{
				display: block;
				padding-bottom: .2em;
				padding-left: 0;
			}

			&.structItem-cell--meta
			{
				display: block;
				width: auto;
				float: left;
				padding-top: 0;
				padding-left: 0;
				padding-right: 0;
				color: @xf-textColorMuted;
				font-size: @xf-fontSizeSmaller;
				background: none;
				// padding: 0;
				border: none;
				line-height: 1;

				dd:before {
					margin-right: 2px;
				}

				.pairs {line-height: inherit;}

				.structItem-minor
				{
					display: none;
				}

				.pairs
				{
					> dt,
					> dd
					{
						display: inline;
						float: none;
						margin: 0;
					}

					dt {display: none;}
					dd:before {
						.m-faBase();
						.m-faContent(@fa-var-comment-alt);
					}
					dd:after {
						content: "\\00A0\\00B7\\20";
						color: @xf-textColorMuted;
					}
				}
			}

			&.structItem-cell--latest
			{
				display: block;
				width: auto;
				float: left;
				padding-top: 0;
				padding-left: 0;
				display: flex;
				flex-wrap: wrap;
				align-items: center;
				line-height: 1;

				a {order: 2;}

				.structItem-minor {
					order: 1; 

					&:after {order: 2;}
				}

				.uix_mobileNodeTitle {order: 3;}

				&:before
				{
					// content: "\\00A0\\00B7\\20";
					color: @xf-textColorMuted;
				}

				a
				{
					color: @xf-textColorMuted;
				}

				.structItem-minor
				{
					display: inline-block;

					&:before {
						.m-faBase();
						.m-faContent(@fa-var-reply);
					}

					&:after {
						content: \' replied \';
						white-space: pre;
					}
				}
			}

			&.structItem-cell--iconEnd
			{
				display: none;
			}
		}

		.structItem-pageJump,
		.structItem-extraInfoMinor
		{
			display: none;
		}
	}

	.structItem.structItem--quickCreate
	{
		.structItem-cell--icon,
		.structItem-cell--vote
		{
			display: none;
		}

		.structItem-cell--newThread
		{
			padding-left: @_structItem-cellPaddingH;
			padding-bottom: @_structItem-cellPaddingH;
		}

		.is-unread .structItem-latestDate
		{
			font-weight: @xf-fontWeightNormal;
		}
	}

	@media (min-width: @xf-uix_sidebarBreakpoint) and (max-width: 1200px) {
		.structItem .lastPostAv {display: none;}
	}
}

@media (max-width: @xf-responsiveNarrow)
{
	.structItem-parts
	{
		.structItem-startDate
		{
			display: none;
		}
	}

	.structItem.structItem--quickCreate
	{
		.structItem-cell--icon,
		.structItem-cell--vote
		{
			display: none;
		}

		.structItem-cell--newThread
		{
			padding-left: @_structItem-cellPaddingH;
			padding-bottom: @_structItem-cellPaddingH;
		}
	}
}';
	return $__finalCompiled;
}
);