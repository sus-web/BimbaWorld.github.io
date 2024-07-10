<?php
// FROM HASH: cc71ee9dbf311cad595792b0fa07da4a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/**** Forum Stats on node list ****/
.p-body-custom-content {
	.block[data-widget-definition="members_online"] {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: justify;
		-ms-flex-pack: justify;
		justify-content: space-between;
		background-color: @xf-contentBg;
		margin-top: 10px;
		margin-bottom: 0;
		border-radius: .5rem .5rem;
		-webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
		box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
		padding: 5px 0;
		.block-icon {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 5.333333%;
			flex: 0 0 5.333333%;
			max-width: 5.333333%;
		}
		.block-container {
			-ms-flex-preferred-size: 0;
			flex-basis: 0;
			-webkit-box-flex: 1;
			-ms-flex-positive: 1;
			flex-grow: 1;
			box-shadow: none;
			max-width: 100%;
			padding-left: 10px;
			padding-right: 10px;
		}
		.block-icon-status {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			-ms-flex-pack: center;
			justify-content: center;
			width: 48px;
			height: 48px;
			border-radius: 999em;
			background: #2196f314;
			color: @xf-textColor;
			font-size: 1.3rem;
			margin: auto;
		}
		.block-minorHeader {
			padding: 5px 0;
			background: none;
			&:before {
				background: none;
			}
		}
		.block-body {
			.block-row {
				padding: 10px 0;
			}
		}
		.block-footer {
			border: none;
			border-radius: 3px;
		}
	}
}

.p-body-sidebar .block[data-widget-definition="members_online"] {
	.block-icon {
		display: none;
	}
}	

@media (max-width: @xf-responsiveWide)
{
	.block-icon {
		display: none;
	}
}';
	return $__finalCompiled;
}
);