<?php
// FROM HASH: c4a4d279ec0fb87bba9dbf35f4a19848
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formRadioRow(array(
		'name' => 'type_config[display_style]',
		'value' => $__vars['typeConfig']['display_style'],
	), array(array(
		'value' => 'full',
		'label' => 'Стандартный',
		'hint' => 'Полный стиль отображается в виде стандартного списка тем.',
		'_type' => 'option',
	),
	array(
		'value' => 'preview',
		'label' => 'Предпросмотр',
		'hint' => 'Сетка блоков, показывающая предварительный просмотр содержимого первого сообщения, включая изображение обложки, если оно используется.',
		'data-xf-init' => 'disabler',
		'data-hide' => 'true',
		'data-container' => '.js-articlePreviewOptions',
		'_type' => 'option',
	),
	array(
		'value' => 'expanded',
		'label' => 'Расширенный',
		'hint' => 'Расширенный вид, отображаемый в виде списка отформатированных первых сообщений с полным содержанием или его фрагментом.',
		'data-xf-init' => 'disabler',
		'data-hide' => 'true',
		'data-container' => '.js-articleExpandedOptions',
		'_type' => 'option',
	)), array(
		'label' => 'Стиль отображения',
	)) . '

<div class="js-articlePreviewOptions">
	' . $__templater->formNumberBoxRow(array(
		'name' => 'type_config[expanded_per_page]',
		'value' => $__vars['typeConfig']['expanded_per_page'],
		'min' => '0',
	), array(
		'label' => 'Переопределить статьи на странице',
		'explain' => 'Это позволяет Вам изменить количество статей, отображаемых на странице при просмотре данного форума. Используйте 0 для отображения стандартного количества статей.',
	)) . '
</div>

<div class="js-articleExpandedOptions">
	' . $__templater->formNumberBoxRow(array(
		'name' => 'type_config[expanded_per_page]',
		'value' => $__vars['typeConfig']['expanded_per_page'],
		'min' => '0',
	), array(
		'label' => 'Переопределить статьи на странице',
		'explain' => 'Это позволяет Вам изменить количество статей, отображаемых на странице при просмотре данного форума. Используйте 0 для отображения стандартного количества статей.',
	)) . '
	' . $__templater->formNumberBoxRow(array(
		'name' => 'type_config[expanded_snippet]',
		'value' => $__vars['typeConfig']['expanded_snippet'],
		'min' => '0',
	), array(
		'label' => 'Длина отрывка статьи',
		'explain' => 'Максимальное количество символов, отображаемых при просмотре этого форума. Используйте 0 для отображения полного содержимого.',
	)) . '
</div>';
	return $__finalCompiled;
}
);