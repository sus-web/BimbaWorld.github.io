<?php
// FROM HASH: 228a768d88f14ec50e779cd309e807d6
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.xentr-top-section {
	.xf-xentr_top_section_area_background();
	position: relative;
	overflow: hidden;
	z-index: 1;
	.section-content {
		padding: ' . $__templater->func('property', array('xentr_top_section_area_height', ), true) . 'px 0;
		position: relative;
	}
	.section-content-title {
		text-align: center;
		margin: 0;
		.p-body-header {
			background: transparent;
			color: inherit;
			padding: 0;
			border: none;
		}
		.listInline>li:nth-child(3n) {
			display: none;
		}
	}
	.p-description {
		color: inherit;
		font-weight: @xf-fontWeightNormal;
    	line-height: 2;
	}
	.sections-breadcrumbs {
		text-align: center;
	}

	.xentr-message-block {
		display: block;
		text-align: center;	
	}

}
.sections-breadcrumbs {
	ul.top-breadcrumbs {
		display: flex;
		justify-content: center;
		margin: 0;
		list-style: none;
	}
	.top-breadcrumbs {
		>li {
			display: block;
			a {
				color: inherit;
			}
			&:after {
				content: "";
				margin-left: .5em;
				margin-right: .5em;
			}
		}
		li {
			&:after {
				content: "";
				display: inline-block;
				width: 1px;
				height: 10px;
				background-color: #fff;
			}
			&:last-child {
				&:after {
					background-color: transparent;
				}
			}
		}
	}
}';
	return $__finalCompiled;
}
);