<?php

namespace App\Core\GildedRose\Lib;

use App\Core\GildedRose\Interfaces\Product;
use App\Entity\Items;

class BackstagePasses implements Product
{
    public function updateQuality(Items $items): ?Items
    {
        $interval = $items->getCreatedAt()->diff(new \DateTime());

        // если истек срок хранения
        if ($interval->days > $items->getSellIn()) {
            if ($items->getQuality()) {
                $items->setQuality(0);
                return $items;
            }

            return null;
        }

        if ($items->getSellIn() - $interval->days <= 5) {
            $items->setQuality($items->getQuality() + 3);
            return $items;
        }

        if ($items->getSellIn() - $interval->days <= 10) {
            $items->setQuality($items->getQuality() + 2);
            return $items;
        }

        $items->setQuality($items->getQuality() + 1);
        return $items;
    }
}
