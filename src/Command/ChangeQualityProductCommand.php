<?php

namespace App\Command;

use App\Service\ItemsService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ChangeQualityProductCommand extends Command
{
    protected static $defaultName = 'app:change-quality';
    protected static $defaultDescription = 'Изменение качества товара в зависимости от срока годности';
    protected ItemsService $itemsService;

    public function __construct(ItemsService $itemsService, string $name = null)
    {
        $this->itemsService = $itemsService;
        parent::__construct($name);
    }

    protected function configure(): void
    {

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
//        $io = new SymfonyStyle($input, $output);
//
//        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        foreach($this->itemsService->findAll() as $item) {

        }

        return Command::SUCCESS;
    }
}
