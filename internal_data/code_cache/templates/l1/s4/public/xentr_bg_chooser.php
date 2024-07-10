<?php
// FROM HASH: fe29828eae9894f1ae0b6bd473a76a67
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('xentr_bg_chooser.less');
	$__finalCompiled .= '

<div id="colours">
    ';
	if ($__templater->func('property', array('xentr_blue_color', ), false)) {
		$__finalCompiled .= '<div id="bgChooser1" class="palette styleSelector1">' . 'Blue' . '</div>';
	}
	$__finalCompiled .= '
    ';
	if ($__templater->func('property', array('xentr_red_color', ), false)) {
		$__finalCompiled .= '<div id="bgChooser2" class="palette styleSelector2">' . 'Red' . '</div>';
	}
	$__finalCompiled .= '
    ';
	if ($__templater->func('property', array('xentr_green_color', ), false)) {
		$__finalCompiled .= '<div id="bgChooser3" class="palette styleSelector3">' . 'Green' . '</div>';
	}
	$__finalCompiled .= '
    ';
	if ($__templater->func('property', array('xentr_orange_color', ), false)) {
		$__finalCompiled .= '<div id="bgChooser4" class="palette styleSelector4">' . 'Orange' . '</div>';
	}
	$__finalCompiled .= '
    ';
	if ($__templater->func('property', array('xentr_voilet_color', ), false)) {
		$__finalCompiled .= '<div id="bgChooser5" class="palette styleSelector5">' . 'Voilet' . '</div>';
	}
	$__finalCompiled .= '
	';
	if ($__templater->func('property', array('xentr_slate_color', ), false)) {
		$__finalCompiled .= '<div id="bgChooser6" class="palette styleSelector6">' . 'Slate' . '</div>';
	}
	$__finalCompiled .= '
	';
	if ($__templater->func('property', array('xentr_dark_color', ), false)) {
		$__finalCompiled .= '<div id="bgChooser7" class="palette styleSelector7">' . 'Dark' . '</div>';
	}
	$__finalCompiled .= '
    <div id="result"></div>
</div>';
	return $__finalCompiled;
}
);