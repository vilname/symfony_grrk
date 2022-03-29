<?php

namespace App\Core\GildedRose\Interfaces;

use App\Entity\Items;

interface Product
{
    public function updateQuality(Items $items): ?Items;
}
