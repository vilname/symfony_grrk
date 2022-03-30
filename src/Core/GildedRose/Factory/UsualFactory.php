<?php

namespace App\Core\GildedRose\Factory;

use App\Core\GildedRose\Interfaces\Product;
use App\Core\GildedRose\Interfaces\FactoryProduct;
use App\Core\GildedRose\Lib\Usual;

/**
 * Обычный товар
 *
 * Class UsualFactory
 * @package App\Core\GildedRose\Factory
 */
class UsualFactory implements FactoryProduct
{
    public function getProduct(): Product
    {
        return new Usual();
    }
}
