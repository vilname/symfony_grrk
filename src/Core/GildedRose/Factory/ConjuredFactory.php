<?php

namespace App\Core\GildedRose\Factory;

use App\Core\GildedRose\Interfaces\Product;
use App\Core\GildedRose\Interfaces\FactoryProduct;
use App\Core\GildedRose\Lib\Conjured;

/**
 * Товары теряют качество в два раза быстрее, чем обычные товары
 *
 * Class ConjuredFactory
 * @package App\Core\GildedRose\Factory
 */
class ConjuredFactory implements FactoryProduct
{
    protected static string $factory = 'conjured';

    public function getProduct(): Product
    {
        return new Conjured();
    }
}
