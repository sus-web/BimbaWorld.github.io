<?php
// FROM HASH: cee1404c47a7c333cd6660f357a9766b
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->inlineJs('
jQuery.fn.liScroll = function(settings) {
    settings = jQuery.extend({
        travelocity: 0.15
    }, settings);
    return this.each(function() {
        var $strip = jQuery(this);
        $strip.addClass("newsticker")
        var stripWidth = 1;
        $strip.find("li").each(function(i) {
            stripWidth += jQuery(this, i).outerWidth(true); // thanks to Michael Haszprunar and Fabien Volpi
        });
        var $mask = $strip.wrap("<div class=\'mask\'></div>");
        var $tickercontainer = $strip.parent().wrap("<div class=\'tickercontainer\'></div>");
        var containerWidth = $strip.parent().parent().width(); //a.k.a. \'mask\' width 	
        $strip.width(stripWidth);
        var totalTravel = stripWidth + containerWidth;
        var defTiming = totalTravel / settings.travelocity; // thanks to Scott Waye		
        function scrollnews(spazio, tempo) {
            $strip.animate({
                left: \'-=\' + spazio
            }, tempo, "linear", function() {
                $strip.css("left", containerWidth);
                scrollnews(totalTravel, defTiming);
            });
        }
        scrollnews(totalTravel, defTiming);
        $strip.hover(function() {
                jQuery(this).stop();
            },
            function() {
                var offset = jQuery(this).offset();
                var residualSpace = offset.left + stripWidth;
                var residualTime = residualSpace / settings.travelocity;
                scrollnews(residualSpace, residualTime);
            });
    });
};
');
	return $__finalCompiled;
}
);