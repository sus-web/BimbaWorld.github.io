<?php
// FROM HASH: 303a0fc858617febe0944f439721d5f0
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__compilerTemp1 = $__vars;
	$__compilerTemp1['extraOptions'] = $__templater->preEscaped('
		' . $__templater->formCheckBoxRow(array(
		'name' => 'apply_node_ids',
	), array(array(
		'label' => 'Применить настройки форумов' . $__vars['xf']['language']['label_separator'],
		'_dependent' => array('
					' . $__templater->callMacro('forum_selection_macros', 'select_forums', array(
		'nodeIds' => $__vars['nodeIds'],
		'nodeTree' => $__vars['nodeTree'],
		'withRow' => '0',
	), $__vars) . '
				'),
		'_type' => 'option',
	)), array(
		'label' => 'Применимо в форумах',
	)) . '
	');
	$__finalCompiled .= $__templater->includeTemplate('base_prompt_quickset_editor', $__compilerTemp1);
	return $__finalCompiled;
}
);