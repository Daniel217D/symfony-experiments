<?php

use Ddaniel\SymfonyExperiments\TestConsole;
use Symfony\Component\Console\Application;

require 'vendor/autoload.php';

if( php_sapi_name() === 'cli' ) {
	$application = new Application();
	$application->add(new TestConsole());
	$application->run();
	die();
}

