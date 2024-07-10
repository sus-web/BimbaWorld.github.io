<?php
// FROM HASH: 848d116fd72c1c5425bf7493bc92f821
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<script type=\'text/javascript\'>
document.addEventListener(\'DOMContentLoaded\', function() {
    Typed.new(\'#search-typed\', {
        strings: [
			"' . 'Search in topics...' . '", 
			"' . 'Search messages...' . '", 
			"' . 'Search in members...' . '", 
			"' . 'Search in resources...' . '"
		],
        stringsElement: null,
        // typing speed
        typeSpeed: ' . $__templater->escape($__vars['xf']['options']['xentr_typed_search_speed']) . ',
        // time before typing starts
        startDelay: 500,
        // backspacing speed
        backSpeed: 0,
        // time before backspacing
        backDelay: 400,
        // loop
        loop: true,
        // false = infinite
		shuffle: true,
		// shuffle = false 
        loopCount: 1,
        // show cursor
        showCursor: false,
        // character for cursor
        cursorChar: "|",
        // attribute to type (null == text)
        attr: \'placeholder\',
		bindInputFocusEvents: false,
        // either html or text
        contentType: \'html\',
    });
});	
</script>';
	return $__finalCompiled;
}
);