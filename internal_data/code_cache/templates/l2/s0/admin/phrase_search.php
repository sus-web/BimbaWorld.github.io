<?php
// FROM HASH: c89c38e23625949f462276ec5f2d0d4a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Поиск по фразам');
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->callMacro('language_macros', 'language_select', array(
		'languageTree' => $__vars['languageTree'],
		'languageId' => $__vars['languageId'],
	), $__vars) . '

			' . $__templater->callMacro(null, 'addon_macros::addon_select', array(
		'addOnId' => '_any',
		'includeAny' => true,
		'emptyValue' => '_none',
	), $__vars) . '

			<hr class="formRowSep" />

			' . $__templater->formTextBoxRow(array(
		'name' => 'title',
		'type' => 'search',
		'dir' => 'ltr',
	), array(
		'label' => 'Название содержит',
	)) . '

			' . $__templater->formRow('

				<ul class="inputList">
					<li>' . $__templater->formTextArea(array(
		'name' => 'text',
		'autosize' => 'true',
	)) . '</li>
					<li>' . $__templater->formCheckBox(array(
		'standalone' => 'true',
	), array(array(
		'name' => 'text_cs',
		'label' => 'Учитывать регистр',
		'_type' => 'option',
	))) . '</li>
				</ul>
			', array(
		'rowtype' => 'input',
		'label' => 'Текст содержит',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->formCheckBoxRow(array(
		'name' => 'state[]',
	), array(array(
		'value' => 'default',
		'selected' => true,
		'label' => 'Не изменено',
		'_type' => 'option',
	),
	array(
		'value' => 'inherited',
		'selected' => true,
		'label' => 'Изменена в родительском языке',
		'_type' => 'option',
	),
	array(
		'value' => 'custom',
		'selected' => true,
		'label' => 'Изменена в этом языке',
		'_type' => 'option',
	)), array(
		'label' => 'Статус фразы',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'search',
	), array(
		'html' => $__templater->button('', array(
		'type' => 'submit',
		'icon' => 'translate',
		'name' => 'translate',
	), '', array(
	)),
	)) . '
	</div>

	' . $__templater->formHiddenVal('search', '1', array(
	)) . '
', array(
		'action' => $__templater->func('link', array('phrases/search', ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
}
);