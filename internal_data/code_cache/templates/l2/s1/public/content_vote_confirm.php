<?php
// FROM HASH: a91698c21ed907cfccf6da278185d572
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Голосовать за контент');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['vote'] == $__vars['voteType']) {
		$__compilerTemp1 .= '
					' . 'Вы действительно хотите удалить свой голос для этого содержимого?' . '
				';
	} else if ($__vars['voteType'] == 'up') {
		$__compilerTemp1 .= '
					' . 'Вы действительно хотите оставить позитивный голос для этого содержимого?' . '
				';
	} else {
		$__compilerTemp1 .= '
					' . 'Вы действительно хотите поставить негативный голос для этого содержимого?' . '
				';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . $__compilerTemp1 . '
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'confirm',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
	' . $__templater->formHiddenVal('type', $__vars['voteType'], array(
	)) . '
', array(
		'action' => $__vars['confirmUrl'],
		'class' => 'block',
	));
	return $__finalCompiled;
}
);