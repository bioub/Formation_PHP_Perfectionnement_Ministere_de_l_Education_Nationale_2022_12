<?php

namespace PhpCli\Command;

use Exception;
use PhpCli\Banque\CompteBancaire;
use PhpCli\Banque\Exception\DecouvertException;
use PhpCli\Banque\Exception\MontantException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class DebiterCommand extends \Symfony\Component\Console\Command\Command
{
    protected function configure()
    {
        $this->setName('debiter')
            ->setDescription('Permet de débiter un compte bancaire')
            ->addArgument('montant', InputArgument::REQUIRED, 'Le montant à débiter')
            ->addOption('solde-initial', mode: InputOption::VALUE_OPTIONAL, default: 0);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $montant = (int) $input->getArgument('montant');
            $solde = (int) $input->getOption('solde-initial');

            $compte = new CompteBancaire();
            $compte->crediter($solde);
            $compte->debiter($montant);

            $output->writeln('Le solde est maintenant de ' . $compte->getSolde());

            return Command::SUCCESS;
        }
        catch (MontantException $e) {
            $output->writeln('<error>Le montant ne doit pas être négatif</error>');
            return Command::INVALID;
        }
        catch (DecouvertException $e) {
            $output->writeln('<error>Le compte ne doit pas être à découvert</error>');
            return Command::FAILURE;
        }
        catch (Exception $e) {
            $output->writeln("<error>Une erreur s'est produite</error>");
            return Command::FAILURE;
        }
    }

}