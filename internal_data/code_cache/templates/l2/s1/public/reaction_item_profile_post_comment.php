<?php
// FROM HASH: a4bee7cfd78e1474929c1a8cc4592ef9
return array(
'macros' => array('reaction_snippet' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'reactionUser' => '!',
		'reactionId' => '!',
		'comment' => '!',
		'date' => '!',
		'fallbackName' => 'Неизвестный пользователь',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="contentRow-title">
		';
	if ($__vars['comment']['user_id'] == $__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
			' . '' . $__templater->func('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . ' к <a ' . (('href="' . $__templater->func('link', array('profile-posts/comments', $__vars['comment'], ), true)) . '"') . '>Вашему комментарию</a> к сообщению профиля от пользователя ' . $__templater->escape($__vars['comment']['ProfilePost']['username']) . '.' . '
		';
	} else if ($__vars['comment']['ProfilePost']['user_id'] == $__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
			' . '' . $__templater->func('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . ' к <a ' . (('href="' . $__templater->func('link', array('profile-posts/comments', $__vars['comment'], ), true)) . '"') . '>комментарию пользователя ' . $__templater->escape($__vars['comment']['username']) . '</a> в Вашем профиле.' . '
		';
	} else {
		$__finalCompiled .= '
	
			' . '' . $__templater->func('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . ' к <a ' . (('href="' . $__templater->func('link', array('profile-posts/comments', $__vars['comment'], ), true)) . '"') . '>комментарию пользователя ' . $__templater->escape($__vars['comment']['username']) . '</a>, в сообщении профиля, которое написал(а) ' . $__templater->escape($__vars['comment']['ProfilePost']['username']) . '.' . '
		';
	}
	$__finalCompiled .= '
	</div>
	
	<div class="contentRow-snippet">' . $__templater->func('snippet', array($__vars['comment']['message'], $__vars['xf']['options']['newsFeedMessageSnippetLength'], array('stripQuote' => true, ), ), true) . '</div>

	<div class="contentRow-minor">' . $__templater->func('date_dynamic', array($__vars['date'], array(
	))) . '</div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . $__templater->callMacro(null, 'reaction_snippet', array(
		'reactionUser' => $__vars['reaction']['ReactionUser'],
		'reactionId' => $__vars['reaction']['reaction_id'],
		'comment' => $__vars['content'],
		'date' => $__vars['reaction']['reaction_date'],
	), $__vars);
	return $__finalCompiled;
}
);