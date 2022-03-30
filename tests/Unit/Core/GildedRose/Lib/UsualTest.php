<?php

namespace App\Tests\Unit\Core\GildedRose\Lib;

use App\Core\GildedRose\Lib\Usual;
use App\Entity\Items;
use PHPUnit\Framework\TestCase;

class UsualTest extends TestCase
{
    public function testUsual(): void
    {
        $quality = 10;

        $arr = [
            [
                'sell_in' => 5,
                'answer_sell_in' => 9
            ],
            [
                'sell_in' => 0,
                'answer_sell_in' => 8
            ]
        ];

        foreach ($arr as $sellIn) {
            $items = new Items();
            $items->setQuality($quality);
            $items->setSellIn($sellIn['sell_in']);
            $items->setCreatedAt(new \DateTimeImmutable('-1 days'));

            $backstagePasses = new Usual();
            $backstagePassesItems = $backstagePasses->updateQuality($items);

            $this->assertEquals($sellIn['answer_sell_in'], $backstagePassesItems->getQuality());
        }
    }
}
