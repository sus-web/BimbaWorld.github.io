<?php
// FROM HASH: 7e16dd6cf6caed0759ce0980b43e5473
return array(
'macros' => array('javascript' => array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<noscript class="js-jsWarning"><div class="blockMessage blockMessage--important blockMessage--iconic u-noJsOnly">' . 'JavaScript отключён. Чтобы полноценно использовать наш сайт, включите JavaScript в своём браузере.' . '</div></noscript>
';
	return $__finalCompiled;
}
),
'browser' => array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="blockMessage blockMessage--important blockMessage--iconic js-browserWarning" style="display: none">' . 'Вы используете устаревший браузер. Этот и другие сайты могут отображаться в нём некорректно.<br />Вам необходимо обновить браузер или попробовать использовать <a href="https://www.google.com/chrome/" target="_blank" rel="noopener">другой</a>.' . '</div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

';
	return $__finalCompiled;
}
);