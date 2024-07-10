<?php
// FROM HASH: 31aa672a171233a43104d9255adbcf51
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.xtr-extra-footer {
	position: relative;
	background: @xf-publicFooter--background-color;
	.xtr-extra-footer-row {
		position: relative;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		-ms-flex-flow: row wrap;
		flex-flow: row wrap;
		min-width: 0;
		word-wrap: break-word;
		border: 0;
		background-clip: border-box;
		border-radius: 4px;
		.block-icon {
			display: none;
		}
	}
	.block-grid {
		flex-basis: ' . $__templater->func('property', array('xtr_extra_footer_block_width', ), true) . 'px;
		padding: calc(@xf-xtr_extra_footer_block_spacing / 3);
		margin: 0;
		flex-grow: 1;
		min-width: 0;
		@media (min-width: 1000px)
		{
			&:nth-of-type(2) {
				flex-basis: (@xf-xtr_extra_footer_block_width / 2px );
			}
			&:nth-of-type(3) {
				flex-basis: (@xf-xtr_extra_footer_block_width / 2px );
			}
		}	
		.block {
			margin: 0;
		}
		.blockLink {
			padding: 5px;
			&:hover {
				background: transparent;
			}
			a {
				color: @xf-publicFooterLink--color;
				&:hover {
					color: xf-intensify(@xf-publicFooterLink--color, 5%);
				}
			}
			i {
				margin-right: 5px;
			}
		}
	}
	.block-container {
		border: none;
		box-shadow: none;
		background: none;
		.block-footer {
			border: none;
			color: @xf-publicFooterLink--color;
    		background: fade(@xf-paletteColor5, 15%);
			border-radius: 4px;
		}
	}
	.block-minorHeader {
		position: relative;
		background: none;
		display: block !important;
		color: @xf-publicFooter--color;
		border-bottom: @xf-borderSize solid @xf-borderColor;
		text-transform: uppercase;
		padding: 10px !important;
		&:before {
			display: none;
		}
		i {
			margin-right: 10px;
		}
	}
	.block-row {
		color: @xf-publicFooter--color;
		a {
			color: @xf-publicFooter--color;
		}
	}
}';
	return $__finalCompiled;
}
);