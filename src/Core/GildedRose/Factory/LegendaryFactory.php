<?php

namespace App\Core\GildedRose\Factory;

use App\Core\GildedRose\Interfaces\Product;
use App\Core\GildedRose\Interfaces\FactoryProduct;
use App\Core\GildedRose\Lib\Legendary;

/**
 * Легендарный товар, нет срока хранения и не подвержен ухудшению качества
 *
 * Class LegendaryFactory
 * @package App\Core\GildedRose\Factory
 */
class LegendaryFactory implements FactoryProduct
{
    public function getProduct(): Product
    {
        return new Legendary();
    }
}
