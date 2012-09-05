<?php
//lianghonghao@baixing.com
include __DIR__ . "/graph/init.php";

define('CONTROLLER_DIR', __DIR__ . "/controller");
define('VIEWS_DIR', __DIR__ . "/view");

spl_autoload_register(function($name) {
	if (file_exists(__DIR__ . "/lib/{$name}.php")) {
		require __DIR__ . "/lib/{$name}.php";
	}
});

