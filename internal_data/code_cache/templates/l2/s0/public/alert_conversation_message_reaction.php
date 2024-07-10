<?php
// FROM HASH: d108f76a6c2b7717c75afb4860dcf570
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '' . $__templater->func('username_link', array($__vars['user'], false, array('defaultname' => $__vars['alert']['username'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['extra']['reaction_id'], ), false), array(array('preescaped', array()),), true) . ' к Вашему сообщению в переписке ' . (((('<a href="' . $__templater->func('link', array('conversations/messages', $__vars['content'], ), true)) . '" class="fauxBlockLink-blockLink">') . $__templater->escape($__vars['content']['Conversation']['title'])) . '</a>') . '.';
	return $__finalCompiled;
}
);