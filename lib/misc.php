<?php

function oldIncludeHook($name) {
	# Workaround for global variables.
	# TODO Check if this has a performance impact, and if so, think of something nicer.
	foreach ($GLOBALS as $key => $val) { global $$key; }
	
	# Did not use @include to not surpress fatal errors etc while executing hook script.
	/*old includehook*/
	$file = TEMPLATE_ROOT . '/hooks/' . $name . '.html';
	if(file_exists($file)) {
		include($file);
		tpl_flush();
	}
	
}

function echoPagename() {
	global $ID, $lang;
	echo "[[";
	tpl_link(wl($ID,'do=backlink'),tpl_pagetitle($ID,true),'title="'.$lang['btn_backlink'].'"');
	echo "]]";
}

function echoLogo() {
	global $conf;
	tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[H]"');
}