<?php
// FROM HASH: 6b49cde4b1ad9933242af9497c4851c1
return array(
'macros' => array('topBreadcrumbs' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'breadcrumbs' => '!',
		'navTree' => '!',
		'selectedNavEntry' => null,
		'variant' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
			';
	$__vars['position'] = 0;
	$__compilerTemp1 .= '

			';
	$__vars['rootBreadcrumb'] = $__vars['navTree'][$__vars['xf']['options']['rootBreadcrumb']];
	$__compilerTemp1 .= '
			';
	if ($__vars['rootBreadcrumb'] AND ($__vars['rootBreadcrumb']['href'] != $__vars['xf']['uri'])) {
		$__compilerTemp1 .= '
				';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['rootBreadcrumb']['href'],
			'value' => $__vars['rootBreadcrumb']['title'],
		), $__vars) . '
			';
	}
	$__compilerTemp1 .= '

			';
	if ($__vars['selectedNavEntry'] AND ($__vars['selectedNavEntry']['href'] AND (($__vars['selectedNavEntry']['href'] != $__vars['xf']['uri']) AND ($__vars['selectedNavEntry']['href'] != $__vars['rootBreadcrumb']['href'])))) {
		$__compilerTemp1 .= '
				';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['selectedNavEntry']['href'],
			'value' => $__vars['selectedNavEntry']['title'],
		), $__vars) . '
			';
	}
	$__compilerTemp1 .= '
			';
	if ($__templater->isTraversable($__vars['breadcrumbs'])) {
		foreach ($__vars['breadcrumbs'] AS $__vars['breadcrumb']) {
			if ($__vars['breadcrumb']['href'] != $__vars['xf']['uri']) {
				$__compilerTemp1 .= '
				';
				$__vars['position'] = ($__vars['position'] + 1);
				$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
					'position' => $__vars['position'],
					'href' => $__vars['breadcrumb']['href'],
					'value' => $__vars['breadcrumb']['value'],
				), $__vars) . '
			';
			}
		}
	}
	$__compilerTemp1 .= '

		';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
		<ul class="top-breadcrumbs ' . ($__vars['variant'] ? ('p-breadcrumbs--' . $__templater->escape($__vars['variant'])) : '') . '"
			itemscope itemtype="https://schema.org/BreadcrumbList">
		' . $__compilerTemp1 . '
		</ul>
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'crumb' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'href' => '!',
		'value' => '!',
		'position' => 0,
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
		<a href="' . $__templater->escape($__vars['href']) . '" itemprop="item">
			<span itemprop="name">' . $__templater->escape($__vars['value']) . '</span>
		</a>
		';
	if ($__vars['position']) {
		$__finalCompiled .= '<meta itemprop="position" content="' . $__templater->escape($__vars['position']) . '" />';
	}
	$__finalCompiled .= '
	</li>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('xentr_top_section.less');
	$__finalCompiled .= '	

<div class="xentr-top-section gradient">
	
	';
	if (($__templater->func('property', array('xentr_navigation_position', ), false) == 'nextLogo') AND (($__vars['xf']['options']['xtr_enable_canvas_effect'] == 'yes') AND ($__templater->func('property', array('xentr_enable_top_section', ), false) == '1'))) {
		$__finalCompiled .= '
		<div class="xentr-top-section-particles">
			<div id="particles-js"></div>
		</div>	
	';
	}
	$__finalCompiled .= '
	
	<div class="section-content p-body-inner">
		';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '	
			<div class="section-content-title">
				';
		$__compilerTemp1 = '';
		$__compilerTemp1 .= '
						';
		$__compilerTemp2 = '';
		$__compilerTemp2 .= '
								';
		if (!$__vars['noH1']) {
			$__compilerTemp2 .= '
									<h1 class="p-title-value">' . $__templater->escape($__vars['h1']) . '</h1>
								';
		}
		$__compilerTemp2 .= '
							';
		if (strlen(trim($__compilerTemp2)) > 0) {
			$__compilerTemp1 .= '
							' . ($__vars['noH1'] ? 'p-title--noH1' : '') . '
							' . $__compilerTemp2 . '
						';
		}
		$__compilerTemp1 .= '

						';
		if (!$__templater->test($__vars['description'], 'empty', array())) {
			$__compilerTemp1 .= '
							<div class="p-description">' . $__templater->escape($__vars['description']) . '</div>
						';
		}
		$__compilerTemp1 .= '
					';
		if (!$__templater->test($__vars['headerHtml'], 'empty', array())) {
			$__finalCompiled .= '
					<div class="p-body-header">
						' . $__templater->filter($__vars['headerHtml'], array(array('raw', array()),), true) . '
					</div>
				';
		} else if (strlen(trim($__compilerTemp1)) > 0) {
			$__finalCompiled .= '
					<div class="p-body-header">
					' . $__compilerTemp1 . '
					</div>
				';
		}
		$__finalCompiled .= '			
			</div>
			<div class="sections-breadcrumbs">
				' . $__templater->callMacro(null, 'topBreadcrumbs', array(
			'breadcrumbs' => $__vars['breadcrumbs'],
			'navTree' => $__vars['navTree'],
			'selectedNavEntry' => $__vars['selectedNavEntry'],
		), $__vars) . '
			</div>
			';
	} else {
		$__finalCompiled .= '
			<div class="xentr-message-block">
				<h1 class="p-title-value">' . 'Welcome to' . ' ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '</h1>
				<h5 class="p-description">' . 'Join us now to get access to all our features. Once registered and logged in, you will be able to create topics, post replies to existing threads, give reputation to your fellow members, get your own private messenger, and so, so much more. It\'s also quick and totally free, so what are you waiting for?' . '</h5>
				<div class="block-outer block-outer--after button-group">
					' . $__templater->button('Вход', array(
			'href' => $__templater->func('link', array('login', ), false),
			'icon' => 'user',
			'data-xf-click' => 'overlay',
			'data-follow-redirects' => 'on',
		), '', array(
		)) . '
					';
		if ($__vars['xf']['options']['registrationSetup']['enabled']) {
			$__finalCompiled .= '
						' . $__templater->button('Регистрация', array(
				'href' => $__templater->func('link', array('register', ), false),
				'class' => 'button--cta',
				'icon' => 'add',
				'data-xf-click' => 'overlay',
				'data-follow-redirects' => 'on',
			), '', array(
			)) . '
					';
		}
		$__finalCompiled .= '
				</div>
			</div>
		';
	}
	$__finalCompiled .= '
	</div>
</div>

' . '

';
	return $__finalCompiled;
}
);