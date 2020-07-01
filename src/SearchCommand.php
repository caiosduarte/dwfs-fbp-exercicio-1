<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use App\Engine\Wikipedia\WikipediaEngine;
use App\Engine\Wikipedia\WikipediaParser;
use Symfony\Component\HttpClient\HttpClient;

class SearchCommand extends Command
{
    protected function configure()
    {
        $this->setName('search');
        $this->addArgument('term');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $term = $input->getArgument('term');
        $output->writeln( "Termo a ser pesquisado na wikipedia: '$term'" . PHP_EOL);
        $wikipedia = new WikipediaEngine(new WikipediaParser(), HttpClient::create());
        $result = $wikipedia->search($term);
        var_dump($result);        
        return 0;
    }
}
