<?php

namespace App\Fakers;

use Illuminate\Support\Collection;

class Cafe
{
    public static function fakeCafe(): Collection
    {
        return collect([
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "totalSales" => formatCurrency(mt_rand(1, 2000)),
                "menuItemsSold" => "Espresso: 50",
                "customerFeedback" => 4.5,
                "inventoryStatus" => "Coffee Beans: 10 kg",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "totalSales" => formatCurrency(mt_rand(1, 2000)),
                "menuItemsSold" => "Latte: 40",
                "customerFeedback" => 4.2,
                "inventoryStatus" => "Milk: 20 liters",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "totalSales" => formatCurrency(mt_rand(1, 2000)),
                "menuItemsSold" => "Cappuccino: 45",
                "customerFeedback" => 4.8,
                "inventoryStatus" => "Pastries: 30",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "totalSales" => formatCurrency(mt_rand(1, 2000)),
                "menuItemsSold" => "Americano: 30",
                "customerFeedback" => 4.0,
                "inventoryStatus" => "Syrup Bottles: 5",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "totalSales" => formatCurrency(mt_rand(1, 2000)),
                "menuItemsSold" => "Mocha: 35",
                "customerFeedback" => 4.7,
                "inventoryStatus" => "Cups: 100",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "totalSales" => formatCurrency(mt_rand(1, 2000)),
                "menuItemsSold" => "Iced Coffee:",
                "customerFeedback" => 4.3,
                "inventoryStatus" => "Sugar Packets: 50",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "totalSales" => formatCurrency(mt_rand(1, 2000)),
                "menuItemsSold" => "Tea: 25",
                "customerFeedback" => 4.6,
                "inventoryStatus" => "Napkins: 200",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "totalSales" => formatCurrency(mt_rand(1, 2000)),
                "menuItemsSold" => "Hot Chocolate:",
                "customerFeedback" => 4.9,
                "inventoryStatus" => "Stirrers: 100",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "totalSales" => formatCurrency(mt_rand(1, 2000)),
                "menuItemsSold" => "Croissant: 15",
                "customerFeedback" => 4.4,
                "inventoryStatus" => "Syrups: 8 flavors",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "totalSales" => formatCurrency(mt_rand(1, 2000)),
                "menuItemsSold" => "Scones: 10",
                "customerFeedback" => 4.8,
                "inventoryStatus" => "Whipped Cream: 3 kg",
            ],
        ])->shuffle();
    }
}
