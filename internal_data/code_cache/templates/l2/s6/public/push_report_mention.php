<?php
// FROM HASH: 6ed4fbae2d1d5ae43defb6088d937250
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '' . ($__templater->escape($__vars['user']['username']) ?: $__templater->escape($__vars['alert']['username'])) . ' упомянул(а) Вас в комментарии к жалобе ' . $__templater->escape($__vars['content']['title']) . '.' . '
<push:url>' . $__templater->func('link', array('reports', $__vars['content'], ), true) . '#report-comment-' . $__templater->escape($__vars['alert']['extra_data']['comment']['report_comment_id']) . '</push:url>';
	return $__finalCompiled;
}
);