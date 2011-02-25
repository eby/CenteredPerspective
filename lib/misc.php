<?php

function oldIncludeHook($name) {
	/*old includehook*/ @include(TEMPLATE_ROOT . '/hooks/' . $name . '.html');
}