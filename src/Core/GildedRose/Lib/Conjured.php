<?php


namespace App\Core\GildedRose\Lib;


use App\Core\GildedRose\Interfaces\Product;
use App\Entity\Items;

class Conjured implements Product
{
    private int $changeQuality = 2;
    private int $changeSellIn = 1;

    /**
     * @param Items $items
     * @return Items|null
     */
    public function updateQuality(Items $items): ?Items
    {
        if (!$items->getQuality()) {
            return null;
        }

        if (!$items->getSellIn()) {
            $this->changeQuality *= 2;
            $this->changeSellIn = 0;
        }

        $items->setSellIn($items->getSellIn() - $this->changeSellIn);
        $items->setQuality($items->getQuality() - $this->changeQuality);

        return $items;
    }
}
