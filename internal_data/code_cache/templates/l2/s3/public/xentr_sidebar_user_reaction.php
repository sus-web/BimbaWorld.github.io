<?php
// FROM HASH: 72b57946f0be2a1f2057663634dd757b
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('xentr_sidebar_user_reaction.less');
	$__finalCompiled .= '
';
	$__templater->includeCss('carousel.less');
	$__finalCompiled .= '
';
	$__templater->includeCss('lightslider.less');
	$__finalCompiled .= '

';
	$__templater->includeJs(array(
		'prod' => 'xf/carousel-compiled.js',
		'dev' => 'vendor/lightslider/lightslider.min.js, xf/carousel.js',
	));
	$__finalCompiled .= '

<div class="xentr-user-reactions">
	<div class="carousel userReactionsCarousel">
		<ul class="carousel-body carousel-body--show" data-xf-init="carousel" data-items="' . $__templater->escape($__vars['xf']['options']['xentr_carousel_slider_number']) . '">
			';
	if ($__templater->func('count', array($__vars['xf']['reactionsActive'], ), false) > 1) {
		$__finalCompiled .= '
				';
		if ($__templater->isTraversable($__vars['userReactionRecieved'])) {
			foreach ($__vars['userReactionRecieved'] AS $__vars['reactionId'] => $__vars['total']) {
				$__finalCompiled .= '
					<li>
						<div class="carousel-item">
							<div class="tooltip-content-inner">
								<div class="reactTooltip">
									';
				if ($__vars['reactionId']) {
					$__finalCompiled .= '
										';
					if ($__vars['xf']['options']['xentr_user_reaction_icon_size'] == 'small') {
						$__finalCompiled .= '
											' . $__templater->func('reaction', array(array(
							'id' => $__vars['reactionId'],
							'small' => 'true',
							'tooltip' => 'true',
							'showtitle' => 'true',
							'appendtitle' => $__templater->filter($__vars['total'], array(array('number', array()),array('parens', array()),), false),
						))) . '	
										';
					} else if ($__vars['xf']['options']['xentr_user_reaction_icon_size'] == 'medium') {
						$__finalCompiled .= '		
											' . $__templater->func('reaction', array(array(
							'id' => $__vars['reactionId'],
							'medium' => 'true',
							'tooltip' => 'true',
							'showtitle' => 'true',
							'appendtitle' => $__templater->filter($__vars['total'], array(array('number', array()),array('parens', array()),), false),
						))) . '	
										';
					}
					$__finalCompiled .= '	
									';
				}
				$__finalCompiled .= '
								</div>	
							</div>	
						</div>
					</li>
				';
			}
		}
		$__finalCompiled .= '
			';
	}
	$__finalCompiled .= '	
		</ul>	
	</div>
</div>';
	return $__finalCompiled;
}
);