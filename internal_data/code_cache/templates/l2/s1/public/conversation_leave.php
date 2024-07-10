<?php
// FROM HASH: e26535bd44b7a80163fc57bf996c12f5
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Покинуть переписку');
	$__finalCompiled .= '

';
	$__templater->breadcrumb($__templater->preEscaped('Переписки'), $__templater->func('link', array('conversations', ), false), array(
	));
	$__finalCompiled .= '
';
	$__templater->breadcrumb($__templater->preEscaped($__templater->escape($__vars['conversation']['title'])), $__templater->func('link', array('conversations', $__vars['conversation'], ), false), array(
	));
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Если покинуть переписку, то она исчезнет из Вашего списка.' . '
			', array(
	)) . '
			' . $__templater->formRadioRow(array(
		'name' => 'recipient_state',
	), array(array(
		'value' => 'deleted',
		'checked' => 'checked',
		'label' => 'Принимать последующие сообщения',
		'hint' => 'Если появятся новые сообщения, то переписка будет восстановлена у Вас во входящих.',
		'_type' => 'option',
	),
	array(
		'value' => 'deleted_ignored',
		'label' => 'Игнорировать последующие сообщения',
		'hint' => 'Вы не будете получать оповещения о новых ответах, а переписка будет оставаться удалённой.',
		'_type' => 'option',
	)), array(
		'label' => 'Обработка новых сообщений',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Покинуть',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('conversations/leave', $__vars['conversation'], ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);