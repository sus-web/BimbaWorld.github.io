<?php
// FROM HASH: d66e66b8a8568b85de8f27e843d13eb5
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<script>
<!--XENTR:Toggle Button-->
$(\'.bgPicker\').click(function() {
  $("#colours").slideToggle(function() {
    localStorage.setItem(\'visible\', $(this).is(":visible"));
  });
});

$(\'#colours\').toggle(localStorage.getItem(\'visible\') === \'true\');	

// stored in localStorage as string, `toggle` needs boolean
var isVisible = localStorage.getItem("visible") === "false" ? false : false;
$("#colours").toggle(isVisible);	
	
<!--XENTR:LocalStorage Background-->		
if (typeof localStorage == "undefined") {
    document.getElementById("result").innerHTML = "Your browser does not support HTML5 localStorage. Try upgrading.";
} else {
    if (localStorage.getItem("background") !== null) {
        getColour = localStorage.background;
        $("body").addClass(getColour);
    }
}
$(document).ready(function () {
    getColour = localStorage.background;
    $(".palette").click(function () {
        getColour = localStorage.background;
        $("body").removeClass(getColour);
        localStorage.removeItem("background");
        var setColour = $(this).attr("id");
        $("body").addClass(setColour);
        localStorage.setItem("background", setColour);
    });			
});
</script>';
	return $__finalCompiled;
}
);