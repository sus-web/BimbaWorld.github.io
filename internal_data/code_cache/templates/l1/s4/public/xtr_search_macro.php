<?php
// FROM HASH: 2822bcb28353fa40807815dc009c00e5
return array(
'macros' => array('searchbox_macro' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'searchConstraints' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
    ';
	if ($__templater->method($__vars['xf']['visitor'], 'canSearch', array())) {
		$__finalCompiled .= '

        <div class="search-box">
            ' . $__templater->formTextBox(array(
			'name' => 'keywords',
			'id' => 'search-typed',
			'placeholder' => 'Search',
			'aria-label' => 'Search',
			'form' => 'search',
			'data-menu-autofocus' => 'true',
		)) . '
            <div class="btn-group" role="group">
				
				' . $__templater->button('
					' . $__templater->fontAwesome('fa-search', array(
		)) . '
				', array(
			'type' => 'submit',
			'form' => 'search',
			'aria-label' => 'More options',
			'aria-expanded' => 'false',
			'data-xf-init' => 'tooltip',
			'title' => 'Search',
			'class' => 'button--primary',
			'aria-haspopup' => 'true',
		), '', array(
		)) . '
					
				' . $__templater->button('
					' . $__templater->fontAwesome('fa-angle-down', array(
		)) . '
				', array(
			'class' => 'button--link button--small menuTrigger',
			'data-xf-click' => 'menu',
			'aria-label' => 'More options',
			'aria-expanded' => 'false',
			'data-xf-init' => 'tooltip',
			'title' => 'Advanced search',
			'aria-haspopup' => 'true',
		), '', array(
		)) . '
				<div class="menu menu--structural search" data-menu="menu" aria-hidden="true">
                    <form action="' . $__templater->func('link', array('search/search', ), true) . '" id="search" method="post" class="menu-content" data-xf-init="quick-search">

						' . '
						';
		if ($__vars['searchConstraints']) {
			$__finalCompiled .= '
							<div class="menu-row">
								';
			$__compilerTemp1 = array(array(
				'value' => '',
				'label' => 'Everywhere',
				'_type' => 'option',
			));
			if ($__templater->isTraversable($__vars['searchConstraints'])) {
				foreach ($__vars['searchConstraints'] AS $__vars['constraintName'] => $__vars['constraint']) {
					$__compilerTemp1[] = array(
						'value' => $__templater->filter($__vars['constraint'], array(array('json', array()),), false),
						'label' => $__templater->escape($__vars['constraintName']),
						'_type' => 'option',
					);
				}
			}
			$__finalCompiled .= $__templater->formSelect(array(
				'name' => 'constraints',
				'class' => 'js-quickSearch-constraint',
				'aria-label' => 'Search within',
			), $__compilerTemp1) . '
							</div>
						';
		}
		$__finalCompiled .= '

						' . '
						<div class="menu-row">
							' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => 'c[title_only]',
			'label' => 'Search titles only',
			'_type' => 'option',
		))) . '
						</div>
						' . '
						<div class="menu-row">
							<div class="inputGroup">
								<span class="inputGroup-text" id="ctrl_search_menu_by_member">' . 'By' . $__vars['xf']['language']['label_separator'] . '</span>
								<input type="text" class="input" name="c[users]" data-xf-init="auto-complete" placeholder="' . $__templater->filter('Member', array(array('for_attr', array()),), true) . '" aria-labelledby="ctrl_search_menu_by_member" />
							</div>
						</div>
						<div class="menu-footer">
							<span class="menu-footer-controls">
								' . $__templater->button('', array(
			'type' => 'submit',
			'class' => 'button--primary',
			'icon' => 'search',
		), '', array(
		)) . '
								' . $__templater->button('Advanced search' . $__vars['xf']['language']['ellipsis'], array(
			'href' => $__templater->func('link', array('search', ), false),
		), '', array(
		)) . '
							</span>
						</div>

						' . $__templater->func('csrf_input') . '
					</form>
				</div>
            </div>
        </div>
		
    ';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';

	return $__finalCompiled;
}
);