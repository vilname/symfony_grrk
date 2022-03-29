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
    protected static string $factory = 'increases_proportion_age';

    public function getProduct(): Product
    {
        return new IncreasesProportionAge();
    }
}
