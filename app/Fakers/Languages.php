<?php

namespace App\Fakers;

use Illuminate\Support\Collection;

class Languages
{
    public static function fakeLanguages(): Collection
    {
        return collect([
            ["name" => "English", "code" => "en"],
            ["name" => "Spanish", "code" => "es"],
            ["name" => "French", "code" => "fr"],
            ["name" => "German", "code" => "de"],
            ["name" => "Chinese", "code" => "zh"],
        ])->shuffle();
    }
}
