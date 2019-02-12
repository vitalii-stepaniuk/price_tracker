<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use GuzzleHttp\Client;



class CheckHistoryCommand extends Command
{
    protected static $defaultName = 'CheckHistory';

    protected function configure()
    {
        $this
            ->setDescription('Visits products, registers prices, notifies subscribers')
 //           ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
 //           ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $client = new Client();
        $response = $client->get('https://www.flagman.kiev.ua');
        $content = $response->getBody()->getContents();
        var_dump($content);
        die(333);


        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
    }
}
