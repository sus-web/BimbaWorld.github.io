<?php
// FROM HASH: 33279fb88edc884988357e47861e87d5
return array(
'macros' => array('reaction_snippet' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'reactionUser' => '!',
		'reactionId' => '!',
		'profilePost' => '!',
		'date' => '!',
		'fallbackName' => 'Неизвестный пользователь',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="contentRow-title">
		';
	if ($__vars['profilePost']['user_id'] == $__vars['profilePost']['profile_user_id']) {
		$__finalCompiled .= '
			';
		if ($__vars['profilePost']['user_id'] == $__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
				' . '' . $__templater->func('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . ' к Вашему <a ' . (('href="' . $__templater->func('link', array('profile-posts', $__vars['profilePost'], ), true)) . '"') . '>статусу</a>.' . '
			';
		} else {
			$__finalCompiled .= '
				' . '' . $__templater->func('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . ' <a ' . (('href="' . $__templater->func('link', array('profile-posts', $__vars['profilePost'], ), true)) . '"') . '>к статусу ' . $__templater->escape($__vars['profilePost']['username']) . '</a>.' . '
			';
		}
		$__finalCompiled .= '
		';
	} else {
		$__finalCompiled .= '
			';
		if ($__vars['profilePost']['user_id'] == $__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
	
				' . '' . $__templater->func('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . ' к <a ' . (('href="' . $__templater->func('link', array('profile-posts', $__vars['profilePost'], ), true)) . '"') . '>Вашему комментарию</a> в профиле пользователя ' . $__templater->escape($__vars['profilePost']['ProfileUser']['username']) . '.' . '
			';
		} else if ($__vars['profilePost']['ProfileUser']['user_id'] == $__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
	
				' . '' . $__templater->func('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . ' к <a ' . (('href="' . $__templater->func('link', array('profile-posts', $__vars['profilePost'], ), true)) . '"') . '>сообщению пользователя ' . $__templater->escape($__vars['profilePost']['username']) . '</a> в Вашем профиле.' . '
			';
		} else {
			$__finalCompiled .= '
	
				' . '' . $__templater->func('username_link', array($__vars['reactionUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' оставил(а) реакцию ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['reactionId'], 'medium', ), false), array(array('preescaped', array()),), true) . ' к <a ' . (('href="' . $__templater->func('link', array('profile-posts', $__vars['profilePost'], ), true)) . '"') . '>сообщению пользователя ' . $__templater->escape($__vars['profilePost']['username']) . '</a> в профиле ' . $__templater->escape($__vars['profilePost']['ProfileUser']['username']) . '.' . '
			';
		}
		$__finalCompiled .= '
		';
	}
	$__finalCompiled .= '
	</div>
	
	<div class="contentRow-snippet">' . $__templater->func('snippet', array($__vars['profilePost']['message'], $__vars['xf']['options']['newsFeedMessageSnippetLength'], array('stripQuote' => true, ), ), true) . '</div>

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
		'profilePost' => $__vars['content'],
		'date' => $__vars['reaction']['reaction_date'],
	), $__vars);
	return $__finalCompiled;
}
);