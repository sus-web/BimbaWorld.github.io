<?php
// FROM HASH: ff899b2eabdbaaffe7ce0692b513c19f
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'В данный момент форум закрыт для посетителей. Только администраторы имеют к нему доступ.' . '<br />
<a href="' . $__templater->func('link_type', array('admin', 'options/groups', array('group_id' => 'boardActive', ), ), true) . '">' . 'Открыть форум в панели управления' . '</a>';
	return $__finalCompiled;
}
);