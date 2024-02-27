<?php

use Ddaniel\SymfonyExperiments\TestConsole;
use Symfony\Component\Console\Application;

require 'vendor/autoload.php';

$application = new Application();
$application->add(new TestConsole());
$application->run();