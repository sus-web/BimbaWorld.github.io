<?php
// FROM HASH: 8516f61cc0de34e235a9ab9dd30366f1
return array(
'macros' => array('threads_list' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'threads' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
';
	$__templater->inlineCss('
.svgIcon.left {
    margin-right: 3px;
}
.stackIcon::before {
    width: 22px;
    height: 22px;
    background-image: url("data:image/svg+xml,%3Csvg width=\'50\' height=\'51\' viewBox=\'0 0 50 51\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M9.49236 33.8109C8.84265 33.8109 8.35512 34.4044 8.48213 35.0416C8.81321 36.7026 9.39417 39.6255 9.68139 41.1202C10.0967 43.2817 11.3449 44.1065 13.0642 44.1065C14.9471 44.1065 16.4734 42.5802 16.4734 40.6974V34.8405C16.4734 34.2719 16.0125 33.8109 15.4439 33.8109H9.49236Z\' fill=\'rgb(80,80,80)\'/%3E%3Cpath d=\'M8.23682 17.3379C4.82515 17.3379 2.05945 20.1036 2.05945 23.5153C2.05945 26.927 4.82515 29.6927 8.23682 29.6927C11.3255 29.6927 12.3551 29.6927 15.4438 29.6927C16.0124 29.6927 16.4733 29.2317 16.4733 28.6631V18.3675C16.4733 17.7989 16.0124 17.3379 15.4438 17.3379C12.3551 17.3379 11.3255 17.3379 8.23682 17.3379Z\' fill=\'rgb(80,80,80)\'/%3E%3Cpath d=\'M21.2285 15.5469C20.8462 15.7177 20.5916 16.0925 20.5916 16.5113V30.5194C20.5916 30.9381 20.8462 31.3129 21.2285 31.4837C21.9799 31.8194 22.7129 32.201 23.4231 32.6271L32.8866 38.3052C35.6315 39.9521 39.1237 37.9749 39.1237 34.7738V12.2568C39.1237 9.05572 35.6315 7.07849 32.8866 8.72544L23.4231 14.4035C22.7129 14.8297 21.9799 15.2112 21.2285 15.5469Z\' fill=\'rgb(80,80,80)\'/%3E%3Cpath d=\'M43.2418 21.4562C43.2418 20.3189 44.1637 19.397 45.3009 19.397V19.397C46.4382 19.397 47.3601 20.3189 47.3601 21.4562V25.5744C47.3601 26.7116 46.4382 27.6335 45.3009 27.6335V27.6335C44.1637 27.6335 43.2418 26.7116 43.2418 25.5744V21.4562Z\' fill=\'rgb(80,80,80)\'/%3E%3C/svg%3E%0A");
}
.svgIcon::before {
    background-size: 100%;
    display: inline-block;
    content: \'\';
    vertical-align: middle;
}

.bold {
		font-weight: 600;
}
		
		
.discussionListItem {
	font-size: 17px;
    position: relative;
    border-radius: 10px;
    transition: background .15s;
	text-decoration: none;
	
}
		
.text_Ads .discussionListItem.item {
    line-height: 3px;
    display: block;
    text-decoration: none;
}
		
.discussionListItem .title {
    overflow: hidden;
    white-space: nowrap;
    max-width: 100%;
    padding-left: 1px;
    text-overflow: ellipsis;
    display: flex;
    align-items: center;
}
		
.text_Ads {
		padding: 10px;
}
		
.text_Ads .discussionListItem.item .title {
    text-overflow: ellipsis;
    overflow: hidden;
    display: block;
	margin-top: 3px;
	margin-bottom: 3px;
	text-decoration: none;
}
');
	$__finalCompiled .= '
';
	$__vars['icon'] = $__templater->preEscaped('<span class="svgIcon left stackIcon"></span>');
	$__finalCompiled .= '
				';
	if ($__templater->func('count', array($__vars['threads'], ), false) > 0) {
		$__finalCompiled .= '
				';
		$__compilerTemp1 = '';
		$__compilerTemp1 .= '
						<div class="text_Ads">
							';
		if ($__templater->isTraversable($__vars['threads'])) {
			foreach ($__vars['threads'] AS $__vars['thread']) {
				$__compilerTemp1 .= '
								<a class="discussionListItem item" href="' . $__templater->escape($__vars['thread']['link']) . '" target="_blank">
								<span class="title bold">
									' . $__templater->escape($__vars['icon']) . '
									' . $__templater->escape($__vars['thread']['name']) . '
								</span>
							</a>
							';
			}
		}
		$__compilerTemp1 .= '
						</div>
				';
		if (strlen(trim($__compilerTemp1)) > 0) {
			$__finalCompiled .= '
				' . $__compilerTemp1 . '
				';
		}
		$__finalCompiled .= '
				';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';

	return $__finalCompiled;
}
);