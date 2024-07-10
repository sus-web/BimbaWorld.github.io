<?php
// FROM HASH: 96437aa3a49eb9160aaa522ee4b2f9cb
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['xf']['visitor']['user_id'] == $__vars['content']['ProfileUser']['user_id']) {
		$__finalCompiled .= '
	' . '' . $__templater->func('username_link', array($__vars['user'], false, array('defaultname' => $__vars['alert']['username'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['extra']['reaction_id'], ), false), array(array('preescaped', array()),), true) . ' к Вашему <a ' . (('href="' . $__templater->func('link', array('profile-posts', $__vars['content'], ), true)) . '" class="fauxBlockLink-blockLink"') . '>статусу</a>.' . '
';
	} else {
		$__finalCompiled .= '
	' . '' . $__templater->func('username_link', array($__vars['user'], false, array('defaultname' => $__vars['alert']['username'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['extra']['reaction_id'], ), false), array(array('preescaped', array()),), true) . ' к <a ' . (('href="' . $__templater->func('link', array('profile-posts', $__vars['content'], ), true)) . '" class="fauxBlockLink-blockLink"') . '>Вашему комментарию</a> в профиле пользователя ' . $__templater->escape($__vars['content']['ProfileUser']['username']) . '.' . '
';
	}
	return $__finalCompiled;
}
);