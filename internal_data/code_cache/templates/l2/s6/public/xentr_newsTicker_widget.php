<?php
// FROM HASH: e3848f5c0bee0be5e46571c490eb5ef3
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('xentr_newsTicker_widget.less');
	$__finalCompiled .= '	

<div class="new-tickers-wrap">
	<div class="new-tickers p-body-inner">
		<div class="new-tickers-stairs left red">
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
		</div>

		<div class="new-tickers-stairs right blue">
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
			<div class="new-tickers-stair"></div>
		</div>
		
		<div class="live-news-widget-title-wrap">
			
			<p class="live-news-widget-title">' . 'Latest Thread' . '</p>
		</div>

		<div id="xentr-live-ticker" class="new-tickers-text-wrap">
			<ul id="xtr-live-ticker">
			';
	if ($__templater->isTraversable($__vars['threads'])) {
		foreach ($__vars['threads'] AS $__vars['thread']) {
			$__finalCompiled .= '
			';
			$__vars['post'] = $__vars['thread']['FirstPost'];
			$__finalCompiled .= '
				<li>
					';
			$__vars['canPreview'] = $__templater->method($__vars['thread'], 'canPreview', array());
			$__finalCompiled .= '
						<span>' . $__templater->func('prefix', array('thread', $__vars['thread'], ), true) . ' 
							<a href="' . $__templater->func('link', array('threads' . ((($__templater->method($__vars['thread'], 'isUnread', array()) AND (!$__vars['forceRead']))) ? '/unread' : ''), $__vars['thread'], ), true) . '" class="" data-tp-primary="on" data-xf-init="' . ($__vars['canPreview'] ? 'preview-tooltip' : '') . '" data-preview-url="' . ($__vars['canPreview'] ? $__templater->func('link', array('threads/preview', $__vars['thread'], ), true) : '') . '">' . $__templater->escape($__vars['thread']['title']) . '</a>
						</span>				
					</li>
			';
		}
	}
	$__finalCompiled .= '
			</ul>
		</div>
	</div>
</div>';
	return $__finalCompiled;
}
);