<?php
// FROM HASH: 18309d5d98f7d5d41574c5e930ea4ee8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Аватар');
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
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__compilerTemp1 . '

			' . $__templater->formUploadRow(array(
		'name' => 'upload',
		'accept' => '.gif,.jpeg,.jpg,.jpe,.png',
	), array(
		'label' => 'Загрузить аватар',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('users/avatar', $__vars['user'], ), false),
		'upload' => 'true',
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);