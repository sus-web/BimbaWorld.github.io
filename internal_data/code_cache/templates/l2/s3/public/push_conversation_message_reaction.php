<?php
// FROM HASH: ff3182d32670e2218f0315f2e1c804c2
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '' . ($__templater->escape($__vars['user']['username']) ?: $__templater->escape($__vars['alert']['username'])) . ' оставил(а) реакцию ' . $__templater->func('reaction_title', array($__vars['extra']['reaction_id'], ), true) . ' к Вашему сообщению в переписке ' . $__templater->escape($__vars['content']['Conversation']['title']) . '.' . '
<push:url>' . $__templater->func('link', array('canonical:conversations/messages', $__vars['content'], ), true) . '</push:url>
<push:tag>conversation_message_reaction_' . $__templater->escape($__vars['content']['message_id']) . '_' . $__templater->escape($__vars['extra']['reaction_id']) . '</push:tag>';
	return $__finalCompiled;
}
);