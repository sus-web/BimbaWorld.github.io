<?php
// FROM HASH: 91997a8994ff107b413dca1f47beb21c
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.card {
	.xf-xentr_statistics();
	position: relative;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-direction: column;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-clip: border-box;
	.card-body {
		-ms-flex: 1 1 auto;
		flex: 1 1 auto;
		margin: 0;
		.xf-xentr_statistics_body();
		position: relative;
	}
	.xentr_stats_title {
		.xf-xentr_statistics_title();
	}
	.stats-content {
		text-align: right;
		display: flex;
		justify-content: space-between;
		align-items: center;
		.xf-xentr_statistics_content();
		.float-left {
			float: left !important;
		}
		.icon-size {
			font-size: ' . $__templater->func('property', array('xentr_statistics_icon_font_size', ), true) . 'px;
		}
		.text-primary {
			color: ' . $__templater->func('property', array('xentr_threads_icon_color', ), true) . ';
		}
		.text-success {
			color: ' . $__templater->func('property', array('xentr_members_icon_color', ), true) . ';
		}
		.text-warning {
			color: ' . $__templater->func('property', array('xentr_messages_icon_color', ), true) . ';
		}
		.text-danger {
			color: ' . $__templater->func('property', array('xentr_latest_member_icon_color', ), true) . ';
		}
	}
	.number-font {
		font-size: ' . $__templater->func('property', array('xentr_statistics_number_font_size', ), true) . 'px;
		.xf-xentr_statistics_number_style();
		a {
			font-size: @xf-fontSizeNormal;
		}
	}
}

';
	if ($__templater->func('property', array('xentr_statistics_enabled', ), false) AND (($__templater->func('property', array('xentr_statistics_location', ), false) == 'container_breadcrumb_top_above') AND ((((($__vars['template'] == 'forum_list') AND (!$__templater->func('property', array('xentr_statistics_all_page', ), false)))) OR $__templater->func('property', array('xentr_statistics_all_page', ), false))))) {
		$__finalCompiled .= '
.card {
    margin-bottom: 10px;
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xentr_statistics_enabled', ), false) AND (($__templater->func('property', array('xentr_statistics_location', ), false) == 'container_breadcrumb_top_below') AND ((((($__vars['template'] == 'forum_list') AND (!$__templater->func('property', array('xentr_statistics_all_page', ), false)))) OR $__templater->func('property', array('xentr_statistics_all_page', ), false))))) {
		$__finalCompiled .= '
.card {
    margin-bottom: @xf-paddingMedium;
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xentr_statistics_enabled', ), false) AND (($__templater->func('property', array('xentr_statistics_location', ), false) == 'container_content_above') AND ((((($__vars['template'] == 'forum_list') AND (!$__templater->func('property', array('xentr_statistics_all_page', ), false)))) OR $__templater->func('property', array('xentr_statistics_all_page', ), false))))) {
		$__finalCompiled .= '
.card {
    margin-bottom: @xf-paddingMedium;
}
.xentr-main {
    margin-top: -(@xf-paddingMedium) !important;
}
';
	}
	return $__finalCompiled;
}
);