<?php

namespace App\Command;

use App\Core\GildedRose\Factory\ProducerFactory;
use App\Core\GildedRose\Interfaces\Product;
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

        $items = $this->itemsService->findAll();

//        dd($items);

        foreach($items as $item) {
            /** @var Product $product */
            $product = ProducerFactory::getFactory($item->getSellIn())->getProduct();
            $itemProduct = $product->updateQuality($item);

            if (!$itemProduct) {
                continue;
            }

            $this->itemsService->save($itemProduct);
        }

        return Command::SUCCESS;
    }
}
