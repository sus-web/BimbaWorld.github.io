<?php
// FROM HASH: d0e19e6b452771dca640d17026cdb4f2
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['xf']['visitor']['user_id'] == $__vars['content']['ProfilePost']['user_id']) {
		$__finalCompiled .= '
	' . '' . ($__templater->escape($__vars['user']['username']) ?: $__templater->escape($__vars['alert']['username'])) . ' прокомментировал(а) Ваш статус. ' . '
';
	} else {
		$__finalCompiled .= '
	' . '' . ($__templater->escape($__vars['user']['username']) ?: $__templater->escape($__vars['alert']['username'])) . ' прокомментировал(а) сообщение пользователя ' . $__templater->escape($__vars['content']['ProfilePost']['username']) . ' в Вашем профиле.' . '
';
	}
	$__finalCompiled .= '
<push:url>' . $__templater->func('link', array('canonical:profile-posts/comments', $__vars['content'], ), true) . '</push:url>';
	return $__finalCompiled;
}
);