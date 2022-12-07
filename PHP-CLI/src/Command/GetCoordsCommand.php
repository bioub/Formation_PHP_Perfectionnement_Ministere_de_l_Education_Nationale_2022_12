<?php

namespace PhpCli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpClient\HttpClient;

class GetCoordsCommand extends \Symfony\Component\Console\Command\Command
{
    protected function configure()
    {
        $this->setName('get-coords')->addArgument('address');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $address = $input->getArgument('address');

        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', 'https://api-adresse.data.gouv.fr/search/', [
            'query' => [
                'q' => $address
            ]
        ]);

        $data = $response->toArray();

        foreach ($data['features'] as $feature) {
            $label = $feature['properties']['label'];
            [$lng, $lat] = $feature['geometry']['coordinates'];

            $output->writeln("Label: $label, Lat: $lat, Lng: $lng");
        }

        return Command::SUCCESS;
    }

}