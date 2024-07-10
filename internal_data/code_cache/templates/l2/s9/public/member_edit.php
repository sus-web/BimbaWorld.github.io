<?php
// FROM HASH: c6f5d904a0221b7ff18992c0c43ca8cb
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Редактировать пользователя' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['user']['username']));
	$__finalCompiled .= '

';
	$__templater->breadcrumb($__templater->preEscaped($__templater->escape($__vars['user']['username'])), $__templater->func('link', array('members', $__vars['user'], ), false), array(
	));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__templater->method($__vars['user'], 'getAvatarUrl', array('s', ))) {
		$__compilerTemp1 .= '
				' . $__templater->formRow('
					' . $__templater->func('avatar', array($__vars['user'], 'l', false, array(
		))) . '
					<div><br />' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => 'delete_avatar',
			'label' => 'Удалить текущий аватар',
			'_type' => 'option',
		))) . '</div>
				', array(
			'label' => 'Текущий аватар',
		)) . '
			';
	}
	$__compilerTemp2 = '';
	if ($__vars['user']['Profile']['banner_date']) {
		$__compilerTemp2 .= '
				' . $__templater->formRow('
					' . $__templater->func('profile_banner', array($__vars['user'], 'l', false, array(
			'class' => 'memberProfileBanner--small',
		), '')) . '
					<div>' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => 'delete_banner',
			'label' => 'Удалить текущий баннер',
			'_type' => 'option',
		))) . '</div>
				', array(
			'label' => 'Текущий баннер профиля',
		)) . '
			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__compilerTemp1 . '

			' . $__compilerTemp2 . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'user[custom_title]',
		'value' => $__vars['user']['custom_title_'],
		'maxlength' => $__templater->func('max_length', array($__vars['user'], 'custom_title', ), false),
	), array(
		'label' => 'Нестандартное звание',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'profile[location]',
		'value' => $__vars['user']['Profile']['location_'],
		'maxlength' => $__templater->func('max_length', array($__vars['user']['Profile'], 'location', ), false),
	), array(
		'label' => 'Адрес',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'profile[website]',
		'value' => $__vars['user']['Profile']['website_'],
		'type' => 'url',
		'maxlength' => $__templater->func('max_length', array($__vars['user']['Profile'], 'website', ), false),
	), array(
		'label' => 'Веб-сайт',
	)) . '

			' . $__templater->formTextAreaRow(array(
		'name' => 'profile[about]',
		'value' => $__vars['user']['Profile']['about_'],
		'autosize' => 'true',
		'maxlength' => $__templater->func('max_length', array($__vars['user']['Profile'], 'about', ), false),
	), array(
		'label' => 'Обо мне',
	)) . '

			' . $__templater->formTextAreaRow(array(
		'name' => 'profile[signature]',
		'value' => $__vars['user']['Profile']['signature_'],
		'autosize' => 'true',
		'maxlength' => $__templater->func('max_length', array($__vars['user']['Profile'], 'signature', ), false),
	), array(
		'label' => 'Подпись',
	)) . '

			' . $__templater->callMacro('custom_fields_macros', 'custom_fields_edit', array(
		'type' => 'users',
		'set' => $__vars['user']['Profile']['custom_fields'],
		'editMode' => 'moderator',
	), $__vars) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'save',
		'sticky' => 'true',
	), array(
	)) . '
	</div>

	' . $__templater->formHiddenVal('not_admin', ($__vars['notAdmin'] ? 1 : 0), array(
	)) . '
', array(
		'action' => $__templater->func('link', array('members/edit', $__vars['user'], ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);