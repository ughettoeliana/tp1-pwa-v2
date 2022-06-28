<?php

spl_autoload_register(function ($className) {
	$filename = __DIR__ . "/../clases/" . $className . ".php";

	if(file_exists($filename)) {
		require_once $filename;
	}
});