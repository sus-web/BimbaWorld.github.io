<?php
// FROM HASH: 450ebaabc18c9c5046e33a92eba209ab
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Импорт данных' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['title']));
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<h2 class="block-tabHeader tabs" data-xf-init="tabs" role="tablist">
			<a class="tabs-tab is-active" role="tab" tabindex="0" aria-controls="import-web">' . 'Импортёр в браузере' . '</a>
			<a class="tabs-tab" role="tab" tabindex="0" aria-controls="import-cli">' . 'CLI-импортёр' . '</a>
		</h2>
		<ul class="tabPanes">
			<li class="is-active" role="tabpanel" id="import-web">
				<div class="block-body block-row">
					' . 'Теперь Вы готовы начать импорт. После запуска импорт продолжит работу, пока это окно браузера открыто. После того, как все данные будут импортированы, будут показаны дальнейшие инструкции.' . '
				</div>
				' . $__templater->formSubmitRow(array(
		'submit' => 'Начать импорт',
	), array(
		'rowtype' => 'simple',
	)) . '
			</li>
			<li role="tabpanel" id="import-cli">
				<div class="block-body block-row">
					' . 'Так же Вы можете произвести импорт через командную строку. Это рекомендуется при больших объёмах данных. Выполните данную команду из корневой директории XenForo и следуйте инструкциям на экране' . $__vars['xf']['language']['label_separator'] . '
					<pre style="margin: 1em 2em">php cmd.php xf:import</pre>
					' . 'По завершении этой команды Вам нужно будет обновить данную страницу, чтобы завершить импорт.' . '<br />
					<br />
					' . 'Имеются дополнительные опции, доступные через командную строку. Запустите команду с параметром <code>--help</code> для получения дополнительной информации.' . '
				</div>
			</li>
		</ul>
	</div>
', array(
		'action' => $__templater->func('link', array('import/run', ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
}
);