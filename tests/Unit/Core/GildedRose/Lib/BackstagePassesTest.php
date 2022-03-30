<?php

namespace App\Tests\Unit\Core\GildedRose\Lib;

use App\Core\GildedRose\Lib\BackstagePasses;
use App\Entity\Items;
use PHPUnit\Framework\TestCase;

class BackstagePassesTest extends TestCase
{
    public function testBackstagePasses(): void
    {
        $quality = 1;

        $arr = [
            [
                'sell_in' => 12,
                'answer_sell_in' => 2
            ],
            [
                'sell_in' => 8,
                'answer_sell_in' => 3
            ],
            [
                'sell_in' => 5,
                'answer_sell_in' => 4
            ],
            [
                'sell_in' => 0,
                'answer_sell_in' => 0
            ]
        ];

        foreach ($arr as $sellIn) {
            $items = new Items();
            $items->setQuality($quality);
            $items->setSellIn($sellIn['sell_in']);
            $items->setCreatedAt(new \DateTimeImmutable('-1 days'));

            $backstagePasses = new BackstagePasses();
            $backstagePassesItems = $backstagePasses->updateQuality($items);

            $this->assertEquals($sellIn['answer_sell_in'], $backstagePassesItems->getQuality());
        }
    }
}
