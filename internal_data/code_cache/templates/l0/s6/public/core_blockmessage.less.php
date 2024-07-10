<?php
// FROM HASH: 75c3397943c6eadb4a9ec59806a39fee
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// ############################ BLOCK MESSAGE ###################

.block-rowMessage
{
	margin: @xf-blockPaddingV 0;
	padding: @xf-blockPaddingV @xf-blockPaddingH;
	.xf-blockBorder();
	border-radius: @xf-blockBorderRadius;

	.m-clearFix();

	&:first-child
	{
		margin-top: 0;
	}

	&:last-child
	{
		margin-bottom: 0;
	}

	&.block-rowMessage--small
	{
		font-size: @xf-fontSizeSmall;
		padding: @xf-blockPaddingV/2 @xf-blockPaddingH/2;
	}

	&.block-rowMessage--center
	{
		text-align: center;
	}

	.m-blockMessageVariants();
}

.blockMessage
{
	margin-bottom: @xf-elementSpacer;
	padding: @xf-blockPaddingV @xf-blockPaddingH;
	.xf-contentBase();
	.xf-blockBorder();
	border-radius: @xf-blockBorderRadius;
	.xf-uix_blockMessage();

	.m-clearFix();

	//.m-transition(border, margin;); // edgeSpacerRemoval

	&.blockMessage--none
	{
		background: none;
		border: none;
		color: @xf-textColor;
		padding: 0;
		box-shadow: none;
	}

	&.blockMessage--close
	{
		margin-top: 5px;
		margin-bottom: 5px;
	}

	&.blockMessage--small
	{
		font-size: @xf-fontSizeSmall;
		padding: @xf-paddingMedium;
	}

	&.blockMessage--center
	{
		text-align: center;
	}

	.m-blockMessageVariants();
}

.blockMessage--iconic,
.block-rowMessage--iconic
{
	text-align: left;
	position: relative;
	padding-left: 4em;
	min-height: 4em;

	&:before
	{
		.m-faBase();
		font-size: 280%; // 2 x line height
		position: absolute;
		top: 0;
		left: @xf-paddingMedium;
	}
}

.m-blockMessageVariants()
{
	// note: the double && is correct here -- it enforces output like ".x.x--variant". The extra specificity helps
	// prevent issues from things like media query overrides.

	&&--highlight
	{
		.xf-contentHighlightBase();
	}
	&--highlight&--iconic:before
	{
		.m-faContent(@fa-var-info-circle);
	}

	&&--important
	{
		.xf-contentAccentBase();
		border-left: @xf-borderSizeFeature solid @xf-borderColorAttention;
		// padding: @xf-paddingMedium;

		a { .xf-contentAccentLink(); }
	}
	&--important&--iconic:before
	{
		.m-faContent(@fa-var-exclamation-circle);
		color: @xf-textColorAttention;
		color: @xf-important-featureColor;
	}

	&&--alt
	{
		.xf-contentAltBase();
	}

	&&--success
	{
		border-left: @xf-borderSizeFeature solid @xf-successFeatureColor;
		background: @xf-successBg;
		color: @xf-successColor;

		.m-textColoredLinks();
	}
	&--success&--iconic:before
	{
		.m-faContent(@fa-var-check-circle);
		color: @xf-success-featureColor;
	}

	&&--warning
	{
		border-left: @xf-borderSizeFeature solid @xf-warningFeatureColor;
		background: @xf-warningBg;
		color: @xf-warningColor;

		.m-textColoredLinks();
	}
	&--warning&--iconic:before
	{
		.m-faContent(@fa-var-exclamation-triangle);
		color: @xf-warning-featureColor;
	}

	&&--error
	{
		border-left: @xf-borderSizeFeature solid @xf-errorFeatureColor;
		background: @xf-errorBg;
		color: @xf-errorColor;

		.m-textColoredLinks();
	}
	&--error&--iconic:before
	{
		.m-faContent(@fa-var-times-circle);
		color: @xf-error-featureColor;
	}
}';
	return $__finalCompiled;
}
);