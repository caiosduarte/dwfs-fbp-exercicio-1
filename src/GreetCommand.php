<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GreetCommand extends Command
{
    protected function configure()
    {
        $this->setName('greetings');
        $this->addArgument('name');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = strtoupper($input->getArgument('name'));
        $output->writeln( "Olá, seja-bem vindo, '$name'!" . PHP_EOL);
        return 0;
    }
}
