<?php
// FROM HASH: aa2e507cf24736b6fc031fc4c3e119d9
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('xentr_thread_login_register.less');
	$__finalCompiled .= '

<section class="thread-reply">
    <div class="reply-rows">
        <div class="reply-item full">
            <div class="p-body-header">
                <h1 class="p-title-value">' . 'Create an account or login to comment' . '</h1>
                <div class="p-description">' . 'You must log in or register to reply here.' . '</div>
            </div>
        </div>
        <div class="reply-item reply-largest:grid-col-5 reply-large:grid-col-5 reply-medium:grid-col-5">		
			<div class="block login">
				<div class="block-container">
					<div class="block-body block-row">
						<div class="p-body-header">
							<h1 class="p-title-value">' . 'Log in' . '</h1>
							<div class="p-description">' . 'Already have an account? Log in here.' . '</div>		
						</div>
						<div class="thread-reply-button">
							' . $__templater->button('
								' . 'Log in' . '
							', array(
		'href' => $__templater->func('link', array('login/login', ), false),
		'class' => 'button--primary reply-item reply-largest:grid-col-4 reply-large:grid-col-4 reply-medium:grid-col-4',
		'icon' => 'login',
		'data-xf-click' => 'overlay',
		'data-follow-redirects' => 'on',
	), '', array(
	)) . '
						</div>
					</div>
				</div>	
			</div>
		</div>	
        <div class="reply-item reply-largest:grid-col-2 reply-large:grid-col-2 reply-medium:grid-col-2 xtr-center-block">
            <div class="blockMessage blockMessage--none">' . 'or' . '</div>
        </div>
        <div class="reply-item reply-largest:grid-col-5 reply-large:grid-col-5 reply-medium:grid-col-5">
			<div class="block register">
				<div class="block-container">
					<div class="block-body block-row">
						<div class="p-body-header">
							<h1 class="p-title-value">' . 'Create new account' . '</h1>
							<div class="p-description">' . 'Create an account on our community. It\'s easy!' . '</div>
						</div>
						';
	if ($__vars['xf']['options']['registrationSetup']['enabled']) {
		$__finalCompiled .= '
							<div class="thread-reply-button">
								' . $__templater->button('
									' . 'Register' . '
								', array(
			'href' => $__templater->func('link', array('register', ), false),
			'class' => 'button--primary reply-item reply-largest:grid-col-4 reply-large:grid-col-4 reply-medium:grid-col-4',
			'icon' => 'add',
			'data-xf-click' => 'overlay',
			'data-follow-redirects' => 'on',
		), '', array(
		)) . '	
							</div>
						';
	}
	$__finalCompiled .= '	
					</div>
				</div>	
			</div>
        </div>
    </div>
</section>';
	return $__finalCompiled;
}
);