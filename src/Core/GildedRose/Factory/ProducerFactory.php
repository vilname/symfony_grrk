<?php

namespace App\Core\GildedRose\Factory;

use App\Core\GildedRose\Interfaces\FactoryProduct;
use App\Core\GildedRose\Interfaces\Producer;

class ProducerFactory implements Producer
{
    public static function getFactory(string $factory): FactoryProduct
    {
        switch ($factory) {
            case 'conjured':
                return new ConjuredFactory();
            case 'increases_proportion_age':
                return new IncreasesProportionAgeFactory();
            case 'legendary':
                return new LegendaryFactory();
            case 'backstage_passes':
                return new BackstagePassesFactory();
            default:
                return new UsualFactory();
        }
    }
}
