<?php

declare(strict_types=1);

namespace App\Command\Logistics;

use App\FactoryMethod\Logistics\ShipCreator;
use App\FactoryMethod\Logistics\TruckCreator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DeliverCommand extends Command
{
    protected function configure()
    {
        $this->setName('deliver')
            ->setDescription('Transport delivery')
            ->addArgument('deliverType', InputArgument::REQUIRED, 'Deliver type');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        switch ($input->getArgument('deliverType')) {
            case ('road'):
                $creator = new TruckCreator();
                break;
            case ('sea'):
                $creator = new ShipCreator();
                break;
            default:
                throw new \Exception('Current deliver method not support');
        }

        $transport = $creator->createTransport();
        $output->writeln($transport->deliver());
    }
}
