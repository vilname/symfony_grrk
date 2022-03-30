<?php


namespace App\Core\GildedRose\Lib;


use App\Core\GildedRose\Interfaces\Product;
use App\Entity\Items;

class Conjured implements Product
{
    private int $changeQuality = 2;

    /**
     * @param Items $items
     * @return Items|null
     */
    public function updateQuality(Items $items): ?Items
    {
        $interval = $items->getCreatedAt()->diff(new \DateTime());

        if (!$items->getQuality()) {
            return null;
        }

        if ($interval->days > $items->getSellIn()) {
            $this->changeQuality *= 2;
        }

        $items->setQuality($items->getQuality() - $this->changeQuality);

        return $items;
    }
}
