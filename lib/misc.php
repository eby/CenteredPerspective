<?php

function oldIncludeHook($name) {
	/*old includehook*/ @include(TEMPLATE_ROOT . '/hooks/' . $name . '.html');
}

function echoPagename() {
	echo "[[";
	tpl_link(wl($ID,'do=backlink'),tpl_pagetitle($ID,true),'title="'.$lang['btn_backlink'].'"');
	echo "]]";
}

function echoLogo() {
	tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[H]"');
}