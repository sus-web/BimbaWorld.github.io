<?php
// FROM HASH: 1c4efa46d2e182c4d280eaa8d7086856
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Начать личные переписки');
	$__finalCompiled .= '
';
	$__templater->pageParams['pageDescription'] = $__templater->preEscaped('Вы можете использовать эту форму, чтобы начать личные переписки с пользователями, удовлетворяющими критериям, указанным ниже.');
	$__templater->pageParams['pageDescriptionMeta'] = true;
	$__finalCompiled .= '

';
	if ($__vars['sent']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--success blockMessage--iconic">
		' . 'Ваша переписка отправлена ' . $__templater->filter($__vars['sent'], array(array('number', array()),), true) . ' пользователям.' . '
	</div>
';
	}
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formTextBoxRow(array(
		'name' => 'from_user',
		'value' => $__vars['xf']['visitor']['username'],
		'ac' => 'single',
	), array(
		'label' => 'От пользователя',
		'explain' => '
					<p>' . 'Введите существующего пользователя, от имени которого должны быть начаты переписки.' . '</p>
					<p><b>' . 'Примечание' . $__vars['xf']['language']['label_separator'] . '</b> ' . 'Вы не можете начать переписку с собой.' . '</p>
				',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->formTextBoxRow(array(
		'name' => 'message_title',
		'maxlength' => '100',
		'required' => 'true',
	), array(
		'label' => 'Название переписки',
	)) . '

			' . $__templater->formTextAreaRow(array(
		'name' => 'message_body',
		'rows' => '5',
		'autosize' => 'true',
		'required' => 'true',
	), array(
		'label' => 'Сообщение в переписке',
		'hint' => 'Вы можете использовать BB-коды',
		'explain' => 'В сообщении будут заменены следующие переменные: {name}, {email}, {id}.' . ' ' . 'Также можно использовать переменную {phrase:заголовок_фразы}, которая будет заменена текстом фразы на языке получателя.',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'open_invite',
		'value' => '1',
		'label' => 'Разрешить участникам подключать к переписке других пользователей',
		'_type' => 'option',
	),
	array(
		'name' => 'conversation_locked',
		'value' => '1',
		'label' => 'Закрыть переписку (нельзя будет больше отвечать)',
		'_type' => 'option',
	)), array(
		'label' => 'Настройки личной переписки',
	)) . '

			' . $__templater->formRadioRow(array(
		'name' => 'delete_type',
	), array(array(
		'selected' => true,
		'label' => 'Не покидать переписку',
		'explain' => 'Переписка останется у Вас во входящих и Вы будете уведомлены о новых ответах в ней.',
		'_type' => 'option',
	),
	array(
		'value' => 'deleted',
		'label' => 'Покинуть переписку и принимать новые сообщения',
		'explain' => 'Если появятся новые сообщения, то переписка будет восстановлена у Вас во входящих.',
		'_type' => 'option',
	),
	array(
		'value' => 'deleted_ignored',
		'label' => 'Покинуть переписку и игнорировать новые сообщения',
		'explain' => 'Вы не будете получать оповещения о новых ответах, а переписка будет оставаться удалённой.',
		'_type' => 'option',
	)), array(
		'label' => 'Обработка новых сообщений',
	)) . '
		</div>

		<h2 class="block-formSectionHeader"><span class="block-formSectionHeader-aligner">' . 'Критерии пользователей' . '</span></h2>
		<div class="block-body">
			' . $__templater->includeTemplate('helper_user_search_criteria', $__vars) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'submit' => 'Продолжить' . $__vars['xf']['language']['ellipsis'],
		'sticky' => 'true',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('users/message/confirm', ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
}
);