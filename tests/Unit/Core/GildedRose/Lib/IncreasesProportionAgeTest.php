<?php

namespace App\Tests\Unit\Core\GildedRose\Lib;

use App\Core\GildedRose\Lib\IncreasesProportionAge;
use App\Entity\Items;
use PHPUnit\Framework\TestCase;

class IncreasesProportionAgeTest extends TestCase
{
    public function testConjured(): void
    {
        $arr = [
            [
                'quality' => 10,
                'sell_in' => 5,
                'answer_sell_in' => 11
            ],
            [
                'quality' => 49,
                'sell_in' => 5,
                'answer_sell_in' => 50
            ]
        ];

        foreach ($arr as $sellIn) {
            $items = new Items();
            $items->setQuality($sellIn['quality']);
            $items->setSellIn($sellIn['sell_in']);
            $items->setCreatedAt(new \DateTimeImmutable('-1 days'));

            $backstagePasses = new IncreasesProportionAge();
            $backstagePassesItems = $backstagePasses->updateQuality($items);

            $this->assertEquals($sellIn['answer_sell_in'], $backstagePassesItems->getQuality());
        }
    }
}
