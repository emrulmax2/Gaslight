<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Products;
use App\Fakers\Users;

class Reviews
{
    public static function fakeReviews(): Collection
    {
        return collect([
            [
                "id" => 1,
                "product" => Products::fakeProducts()[0],
                "user" => Users::fakeUsers()[0],
                "rating" => 4.5,
                "comment" => "Great product, excellent build quality.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "id" => 2,
                "product" => Products::fakeProducts()[0],
                "user" => Users::fakeUsers()[0],
                "rating" => 3.2,
                "comment" => "Average performance, could be better.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "id" => 3,
                "product" => Products::fakeProducts()[0],
                "user" => Users::fakeUsers()[0],
                "rating" => 5.0,
                "comment" => "Absolutely love it! Best purchase ever.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "id" => 4,
                "product" => Products::fakeProducts()[0],
                "user" => Users::fakeUsers()[0],
                "rating" => 2.8,
                "comment" => "Not worth the price, disappointed.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "id" => 5,
                "product" => Products::fakeProducts()[0],
                "user" => Users::fakeUsers()[0],
                "rating" => 4.0,
                "comment" => "Good value for money, works as expected.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "id" => 6,
                "product" => Products::fakeProducts()[0],
                "user" => Users::fakeUsers()[0],
                "rating" => 4.7,
                "comment" => "Impressive product, highly recommended.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "id" => 7,
                "product" => Products::fakeProducts()[0],
                "user" => Users::fakeUsers()[0],
                "rating" => 3.5,
                "comment" => "Decent product, but has some flaws.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "id" => 8,
                "product" => Products::fakeProducts()[0],
                "user" => Users::fakeUsers()[0],
                "rating" => 4.2,
                "comment" => "Satisfied with the purchase, good quality.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "id" => 9,
                "product" => Products::fakeProducts()[0],
                "user" => Users::fakeUsers()[0],
                "rating" => 3.0,
                "comment" => "Not what I expected, needs improvement.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "id" => 10,
                "product" => Products::fakeProducts()[0],
                "user" => Users::fakeUsers()[0],
                "rating" => 4.8,
                "comment" => "Outstanding product, exceeded my expectations.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
        ])->shuffle();
    }
}
