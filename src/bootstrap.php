<?php

require '/../vendor/autoload.php';

error_reporting(E_ALL);

/**
 * Register error handler
 */
$whoops = new Filip\whoops;

$environment = 'development';

if($environment == 'development') {
	$whoops->pushHandler(new \whoops\Handler\PrettyPageHandler);
} else {
	$whoops->pushHandler(function($e) {
		echo 'Something went wrong!';
	});
}

$whoops->register();

throw new \Exception;