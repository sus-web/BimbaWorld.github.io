<?php
// FROM HASH: 703be919b41802e7a837d9ad85d9ea87
return array(
'macros' => array('rebuild_job' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'header' => '!',
		'body' => '',
		'submit' => 'Перестроить сейчас',
		'job' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<span class="u-anchorTarget" id="job-' . $__templater->filter($__vars['job'], array(array('replace', array(':', '-', )),array('to_lower', array()),), true) . '"></span>
	';
	$__compilerTemp1 = '';
	if ($__vars['body']) {
		$__compilerTemp1 .= '<div class="block-body">' . $__templater->filter($__vars['body'], array(array('raw', array()),), true) . '</div>';
	}
	$__finalCompiled .= $__templater->form('
		<div class="block-container">
			<h2 class="block-header">' . $__templater->filter($__vars['header'], array(array('raw', array()),), true) . '</h2>
			' . $__compilerTemp1 . '
			' . $__templater->formSubmitRow(array(
		'submit' => $__templater->escape($__vars['submit']),
	), array(
	)) . '
		</div>
		' . $__templater->formHiddenVal('job', $__vars['job'], array(
	)) . '
	', array(
		'action' => $__templater->func('link', array('tools/rebuild', ), false),
		'class' => 'block',
	)) . '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Перестроение кэшей');
	$__finalCompiled .= '

';
	if ($__vars['success']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--success blockMessage--iconic">' . 'Кэш успешно перестроен.' . '</div>
';
	}
	$__finalCompiled .= '

';
	if ($__vars['hasStoppedManualJobs']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--important blockMessage--iconic">
		' . 'Ожидается ручное завершение работы по перестроению. <a href="' . $__templater->func('link', array('tools/run-job', ), true) . '">Продолжить выполнение.</a>' . '
	</div>
';
	}
	$__finalCompiled .= '

' . '

';
	$__compilerTemp1 = array(array(
		'label' => $__vars['xf']['language']['parenthesis_open'] . 'Все' . $__vars['xf']['language']['parenthesis_close'],
		'_type' => 'option',
	));
	$__compilerTemp1 = $__templater->mergeChoiceOptions($__compilerTemp1, $__templater->method($__vars['xf']['app'], 'getContentTypePhrases', array(true, 'search_handler_class', )));
	$__vars['searchBody'] = $__templater->preEscaped('
	' . $__templater->formSelectRow(array(
		'name' => 'options[type]',
	), $__compilerTemp1, array(
		'label' => 'Тип содержимого',
	)) . '

	' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'options[truncate]',
		'label' => 'Удалить индекс перед перестроением',
		'_type' => 'option',
	)), array(
	)) . '

	' . $__templater->formNumberBoxRow(array(
		'name' => 'options[batch]',
		'value' => '500',
		'min' => '1',
	), array(
		'label' => 'Обрабатывать записей на страницу',
	)) . '
');
	$__finalCompiled .= '
' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение индекса поиска',
		'body' => $__vars['searchBody'],
		'job' => 'XF:SearchRebuild',
	), $__vars) . '
' . '

';
	$__vars['threadBody'] = $__templater->preEscaped('
	' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'options[position_rebuild]',
		'value' => '1',
		'label' => 'Перестроить счётчики и позицию сообщений',
		'hint' => 'Это значительно замедлит процесс. Необходимо включать только в том случае, если сообщения отображаются в неправильном порядке или для того, чтобы показать пользователям, когда они ответили в теме.',
		'_type' => 'option',
	)), array(
	)) . '
');
	$__finalCompiled .= '
' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение тем',
		'body' => $__vars['threadBody'],
		'job' => 'XF:Thread',
	), $__vars) . '
' . '

' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение форумов',
		'job' => 'XF:Forum',
	), $__vars) . '
' . '

' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение кэшей пользователей',
		'job' => 'XF:User',
	), $__vars) . '
' . '

' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение повышений прав групп пользователей',
		'job' => 'XF:UserGroupPromotion',
	), $__vars) . '
' . '

' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение трофеев',
		'job' => 'XF:Trophy',
	), $__vars) . '
' . '

' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение реакций',
		'job' => 'XF:ReactionScore',
	), $__vars) . '
' . '

';
	$__vars['likesContentTypes'] = $__templater->method($__vars['xf']['app'], 'getContentTypePhrases', array(true, 'like_handler_class', ));
	$__finalCompiled .= '
';
	if ($__vars['likesContentTypes']) {
		$__finalCompiled .= '
	';
		$__compilerTemp2 = $__templater->mergeChoiceOptions(array(), $__vars['likesContentTypes']);
		$__vars['likesCountedBody'] = $__templater->preEscaped('
		' . $__templater->formSelectRow(array(
			'name' => 'options[type]',
		), $__compilerTemp2, array(
			'label' => 'Тип содержимого',
		)) . '
	');
		$__finalCompiled .= '
	' . $__templater->callMacro(null, 'rebuild_job', array(
			'header' => 'Перестроение статуса подсчёта симпатий',
			'body' => $__vars['likesCountedBody'],
			'job' => 'XF:LikeIsCounted',
		), $__vars) . '
';
	}
	$__finalCompiled .= '
' . '

';
	$__compilerTemp3 = $__templater->mergeChoiceOptions(array(), $__templater->method($__vars['xf']['app'], 'getContentTypePhrases', array(true, 'reaction_handler_class', )));
	$__vars['reactionsCountedBody'] = $__templater->preEscaped('
	' . $__templater->formSelectRow(array(
		'name' => 'options[type]',
	), $__compilerTemp3, array(
		'label' => 'Тип содержимого',
	)) . '
');
	$__finalCompiled .= '
' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение счётчика статусов реакций',
		'body' => $__vars['reactionsCountedBody'],
		'job' => 'XF:ReactionIsCounted',
	), $__vars) . '
' . '

' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение миниатюр вложений',
		'job' => 'XF:AttachmentThumb',
	), $__vars) . '
' . '

' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение переписок',
		'job' => 'XF:Conversation',
	), $__vars) . '
' . '

' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение сообщений профилей',
		'job' => 'XF:ProfilePost',
	), $__vars) . '
' . '

' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение информации об опросах',
		'job' => 'XF:Poll',
	), $__vars) . '
' . '

';
	$__vars['statsBody'] = $__templater->preEscaped('
	' . $__templater->formNumberBoxRow(array(
		'name' => 'options[batch]',
		'value' => '28',
		'min' => '1',
	), array(
		'label' => 'Дней, для обработки на страницу',
	)) . '

	' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'options[delete]',
		'value' => '1',
		'label' => 'Удалить существующие данные из кэша',
		'hint' => 'Некоторые данные не могут быть перестроены задним числом. Используйте эту опцию, только если у Вас есть конкретные причины для этого. Удаление данных не может быть отменено.',
		'_type' => 'option',
	)), array(
	)) . '
');
	$__finalCompiled .= '
' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение ежедневной статистики',
		'body' => $__vars['statsBody'],
		'job' => 'XF:Stats',
	), $__vars) . '
' . '

' . $__templater->form('
	<div class="block-container">
		<h2 class="block-header">' . 'Очистка прав' . '</h2>
		<div class="block-body">
			' . $__templater->formInfoRow('Очистка любых комбинаций прав доступа, которые больше не используются. Это может ускорить обновление прав доступа и операцию перестраивания, и удалить неиспользуемые данные из базы.', array(
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Запустить',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('tools/clean-up-permissions', ), false),
		'class' => 'block',
	)) . '
' . '

';
	$__vars['postMdBody'] = $__templater->preEscaped('
	' . $__templater->formCheckBoxRow(array(
		'name' => 'options[types]',
		'listclass' => 'listColumns',
	), array(array(
		'value' => 'attachments',
		'label' => 'Вложения',
		'selected' => true,
		'_type' => 'option',
	)), array(
	)) . '
');
	$__finalCompiled .= '
' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение метаданных в сообщениях',
		'body' => $__vars['postMdBody'],
		'job' => 'XF:PostEmbedMetadata',
	), $__vars) . '

';
	$__vars['conversationMdBody'] = $__templater->preEscaped('
	' . $__templater->formCheckBoxRow(array(
		'name' => 'options[types]',
		'listclass' => 'listColumns',
	), array(array(
		'value' => 'attachments',
		'label' => 'Вложения',
		'selected' => true,
		'_type' => 'option',
	)), array(
	)) . '
');
	$__finalCompiled .= '
' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение метаданных в переписках',
		'body' => $__vars['conversationMdBody'],
		'job' => 'XF:ConversationEmbedMetadata',
	), $__vars) . '

';
	$__vars['profilePostMdBody'] = $__templater->preEscaped('
	' . $__templater->formCheckBoxRow(array(
		'name' => 'options[types]',
		'listclass' => 'listColumns',
	), array(array(
		'value' => 'attachments',
		'label' => 'Вложения',
		'selected' => true,
		'_type' => 'option',
	)), array(
	)) . '
');
	$__finalCompiled .= '
' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение метаданных в сообщениях профилей',
		'body' => $__vars['profilePostMdBody'],
		'job' => 'XF:ProfilePostEmbedMetadata',
	), $__vars) . '

';
	$__vars['profilePostCommentMdBody'] = $__templater->preEscaped('
	' . $__templater->formCheckBoxRow(array(
		'name' => 'options[types]',
		'listclass' => 'listColumns',
	), array(array(
		'value' => 'attachments',
		'label' => 'Вложения',
		'selected' => true,
		'_type' => 'option',
	)), array(
	)) . '
');
	$__finalCompiled .= '
' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение метаданных комментариев к сообщениям профилей',
		'body' => $__vars['profilePostCommentMdBody'],
		'job' => 'XF:ProfilePostCommentEmbedMetadata',
	), $__vars) . '
' . '

';
	$__vars['sitemapBody'] = $__templater->preEscaped('
	' . $__templater->formInfoRow('Содержимое карты сайта можно настроить через опцию "<a href="admin.php?options/groups/sitemap/">Генерация XML-карты сайта</a>".', array(
	)) . '
');
	$__finalCompiled .= '
' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Перестроение карты сайта',
		'body' => $__vars['sitemapBody'],
		'job' => 'XF:Sitemap',
	), $__vars) . '
' . '

';
	$__vars['gravatarBody'] = $__templater->preEscaped('
	' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'options[posters_only]',
		'selected' => 1,
		'label' => 'Ограничиться пользователями, которым разрешено создание публикаций',
		'_type' => 'option',
	),
	array(
		'name' => 'options[import_table]',
		'label' => 'Ограничиться импортированными пользователями, записанными в эту таблицу' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array($__templater->formTextBox(array(
		'name' => 'options[import_table_name]',
	))),
		'_type' => 'option',
	)), array(
		'explain' => 'Любые пользователи без аватара, соответствующие вышеуказанным условиям, будут иметь <a href="https://gravatar.com" target="_blank">Gravatar</a>, если он существует для их адресов электронных почт.',
	)) . '
');
	$__finalCompiled .= '
' . $__templater->callMacro(null, 'rebuild_job', array(
		'header' => 'Получение Gravatar для пользователей, которые не загрузили свой аватар',
		'body' => $__vars['gravatarBody'],
		'job' => 'XF:Gravatar',
	), $__vars) . '

' . '

';
	return $__finalCompiled;
}
);