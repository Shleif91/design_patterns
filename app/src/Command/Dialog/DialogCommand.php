<?php

declare(strict_types=1);

namespace App\Command\Dialog;

use App\FactoryMethod\Dialog\WebDialog;
use App\FactoryMethod\Dialog\WindowsDialog;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DialogCommand extends Command
{
    protected function configure()
    {
        $this->setName('dialog')
            ->setDescription('Open dialog')
            ->addArgument('dialogType', InputArgument::REQUIRED, 'Dialog type');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        switch ($input->getArgument('dialogType')) {
            case ('windows'):
                $dialog = new WindowsDialog();
                break;
            case ('web'):
                $dialog = new WebDialog();
                break;
            default:
                throw new \Exception('Current dialog type not support');
        }

        $output->writeln($dialog->renderWindow());
    }
}
