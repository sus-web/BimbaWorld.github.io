<?php
// FROM HASH: 6528f954598a953bc81ad748b38ac4d8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.xentr-statistics.block {
	margin-bottom: 0;
	background-color: @xf-publicFooter--background-color;
	.block-container {
    	background: rgba(255,255,255,0.1);
		border-color: xf-intensify(@xf-publicFooter--background-color, 7%);
	}
}
#xentr_stats {
	display: flex;
	align-items: center;
	justify-content: space-between;
	border-radius: @xf-borderRadiusLarge;
}
.xentr_stats_col {
	background: @xf-publicFooter--background-color;
	flex: 1 1 auto;
	margin: @xf-paddingSmall;
	height: 60px;
	padding: 5px @xf-paddingMedium;
	position: relative;
	border-radius: @xf-borderRadiusMedium;
	-webkit-transition: all 0.3s linear;
	-moz-transition: all 0.3s linear;
	-ms-transition: all 0.3s linear;
	-o-transition: all 0.3s linear;
	transition: all 0.3s linear;
	&:hover {
		.xentr_stats_icon {
			&:before {
				width: 100%;
				height: 100%;
				z-index: -1;
				background: xf-intensify(@xf-publicFooter--background-color, 7%);
				transition: all .5s ease-in-out 0s;
			}
		}
		background: xf-intensify(@xf-publicFooter--background-color, 5%);
		.xentr_stats_text {
			color: fade(@xf-publicFooter--color, 75%);
		}
	}
}
.xentr_stats_icon {
	position: absolute;
	left: 95%;
	background: @xf-publicFooter--background-color;
	width: 40px;
	height: 40px;
	line-height: 30px;
	top: 17%;
	border-radius: 100%;
	border: 5px solid xf-intensify(@xf-chromeBg, 1%);
	z-index: 1;
	text-align: center;
	font-size: 17px;
	color: @xf-publicFooter--color;
	box-shadow: 0 0 7px 0px rgba(0, 0, 0, .50);
	&:before {
		position: absolute;
		left: 50%;
		top: 50%;
		border-radius: 100%;
		width: 0;
		height: 0;
		content: "";
		background: currentcolor;
		transition: all .5s ease-in-out 0s;
		transform: translate(-50%, -50%);
		z-index: -1;
	}
	img {
		margin-top: 10px;
		margin-left: 4px;
	}
	i {
		line-height: inherit;
	}
}
.forum_stats_icon {
	i {
		line-height: inherit;
	}
}
.xentr_stats_text {
	text-align: center;
	font-size: 18px;
	line-height: 24px;
	color: @xf-publicFooter--color;
	font-weight: 500;
	text-transform: uppercase;
	a {
		text-transform: none;
		display: inline-flex;
		color: @xf-publicFooter--color;
		span {
			font-size: @xf-fontSizeNormal;
		}
		&:hover {
			text-decoration: none;
		}
	}
	span {
		display: block;
		font-size: 12px;
		font-weight: 400;
	}
}
@media (max-width: @xf-responsiveWide)
{
	#xentr_stats {
		display: block;
		padding: 1px;
		.xentr_stats_col {
			height: auto;
			padding: 5px;
		}
		.xentr_stats_icon {
			display: none;
		}
		.xentr_stats_text {
			line-height: inherit;
		}
	}
}';
	return $__finalCompiled;
}
);