<?php
// FROM HASH: 5d68cb83a84971d9927e498b222a2645
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['xf']['visitor']['user_id'] == $__vars['content']['ProfilePost']['user_id']) {
		$__finalCompiled .= '
	' . '' . $__templater->func('username_link', array($__vars['user'], false, array('defaultname' => $__vars['alert']['username'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['extra']['reaction_id'], ), false), array(array('preescaped', array()),), true) . ' к <a ' . (('href="' . $__templater->func('link', array('profile-posts/comments', $__vars['content'], ), true)) . '" class="fauxBlockLink-blockLink"') . '>Вашему комментарию</a> в Вашем профиле.' . '
';
	} else {
		$__finalCompiled .= '
	' . '' . $__templater->func('username_link', array($__vars['user'], false, array('defaultname' => $__vars['alert']['username'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['extra']['reaction_id'], ), false), array(array('preescaped', array()),), true) . ' к <a ' . (('href="' . $__templater->func('link', array('profile-posts/comments', $__vars['content'], ), true)) . '" class="fauxBlockLink-blockLink"') . '>Вашему комментарию</a> к сообщению профиля от пользователя ' . $__templater->escape($__vars['content']['ProfilePost']['username']) . '.' . '
';
	}
	return $__finalCompiled;
}
);