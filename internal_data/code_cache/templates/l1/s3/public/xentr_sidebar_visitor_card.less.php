<?php
// FROM HASH: b8133e9dc70c20015155304c5bc38624
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/*---------------------------------
	VISITOR CARD
---------------------------------*/
.visitor-card {
	overflow: hidden;
	position: relative;
	text-align: center;
	border-radius: 5px;
	img {
		object-fit: cover;
		margin: 10px auto;
		border-radius: 50%;
		position: relative;
		transition: all 0.25s linear;
		&:hover {
			transform: scale(1.1);
		}
	}
	&:before {
		content: "";
		position: absolute;
		top: 0;
		right: 0px;
		left: 0px;
		height: 50px;
		background: @xf-blockMinorHeader--background-color;
		box-shadow: inset rgba(255,255,255,0.1) 0px 0px 0px 1px, inset rgba(255,255,255,0.2) 0px 1px 0px;
	}
	&:after {
		content: "";
		position: absolute;
		top: 0px;
		right: 0px;
		left: 0px;
		height: 50px;
		background: @xf-blockMinorHeader--background-color;
		box-shadow: inset rgba(255,255,255,0.1) 0px 0px 0px 1px, inset rgba(255,255,255,0.2) 0px 1px 0px;
	}
	.visitor-card-main {
		padding-top: 20px;
		overflow: hidden;
		position: relative;
		.visitor-card-content {
			position: relative;
			background: @xf-contentBg;
			padding: 50px 0px 10px 0px;
			text-align: center;
		}
		.visitor-card-img {
			position: absolute;
			left: 0px;
			right: 0px;
			z-index: 10;
			top: 0;
			transition: all .25s linear;
			transform-style: preserve-3d;
			.avatar {
				border: 5px solid @xf-contentBg;
				box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
			}
		}
	}

	.visitor-card-icons {
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 10px 0;
		border-top: 1px solid @xf-borderColorFaint;
		border-bottom: 1px solid @xf-borderColorFaint;
		.fab {
			margin: 7px;
			color: @xf-paletteColor3;
			font-size: 20px;
			transition: 250ms ease;
			&:hover {
				transform: translateY(-.5rem)
			}
		}
	}
}

// Reaction Stats
.reaction-stats {
	flex: 1 1 auto;
	justify-content: center;
	.reaction-stat {
		width: auto;
		position: relative;
		
		.reaction-stat-count {
			display: flex;
			justify-content: center;
			font-size: @xf-fontSizeSmall;
		}
		
		.pairs>dt {
    		display: none;
		}
		
		&::after {
			content: \'\';
			width: 1px;
			height: 40px;
			background-color: @xf-borderColor;
			position: absolute;
			top: 32px;
			right: 0;
		}
		
		&:last-child {
			&::after {
				display: none;
			}
		}
	}
}

// Reaction stat icon
.reaction-stat {
	.fad {
		transition: 250ms ease;
		font-size: 20px;
		color: @xf-textColorDimmed;
		&:hover {
			transform: translateY(-.5rem)
		}
	}
}';
	return $__finalCompiled;
}
);