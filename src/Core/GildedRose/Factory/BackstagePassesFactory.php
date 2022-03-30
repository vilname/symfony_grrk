<?php

namespace App\Core\GildedRose\Factory;

use App\Core\GildedRose\Interfaces\FactoryProduct;
use App\Core\GildedRose\Interfaces\Product;
use App\Core\GildedRose\Lib\BackstagePasses;

class BackstagePassesFactory implements FactoryProduct
{
    public function getProduct(): Product
    {
        return new BackstagePasses();
    }
}
