<?php

namespace App\Core\GildedRose\Lib;

use App\Core\GildedRose\Interfaces\Product;
use App\Entity\Items;

class Legendary implements Product
{
    // качество товара ни когда не изменяется
    public function updateQuality(Items $items): ?Items
    {
        return null;
    }
}