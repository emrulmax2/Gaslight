<?php

namespace App\Fakers;

use Illuminate\Support\Collection;

class Timezones
{
    public static function fakeTimezones(): Collection
    {
        return collect([
            ["name" => "UTC", "offset" => "+00:00"],
            ["name" => "Eastern Standard Time (EST)", "offset" => "-05:00"],
            ["name" => "Pacific Standard Time (PST)", "offset" => "-08:00"],
            ["name" => "Central European Time (CET)", "offset" => "+01:00"],
        ])->shuffle();
    }
}
