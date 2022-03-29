<?php


namespace App\Core\GildedRose\Lib;

use App\Core\GildedRose\Interfaces\Product;
use App\Entity\Items;

class IncreasesProportionAge implements Product
{
    /**
     * @param Items $items
     * @return Items|null
     */
    public function updateQuality(Items $items): ?Items
    {
        $interval = $items->getCreatedAt()->diff(new \DateTime('2022-03-28'));

        if ($items->getQuality() == 50) {
            return null;
        }

        if ($items->getQuality() + $interval->days > 50) {
            $items->setQuality(50);
            return $items;
        }

        $items->setQuality($items->getQuality() + $interval->days);
        return $items;
    }
}
