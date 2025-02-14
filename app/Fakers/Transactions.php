<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Users;
use App\Fakers\Products;
use App\Fakers\TransactionStatus;

class Transactions
{
    public static function fakeTransactions(): Collection
    {
        $transactions = [];

        for ($i = 0; $i < 10; $i++) {
            $date = new \DateTime();
            $year = $date->format('Y');
            $month = $date->format('m');
            $day = $date->format('d');
            $randRoman1 = ["I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X"][mt_rand(0, 9)];
            $randRoman2 = ["I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X"][mt_rand(0, 9)];
            $randNumber = mt_rand(0, 10e9);
            $orderId = "IVR/{$year}{$month}{$day}/{$randRoman1}/{$randRoman2}/{$randNumber}";
            $orderDate = date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000));
            $amount = formatCurrency(mt_rand(1000, 2000));

            $transactions[] = [
                'category' => Categories::fakeCategories()[0],
                'orderId' => $orderId,
                'user' => Users::fakeUsers()[0],
                'products' => Products::fakeProducts(),
                'orderStatus' => TransactionStatus::fakeTransactionStatus()[0],
                'orderDate' => $orderDate,
                'amount' => $amount
            ];
        }

        return collect($transactions)->shuffle();
    }
}
