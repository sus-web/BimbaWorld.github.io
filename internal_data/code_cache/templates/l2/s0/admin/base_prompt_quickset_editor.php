<?php
// FROM HASH: 25eed0e1f323018f6eb2e2f303aad570
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Быстрая настройка подсказок');
	$__finalCompiled .= '

';
	$__compilerTemp1 = array();
	if ($__templater->isTraversable($__vars['prompts'])) {
		foreach ($__vars['prompts'] AS $__vars['promptId'] => $__vars['_prompt']) {
			$__compilerTemp1[] = array(
				'value' => $__vars['promptId'],
				'checked' => 'checked',
				'label' => $__templater->escape($__vars['_prompt']['title']),
				'_type' => 'option',
			);
		}
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formCheckBoxRow(array(
		'name' => 'prompt_ids',
		'listclass' => '_listInline',
	), $__compilerTemp1, array(
		'label' => 'Применить параметры к этим подсказкам',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->formCheckBoxRow(array(
		'name' => 'apply_prompt_group_id',
	), array(array(
		'label' => 'Применить параметры группы подсказок' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array('
						' . $__templater->callMacro('base_prompt_edit_macros', 'prompt_groups', array(
		'prompt' => $__vars['prompt'],
		'promptGroups' => $__vars['promptGroups'],
		'withRow' => '0',
	), $__vars) . '
					'),
		'_type' => 'option',
	)), array(
		'label' => 'Группа подсказок',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->filter($__vars['extraOptions'], array(array('raw', array()),), true) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array($__vars['linkPrefix'] . '/quick-set', ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);