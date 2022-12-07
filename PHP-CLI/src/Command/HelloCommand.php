<?php

namespace PhpCli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('hello')
            ->addArgument('name', InputArgument::REQUIRED, 'La personne à saluer')
            ->addOption('upper', 'u', InputOption::VALUE_NONE, 'Affiche le nom en majuscule');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');

        if ($input->getOption('upper')) {
            $name = strtoupper($name);
        }

        $output->writeln("Hello $name");
        return Command::SUCCESS;
    }

}