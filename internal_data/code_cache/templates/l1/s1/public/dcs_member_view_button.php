<?php
// FROM HASH: 6094b9cceeee09644b30ffc354deba87
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->inlineCss('

.icon {
	margin-right: 5px;
    width: 24px;
    height: 24px;
    background-size: 24px 24px;
    vertical-align: middle;
    display: inline-block;
	}	

.threadIcon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' height=\'20\' viewBox=\'0 0 24 24\' width=\'20\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\' transform=\'\'%3E%3Cpath d=\'m0 0h24v24h-24z\' opacity=\'.4\'/%3E%3Cpath d=\'m13.7659611 17.4463926c.2552081-.2233071.5827941-.3463926.9219065-.3463926h3.8121324c1.0029437 0 1.6-.5970563 1.6-1.6v-8c0-1.00294373-.5970563-1.6-1.6-1.6h-12c-1.00294373 0-1.6.59705627-1.6 1.6v8c0 1.0029437.59705627 1.6 1.6 1.6h2.499c.69930428.2016957.69930428.2016957.901.901v2.8285534zm-4.9309611 5.0861074c-.47201029-.3540077-.735-.9786083-.735-1.5325v-2.1h-1.6c-1.99705627 0-3.4-1.4029437-3.4-3.4v-8c0-1.99705627 1.40294373-3.4 3.4-3.4h12c1.9970563 0 3.4 1.40294373 3.4 3.4v8c0 1.9970563-1.4029437 3.4-3.4 3.4h-3.6618384l-3.7247187 3.2591288c-.7328429.7187975-1.58913283.8903538-2.2784429.3733712z\' fill=\'%23828a99\' fill-rule=\'nonzero\' style=\'&%2310; fill: rgb(80,80,80);&%2310;\'/%3E%3C/g%3E%3C/svg%3E");
}
	
.link {
	text-decoration: none;
	}
	
.link:hover {
	text-decoration: none;
	}

');
	$__finalCompiled .= '

<div style="margin-top: 10px; ">
	<a href="' . $__templater->func('link', array('mythreads', null, array('user_id' => $__vars['user']['user_id'], ), ), true) . '" class="link">
		<span class="icon threadIcon"></span>' . 'Threads by ' . $__templater->escape($__vars['user']['username']) . '' . '</a>
</div>';
	return $__finalCompiled;
}
);