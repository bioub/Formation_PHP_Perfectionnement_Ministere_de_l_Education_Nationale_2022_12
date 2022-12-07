<?php

namespace PhpCli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AboutCommand extends Command
{
    protected function configure()
    {
        $this->setName('about');
        $this->setDescription('Show infos about this program');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // la "balise" <info> affiche le contenu en vert
        $output->writeln('<info>Mon super programme</info>');
        return Command::SUCCESS;
    }

}