<?php

namespace App\Fakers;

use Illuminate\Support\Collection;

class TransactionStatus
{
    public static function fakeTransactionStatus(): Collection
    {
        return collect([
            ["name" => "Pending Payment", "textColor" => "text-primary", "icon" => "Hourglass"],
            ["name" => "Processing", "textColor" => "text-primary", "icon" => "Clock4"],
            ["name" => "Shipped", "textColor" => "text-success", "icon" => "Truck"],
            ["name" => "Delivered", "textColor" => "text-success", "icon" => "PackageCheck"],
            ["name" => "Cancelled", "textColor" => "text-primary", "icon" => "PackageX"],
            ["name" => "Refunded", "textColor" => "text-primary", "icon" => "Wallet"],
            ["name" => "Returned", "textColor" => "text-primary", "icon" => "ArrowLeftSquare"],
            ["name" => "Failed", "textColor" => "text-primary", "icon" => "FileX2"],
            ["name" => "On Hold", "textColor" => "text-success", "icon" => "PackageSearch"],
            ["name" => "Completed", "textColor" => "text-success", "icon" => "Package"],
        ])->shuffle();
    }
}
