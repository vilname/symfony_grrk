<?php

namespace App\Core\GildedRose\Interfaces;

interface Producer
{
    public static function getFactory(string $factory): FactoryProduct;
}
