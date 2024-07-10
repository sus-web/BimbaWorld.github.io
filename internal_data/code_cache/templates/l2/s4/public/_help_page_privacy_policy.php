<?php
// FROM HASH: 29e4864740e8913fc940c712f3a32382
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<p>Мы - ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' ("мы", "наш", "нас"). Мы стремимся защищать Вашу конфиденциальность и уважать её. Если у Вас есть вопросы о Вашей личной информации, пожалуйста, <a href="' . $__templater->escape($__vars['xf']['contactUrl']) . '">свяжитесь с нами</a>.</p>

<h2>Какую информацию о Вас мы собираем</h2>
<p>Типы данных, которые мы собираем и обрабатываем включают в себя следующее:</p>
<ul>
	<li>Ваше реальное имя или никнейм на сайте.</li>
	<li>Ваш адрес электронной почты.</li>
	<li>Ваш IP-адрес.</li>
</ul>
<p>Дополнительные данные могут быть собраны, если Вы решите поделиться ими, например, если Вы заполните поля в своём профиле.</p>
<p>Мы собираем некоторую или всю эту информацию в следующих случаях:</p>
<ul>
	<li>Вы регистрируетесь как участник на этом сайте.</li>
	<li>Вы заполняете нашу форму обратной связи.</li>
	<li>Вы просматриваете этот сайт. Смотрите пункт "Политика в отношении файлов cookie" ниже.</li>
	<li>Вы заполняете поля в своём профиле.</li>
</ul>

<h2>Как используется Ваша личная информация</h2>
<p>Мы можем использовать Вашу личную информацию в следующих целях:</p>
<ul>
	<li>Для того, чтобы сделать Вас зарегистрированным участником нашего сайта, чтобы Вы могли добавлять на него контент.</li>
	<li>Мы можем использовать Ваш адрес электронной почты, чтобы информировать Вас об активности на нашем сайте.</li>
	<li>Ваш IP-адрес записывается при выполнении определённых действий на нашем сайте. Он никогда не отображается публично.</li>
</ul>

<h2>Другие варианты использования Вашей личной информации</h2>
<p>В дополнение к оповещениям Вас об активности на нашем сайте, время от времени мы можем связываться со всеми пользователями посредством рассылки на электронную почту или объявлений для того, чтобы рассказать им какую-либо важную информацию. Вы можете отказаться от подобных рассылок в своём профиле.</p>
<p>В ходе Вашего использования нашего сайта мы можем собирать информацию, не связанную с личными сведениями о Вас. Эти данные могут содержать техническую информацию о браузере или типе устройства, которые Вы используете. Эта информация будет использоваться исключительно для целей аналитики и отслеживания количества посетителей нашего сайта.</p>

<h2>Обеспечение безопасности данных</h2>
<p>Мы стремимся обеспечить безопасность любой информации, которую Вы нам предоставляете. Чтобы предотвратить несанкционированный доступ или раскрытие информации, мы добавили подходящие меры и процедуры для защиты и обеспечения безопасности информации, которую мы собираем.</p>

<h2>Политика в отношении файлов cookie</h2>
<p>Cookie - это небольшие текстовые файлы, которые будут установлены нашим сайтом на Ваш компьютер, они позволят нам предоставлять определённые функции на нашем сайте, такие как возможность входа в систему или запоминание определённых предпочтений.</p>
<p>Более подробную информацию о cookie Вы можете прочитать на <a href="' . $__templater->func('link', array('help/cookies', ), true) . '">этой странице</a>.</p>

<h2>Права</h2>
<p>Вы имеете право получить доступ к личным данным, которые у нас имеются о Вас, или получить их копию. Для этого <a href="' . $__templater->escape($__vars['xf']['contactUrl']) . '">свяжитесь с нами</a>. Если Вы считаете, что информация, которую мы о Вас имеем является неполной или неточной, то Вы можете попросить нас дополнить или исправить эту информацию.</p>
<p>Вы также имеете право запросить удаление Ваших личных данных. Пожалуйста, <a href="' . $__templater->escape($__vars['xf']['contactUrl']) . '">свяжитесь с нами</a>, если Вы хотите, чтобы мы удалили Ваши личные данные.</p>

<h2>Принятие политики</h2>
<p>Дальнейшее использование нашего сайта означает Ваше полное согласие с этой политикой. Если Вы не согласны с нашей политикой, то пожалуйста, не используйте данный сайт. При регистрации мы также запросим Ваше явное согласие с политикой конфиденциальности.</p>

<h2>Изменения в политике</h2>
<p>Мы можем вносить изменения в данную политику в любое время. Вам может быть предложено ознакомиться и повторно принять информацию в этой политике, если она изменится в будущем.</p>' . '

' . '

';
	if ($__vars['captcha'] AND $__vars['xf']['options']['includeCaptchaPrivacyPolicy']) {
		$__finalCompiled .= '
	';
		$__compilerTemp1 = '';
		$__compilerTemp1 .= $__templater->escape($__templater->method($__vars['captcha'], 'getPrivacyPolicy', array()));
		if (strlen(trim($__compilerTemp1)) > 0) {
			$__finalCompiled .= '
		<h2>' . 'Политика конфиденциальности CAPTCHA' . '</h2>
		' . $__compilerTemp1 . '
	';
		}
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	return $__finalCompiled;
}
);