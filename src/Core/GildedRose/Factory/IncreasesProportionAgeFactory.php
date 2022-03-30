<?php

namespace App\Core\GildedRose\Factory;

use App\Core\GildedRose\Interfaces\Product;
use App\Core\GildedRose\Interfaces\FactoryProduct;
use App\Core\GildedRose\Lib\IncreasesProportionAge;

/**
 * Kачество товара увеличивается пропорционально возрасту
 *
 * Class IncreasesProportionAgeFactory
 * @package App\Core\GildedRose\Factory
 */
class IncreasesProportionAgeFactory implements FactoryProduct
{
    public function getProduct(): Product
    {
        return new IncreasesProportionAge();
    }
}
