<?php
// FROM HASH: 81e5adbd1facbd9455766d6b123442e5
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.new-tickers-wrap {
	position: relative;
	z-index: 1;
	&:before {
		content: \'\';
		width: 50%;
		height: 40px;
		position: absolute;
		top: 0;
		z-index: -1;
		left: 0;
		background-color: ' . $__templater->func('property', array('xentr_new_ticker_left_background', ), true) . ';
	}
	&:after {
		content: \'\';
		width: 50%;
		height: 40px;
		position: absolute;
		top: 0;
		z-index: -1;
		right: 0;
		background-color: ' . $__templater->func('property', array('xentr_new_ticker_right_background', ), true) . ';
	}
}
.new-tickers {
	height: 40px;
	padding: 0 135px;
	background-color: ' . $__templater->func('property', array('xentr_new_ticker_content_background', ), true) . ';
	position: relative;
	overflow: hidden;
	.new-tickers-stairs {
		position: absolute;
		top: 0;
		z-index: 3333;
		.new-tickers-stair {
			&:nth-child(1) {
				width: 170px;
			}
			&:nth-child(2) {
				width: 165px;
			}
			&:nth-child(3) {
				width: 160px;
			}
			&:nth-child(4) {
				width: 155px;
			}
			&:nth-child(5) {
				width: 150px;
			}
			&:nth-child(6) {
				width: 145px;
			}
			&:nth-child(7) {
				width: 140px;
			}
			&:nth-child(8) {
				width: 135px;
			}
		}
	}
	.new-tickers-stairs.left {
		left: 0;
	}
	.new-tickers-stairs.right {
		right: 0;
		-o-transform: rotate(180deg);
		-moz-transform: rotate(180deg);
		-ms-transform: rotate(180deg);
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
	}
	.new-tickers-stairs.red {
		.new-tickers-stair {
			background-color: ' . $__templater->func('property', array('xentr_new_ticker_left_background', ), true) . ';
		}
	}
	.new-tickers-stairs.blue {
		.new-tickers-stair {
			background-color: ' . $__templater->func('property', array('xentr_new_ticker_right_background', ), true) . ';
			&:nth-child(1) {
				width: 50px;
			}
			&:nth-child(2) {
				width: 45px;
			}
			&:nth-child(3) {
				width: 40px;
			}
			&:nth-child(4) {
				width: 35px;
			}
			&:nth-child(5) {
				width: 30px;
			}
			&:nth-child(6) {
				width: 25px;
			}
			&:nth-child(7) {
				width: 20px;
			}
			&:nth-child(8) {
				width: 15px;
			}
		}
	}
	.new-tickers-stair {
		height: 5px;
	}
	.live-news-widget-title-wrap {
		padding: 0;
		position: absolute;
		top: 8px;
		left: 10px;
		z-index: 6666;
		.live-news-widget-title {
			color: ' . $__templater->func('property', array('xentr_new_ticker_title_color', ), true) . ';
			display: block;
			margin: 0;
			&::before {
				.m-faBase();
				content: "\\' . $__templater->func('property', array('xentr_new_ticker_title_icon', ), true) . '";	
				color: inherit;
				margin-right: 3px;
			}
		}
	}
	.new-tickers-text-wrap {
		height: 40px;
	}
}
.tickercontainer {
	width: 100%;
	height: 40px;
	margin: 0;
	padding: 0;
	.mask {
		position: relative;
		left: 10px;
		top: 8px;
	}
}
ul.newsticker {
	position: relative;
	list-style-type: none;
	margin: 0;
	padding: 0;
	li {
		float: left;
		margin: 0;
		padding: 0;
		display: flex;
    	align-items: center;
		&:after {
			content: "";
			display: inline-block;
			width: 1px;
			height: 10px;
			margin: 0 10px;
			background-color: #fff;
		}
		&:last-child {
			&:after {
				background-color: transparent;
			}
		}
	}
	a {
		white-space: nowrap;
		padding: 0;
		color: ' . $__templater->func('property', array('xentr_new_ticker_links_color', ), true) . ';
		font-size: 15px;
	}
}

// Live Ticker Responsive (900px)
@media (max-width: @xf-responsiveWide) 
{
	.new-tickers {
		padding: 0 115px;
		.new-tickers-stairs {
			.new-tickers-stair {
				&:nth-child(1) {
					width: 150px;
				}
				&:nth-child(2) {
					width: 145px;
				}
				&:nth-child(3) {
					width: 140px;
				}
				&:nth-child(4) {
					width: 135px;
				}
				&:nth-child(5) {
					width: 130px;
				}
				&:nth-child(6) {
					width: 125px;
				}
				&:nth-child(7) {
					width: 120px;
				}
				&:nth-child(8) {
					width: 115px;
				}
			}
		}
	}
}

// Live Ticker Responsive (650px)
@media (max-width: @xf-responsiveMedium) 
{
	.new-tickers {
		padding: 0 45px;
		.live-news-widget-title-wrap {
			.live-news-widget-title {
				display: none;
			}
		}	
		.new-tickers-stairs {
			.new-tickers-stair {
				&:nth-child(1) {
					width: 50px;
				}
				&:nth-child(2) {
					width: 45px;
				}
				&:nth-child(3) {
					width: 40px;
				}
				&:nth-child(4) {
					width: 35px;
				}
				&:nth-child(5) {
					width: 30px;
				}
				&:nth-child(6) {
					width: 25px;
				}
				&:nth-child(7) {
					width: 20px;
				}
				&:nth-child(8) {
					width: 15px;
				}
			}
		}
	}
}

// Live Ticker Responsive (480px)
@media (max-width: @xf-responsiveNarrow) 
{
	.new-tickers {
		padding: 0 5px;
		.new-tickers-stairs {
			.new-tickers-stair {
				&:nth-child(1) {
					width: 40px;
				}
				&:nth-child(2) {
					width: 35px;
				}
				&:nth-child(3) {
					width: 30px;
				}
				&:nth-child(4) {
					width: 25px;
				}
				&:nth-child(5) {
					width: 20px;
				}
				&:nth-child(6) {
					width: 15px;
				}
				&:nth-child(7) {
					width: 10px;
				}
				&:nth-child(8) {
					width: 5px;
				}
			}
		}
	}
}';
	return $__finalCompiled;
}
);