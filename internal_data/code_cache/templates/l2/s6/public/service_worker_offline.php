<?php
// FROM HASH: 8883e252dda76f8f81f999d11160768d
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->setPageParam('template', 'OFFLINE_CONTAINER');
	$__finalCompiled .= '
';
	$__templater->setPageParam('css', $__templater->filter($__vars['css'], array(array('raw', array()),), true));
	$__finalCompiled .= '

';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Страница не может быть загружена');
	$__finalCompiled .= '

<div class="p-offline-main">
	' . 'Запрашиваемая страница не может быть загружена.

<ul>
	<li>Проверьте своё интернет-соединение и попробуйте снова.</li>
	<li>Некоторые расширения браузера, такие как блокировщики рекламы, могут неожиданно блокировать страницы. Отключите их и попробуйте ещё раз.</li>
	<li>' . ($__templater->escape($__vars['xf']['options']['boardShortTitle']) ?: $__templater->escape($__vars['xf']['options']['boardTitle'])) . ' может быть временно недоступна. Пожалуйста, зайдите позже.</li>
</ul>' . '

	<a href="javascript:window.location.reload();" class="button">' . 'Перезагрузить' . '</a>
</div>

<script>
	window.addEventListener(\'online\', function()
	{
		window.location.reload();
	});
</script>';
	return $__finalCompiled;
}
);