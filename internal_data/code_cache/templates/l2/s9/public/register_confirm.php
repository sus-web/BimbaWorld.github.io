<?php
// FROM HASH: 14ba5689ba2ab56aaf8d763f69700811
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->setPageParam('head.' . 'robots', $__templater->preEscaped('<meta name="robots" content="noindex" />'));
	$__finalCompiled .= '

<div class="blockMessage">
	';
	if ($__vars['xf']['visitor']['user_state'] == 'moderated') {
		$__finalCompiled .= '
		' . 'Вы подтвердили адрес электронной почты. Теперь Ваша регистрация должна быть одобрена администратором. Вы получите письмо, когда будет принято решение.' . '
	';
	} else if (($__templater->method($__vars['xf']['visitor'], 'getPreviousValue', array('user_state', )) == 'email_confirm_edit')) {
		$__finalCompiled .= '
		' . 'Вы подтвердили адрес электронной почты и теперь Ваша учётная запись снова активна.' . '
	';
	} else {
		$__finalCompiled .= '
		' . 'Вы подтвердили адрес электронной почты и завершили регистрацию.' . '
	';
	}
	$__finalCompiled .= '

	';
	if ($__vars['preRegContentUrl']) {
		$__finalCompiled .= '
		<br />
		<br />
		' . 'Контент, который Вы создали до регистрации, был опубликован автоматически.' . '
		<div style="margin-top: .5em">
			' . $__templater->button('Посмотреть мой контент', array(
			'href' => $__vars['preRegContentUrl'],
		), '', array(
		)) . '
		</div>
	';
	}
	$__finalCompiled .= '

	<ul>
		';
	if ($__vars['redirect']) {
		$__finalCompiled .= '<li><a href="' . $__templater->escape($__vars['redirect']) . '">' . 'Вернуться к просматриваемой странице' . '</a></li>';
	}
	$__finalCompiled .= '
		<li><a href="' . $__templater->func('link', array('index', ), true) . '">' . 'Вернуться на главную страницу форума' . '</a></li>
		';
	if ($__templater->method($__vars['xf']['visitor'], 'canEditProfile', array())) {
		$__finalCompiled .= '
			<li><a href="' . $__templater->func('link', array('account', ), true) . '">' . 'Редактировать информацию о Вашей учётной записи' . '</a></li>
		';
	}
	$__finalCompiled .= '
	</ul>
</div>';
	return $__finalCompiled;
}
);