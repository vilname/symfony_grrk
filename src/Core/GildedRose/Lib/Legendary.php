<?php

namespace App\Core\GildedRose\Lib;

use App\Core\GildedRose\Interfaces\Product;
use App\Entity\Items;

class Legendary implements Product
{
    public function updateQuality(Items $items): ?Items
    {
        return $items;
    }
}