<?php
// FROM HASH: c13215677f0ba6a8a16763ec33a0f7c8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/*
	----------------
	
	XENTR.NET STYLES
	
	----------------
*/

// Pre Loader
#preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: @xf-pageBg;
    /* change if the mask should have another color then white */
    z-index: 20000;
    /* makes sure it stays on top */
}


// Background choser
#colours {
	display: -webkit-flex;
	-webkit-justify-content: space-between;
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	align-items: center;
	list-style: none;
	padding-bottom: @xf-paddingLarge;
	
	.palette {
		display: block;
		flex: 1 1 auto;
		text-align: center;
		cursor: pointer;
		.xf-xentr_background_chooser_palette();
	}
	
}

// Background choser public color
.bgChooser1 .gradient {
    background-image: @styleSelector1;
}
.bgChooser2 .gradient {
    background-image: @styleSelector2;
}
.bgChooser3 .gradient {
    background-image: @styleSelector3;
}
.bgChooser4 .gradient {
    background-image: @styleSelector4;
}
.bgChooser5 .gradient {
    background-image: @styleSelector5;
}
.bgChooser6 .gradient {
    background-image: @styleSelector6;
}
.bgChooser7 .gradient {
    background-image: @styleSelector7;
}

// Background choser color palette
#colours .styleSelector1 {
    background-image: @styleSelector1;
}
#colours .styleSelector2 {
    background-image: @styleSelector2;
}
#colours .styleSelector3 {
    background-image: @styleSelector3;
}
#colours .styleSelector4 {
    background-image: @styleSelector4;
}
#colours .styleSelector5 {
    background-image: @styleSelector5;
}
#colours .styleSelector6 {
    background-image: @styleSelector6;
}
#colours .styleSelector7 {
    background-image: @styleSelector7;
}

// VARIABLES

@styleSelector1: linear-gradient(-270deg, @xf-xentr_blue_color 0%, xf-diminish(@xf-xentr_blue_color, 15%) 100%);

@styleSelector2: linear-gradient(-270deg, @xf-xentr_red_color 0%, xf-diminish(@xf-xentr_red_color, 15%) 100%);

@styleSelector3: linear-gradient(-270deg, @xf-xentr_green_color 0%, xf-diminish(@xf-xentr_green_color, 15%) 100%);

@styleSelector4: linear-gradient(-270deg, @xf-xentr_orange_color 0%, xf-diminish(@xf-xentr_orange_color, 15%) 100%);

@styleSelector5: linear-gradient(-270deg, @xf-xentr_voilet_color 0%, xf-diminish(@xf-xentr_voilet_color, 15%) 100%);

@styleSelector6: linear-gradient(-270deg, @xf-xentr_slate_color 0%, xf-diminish(@xf-xentr_slate_color, 15%) 100%);

@styleSelector7: linear-gradient(-270deg, @xf-xentr_dark_color 0%, xf-diminish(@xf-xentr_dark_color, 15%) 100%);

// CUSTOM COLORS

// Blue
// Blue Background

.bgChooser1 .p-staffBar {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_blue_color, 10%), xf-intensify(@xf-xentr_blue_color, 15%) 100%);
    border-bottom: 1px solid xf-diminish(@xf-xentr_blue_color, 5%);
}

.bgChooser1 .new-tickers,
.bgChooser1 .visitor-card:before,
.bgChooser1 .visitor-card:after {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_blue_color, 10%), xf-diminish(@xf-xentr_blue_color, 15%) 100%);
}

.bgChooser1 .p-nav-scroller .hScroller-action.hScroller-action--end,
.bgChooser1 .p-nav-scroller .hScroller-action.hScroller-action--start {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_blue_color, 10%), fade(@xf-xentr_blue_color, 15%) 100%);
}

.bgChooser1 .new-tickers .new-tickers-stair,
.bgChooser1 .new-tickers-wrap:before,
.bgChooser1 .new-tickers-wrap:after,
.bgChooser1 .node-body .node-icon i:after {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_blue_color, 7%), xf-diminish(@xf-xentr_blue_color, 7%) 100%);
}

.bgChooser1 .p-nav-list>li:after {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_blue_color, 30%), xf-diminish(@xf-xentr_blue_color, 45%) 100%);
}

.bgChooser1 .p-main-footer {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_blue_color, 2%), xf-intensify(@xf-xentr_blue_color, 3%) 100%);
}
.bgChooser1 .p-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_blue_color, 1%), xf-diminish(@xf-xentr_blue_color, 3%) 100%);
}
.bgChooser1 .xtr-extra-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_blue_color, 3%), xf-diminish(@xf-xentr_blue_color, 5%) 100%);
}

// Blue Color
.bgChooser1 .reaction-stat .fad {
	color: xf-diminish(@xf-xentr_blue_color, 10%);
}

// Red Background
.bgChooser2 .p-staffBar {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_red_color, 10%), xf-intensify(@xf-xentr_red_color, 15%) 100%);
    border-bottom: 1px solid xf-diminish(@xf-xentr_red_color, 5%);
}

.bgChooser2 .new-tickers,
.bgChooser2 .visitor-card:before,
.bgChooser2 .visitor-card:after
{
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_red_color, 10%), xf-diminish(@xf-xentr_red_color, 15%) 100%);
}

.bgChooser2 .p-nav-scroller .hScroller-action.hScroller-action--end,
.bgChooser2 .p-nav-scroller .hScroller-action.hScroller-action--start {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_red_color, 10%), fade(@xf-xentr_red_color, 15%) 100%);
}

.bgChooser2 .new-tickers .new-tickers-stair,
.bgChooser2 .new-tickers-wrap:before,
.bgChooser2 .new-tickers-wrap:after,
.bgChooser2 .node-body .node-icon i:after {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_red_color, 7%), xf-diminish(@xf-xentr_red_color, 7%) 100%);
}

.bgChooser2 .p-nav-list>li:after {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_red_color, 30%), xf-diminish(@xf-xentr_red_color, 45%) 100%);
}

.bgChooser2 .p-main-footer {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_red_color, 2%), xf-intensify(@xf-xentr_red_color, 3%) 100%);
}
.bgChooser2 .p-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_red_color, 1%), xf-diminish(@xf-xentr_red_color, 3%) 100%);
}
.bgChooser2 .xtr-extra-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_red_color, 3%), xf-diminish(@xf-xentr_red_color, 5%) 100%);
}

// Red Color
.bgChooser2 .reaction-stat .fad {
	color: xf-diminish(@xf-xentr_red_color, 10%);
}

// Green Background
.bgChooser3 .p-staffBar {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_green_color, 10%), xf-intensify(@xf-xentr_green_color, 15%) 100%);
    border-bottom: 1px solid xf-diminish(@xf-xentr_green_color, 5%);
}

.bgChooser3 .new-tickers,
.bgChooser3 .visitor-card:before,
.bgChooser3 .visitor-card:after
{
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_green_color, 10%), xf-diminish(@xf-xentr_green_color, 15%) 100%);
}

.bgChooser3 .p-nav-scroller .hScroller-action.hScroller-action--end,
.bgChooser3 .p-nav-scroller .hScroller-action.hScroller-action--start {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_green_color, 10%), fade(@xf-xentr_green_color, 15%) 100%);
}

.bgChooser3 .new-tickers .new-tickers-stair,
.bgChooser3 .new-tickers-wrap:before,
.bgChooser3 .new-tickers-wrap:after,
.bgChooser3 .node-body .node-icon i:after {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_green_color, 7%), xf-diminish(@xf-xentr_green_color, 7%) 100%);
}

.bgChooser3 .p-nav-list>li:after {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_green_color, 30%), xf-diminish(@xf-xentr_green_color, 45%) 100%);
}

.bgChooser3 .p-main-footer {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_green_color, 2%), xf-intensify(@xf-xentr_green_color, 3%) 100%);
}
.bgChooser3 .p-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_green_color, 1%), xf-diminish(@xf-xentr_green_color, 3%) 100%);
}
.bgChooser3 .xtr-extra-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_green_color, 3%), xf-diminish(@xf-xentr_green_color, 5%) 100%);
}

// Green Color
.bgChooser3 .reaction-stat .fad {
	color: xf-diminish(@xf-xentr_green_color, 15%);
}

// Orange
.bgChooser4 .p-staffBar {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_orange_color, 10%), xf-intensify(@xf-xentr_orange_color, 15%) 100%);
    border-bottom: 1px solid xf-diminish(@xf-xentr_orange_color, 5%);
}

.bgChooser4 .new-tickers,
.bgChooser4 .visitor-card:before,
.bgChooser4 .visitor-card:after
{
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_orange_color, 10%), xf-diminish(@xf-xentr_orange_color, 15%) 100%);
}
.bgChooser4 .p-nav-scroller .hScroller-action.hScroller-action--end,
.bgChooser4 .p-nav-scroller .hScroller-action.hScroller-action--start {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_orange_color, 10%), fade(@xf-xentr_orange_color, 15%) 100%);
}

.bgChooser4 .new-tickers .new-tickers-stair,
.bgChooser4 .new-tickers-wrap:before,
.bgChooser4 .new-tickers-wrap:after,
.bgChooser4 .node-body .node-icon i:after {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_orange_color, 7%), xf-diminish(@xf-xentr_orange_color, 7%) 100%);
}

.bgChooser4 .p-nav-list>li:after {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_orange_color, 30%), xf-diminish(@xf-xentr_orange_color, 45%) 100%);
}

.bgChooser4 .p-main-footer {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_orange_color, 2%), xf-intensify(@xf-xentr_orange_color, 3%) 100%);
}
.bgChooser4 .p-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_orange_color, 1%), xf-diminish(@xf-xentr_orange_color, 3%) 100%);
}
.bgChooser4 .xtr-extra-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_orange_color, 3%), xf-diminish(@xf-xentr_orange_color, 5%) 100%);
}

// Orange Color
.bgChooser4 .reaction-stat .fad {
	color: xf-diminish(@xf-xentr_orange_color, 10%);
}

// Voilet
.bgChooser5 .p-staffBar {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_voilet_color, 10%), xf-intensify(@xf-xentr_voilet_color, 15%) 100%);
    border-bottom: 1px solid xf-diminish(@xf-xentr_voilet_color, 5%);
}

.bgChooser5 .new-tickers,
.bgChooser5 .visitor-card:before,
.bgChooser5 .visitor-card:after
{
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_voilet_color, 10%), xf-diminish(@xf-xentr_voilet_color, 15%) 100%);
}
.bgChooser5 .p-nav-scroller .hScroller-action.hScroller-action--end,
.bgChooser5 .p-nav-scroller .hScroller-action.hScroller-action--start {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_voilet_color, 10%), fade(@xf-xentr_voilet_color, 15%) 100%);
}

.bgChooser5 .new-tickers .new-tickers-stair,
.bgChooser5 .new-tickers-wrap:before,
.bgChooser5 .new-tickers-wrap:after,
.bgChooser5 .node-body .node-icon i:after {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_voilet_color, 7%), xf-diminish(@xf-xentr_voilet_color, 7%) 100%);
}

.bgChooser5 .p-nav-list>li:after {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_voilet_color, 30%), xf-diminish(@xf-xentr_voilet_color, 45%) 100%);
}

.bgChooser5 .p-main-footer {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_voilet_color, 2%), xf-intensify(@xf-xentr_voilet_color, 3%) 100%);
}
.bgChooser5 .p-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_voilet_color, 1%), xf-diminish(@xf-xentr_voilet_color, 3%) 100%);
}
.bgChooser5 .xtr-extra-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_voilet_color, 3%), xf-diminish(@xf-xentr_voilet_color, 5%) 100%);
}

// Voilet Color
.bgChooser5 .reaction-stat .fad {
	color: xf-diminish(@xf-xentr_voilet_color, 10%);
}

// Slate
.bgChooser6 .p-staffBar {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_slate_color, 10%), xf-intensify(@xf-xentr_slate_color, 15%) 100%);
    border-bottom: 1px solid xf-diminish(@xf-xentr_slate_color, 5%);
}

.bgChooser6 .new-tickers,
.bgChooser6 .visitor-card:before,
.bgChooser6 .visitor-card:after
{
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_slate_color, 10%), xf-diminish(@xf-xentr_slate_color, 15%) 100%);
}
.bgChooser6 .new-tickers .new-tickers-stair,
.bgChooser6 .new-tickers-wrap:before,
.bgChooser6 .new-tickers-wrap:after,
.bgChooser6 .node-body .node-icon i:after {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_slate_color, 7%), xf-diminish(@xf-xentr_slate_color, 7%) 100%);
}

.bgChooser6 .p-nav-scroller .hScroller-action.hScroller-action--end,
.bgChooser6 .p-nav-scroller .hScroller-action.hScroller-action--start {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_slate_color, 10%), fade(@xf-xentr_slate_color, 15%) 100%);
}

.bgChooser6 .p-nav-list>li:after {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_slate_color, 30%), xf-diminish(@xf-xentr_slate_color, 45%) 100%);
}

.bgChooser6 .p-main-footer {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_slate_color, 2%), xf-intensify(@xf-xentr_slate_color, 3%) 100%);
}
.bgChooser6 .p-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_slate_color, 1%), xf-diminish(@xf-xentr_slate_color, 3%) 100%);
}
.bgChooser6 .xtr-extra-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_slate_color, 3%), xf-diminish(@xf-xentr_slate_color, 5%) 100%);
}

// Slate Color
.bgChooser6 .reaction-stat .fad {
	color: xf-diminish(@xf-xentr_slate_color, 10%);
}

// Dark
.bgChooser7 .p-staffBar {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_dark_color, 10%), xf-intensify(@xf-xentr_dark_color, 15%) 100%);
    border-bottom: 1px solid xf-diminish(@xf-xentr_dark_color, 5%);
}

.bgChooser7 .new-tickers,
.bgChooser7 .visitor-card:before,
.bgChooser7 .visitor-card:after
{
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_dark_color, 10%), xf-diminish(@xf-xentr_dark_color, 15%) 100%);
}
.bgChooser7 .new-tickers .new-tickers-stair,
.bgChooser7 .new-tickers-wrap:before,
.bgChooser7 .new-tickers-wrap:after,
.bgChooser7 .node-body .node-icon i:after {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_dark_color, 7%), xf-diminish(@xf-xentr_dark_color, 7%) 100%);
}

.bgChooser7 .p-nav-scroller .hScroller-action.hScroller-action--end,
.bgChooser7 .p-nav-scroller .hScroller-action.hScroller-action--start {
    background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_dark_color, 10%), fade(@xf-xentr_dark_color, 15%) 100%);
}

.bgChooser7 .p-nav-list>li:after {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_dark_color, 30%), xf-diminish(@xf-xentr_dark_color, 45%) 100%);
}

.bgChooser7 .p-main-footer {
	background-image: linear-gradient(-270deg, xf-intensify(@xf-xentr_dark_color, 2%), xf-intensify(@xf-xentr_dark_color, 3%) 100%);
}
.bgChooser7 .p-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_dark_color, 1%), xf-diminish(@xf-xentr_dark_color, 3%) 100%);
}
.bgChooser7 .xtr-extra-footer {
	background-image: linear-gradient(-270deg, xf-diminish(@xf-xentr_dark_color, 3%), xf-diminish(@xf-xentr_dark_color, 5%) 100%);
}

// Dark Color
.bgChooser7 .reaction-stat .fad {
	color: xf-diminish(@xf-xentr_dark_color, 10%);
}';
	return $__finalCompiled;
}
);