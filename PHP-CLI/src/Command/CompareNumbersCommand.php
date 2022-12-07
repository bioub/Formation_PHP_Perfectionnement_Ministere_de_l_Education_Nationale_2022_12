<?php

namespace PhpCli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CompareNumbersCommand extends \Symfony\Component\Console\Command\Command
{
    protected function configure()
    {
        $this->setName('compare-numbers')
            ->setDescription('Affiche le plus grand des 2 nombres')
            ->addArgument('nb1', InputArgument::REQUIRED, 'Le premier nombre')
            ->addArgument('nb2', InputArgument::REQUIRED, 'Le 2e nombre');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $nb1 = (int) $input->getArgument('nb1');
        $nb2 = (int) $input->getArgument('nb2');

        if ($nb1 > $nb2) {
            $output->writeln("$nb1 est plus grand que $nb2");
        } else if ($nb1 < $nb2) {
            $output->writeln("$nb1 est plus petit que $nb2");
        } else {
            $output->writeln("$nb1 est égal à $nb2");
        }

        return Command::SUCCESS;
    }

}