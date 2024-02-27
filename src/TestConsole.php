<?php

namespace Ddaniel\SymfonyExperiments;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestConsole extends Command {
	protected static $defaultName = 'ddaniel:hello';

	protected function configure()
	{
		$this->setDescription('Outputs hello for you')
			->addArgument('name', InputArgument::REQUIRED, 'Your name');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$name = ucfirst($input->getArgument( 'name' ));
		$output->writeln("Hello $name!");

		return static::SUCCESS;
	}
}