<?php

namespace App\Fakers;

use Illuminate\Support\Collection;

class Browsers
{
    public static function fakeBrowsers(): Collection
    {
        return collect([
            [
                "image" => "resources/images/browsers/chrome.png",
                "name" => "Chrome",
            ],
            [
                "image" => "resources/images/browsers/edge.png",
                "name" => "Edge",
            ],
            [
                "image" => "resources/images/browsers/firefox.png",
                "name" => "Firefox",
            ],
            [
                "image" => "resources/images/browsers/opera.png",
                "name" => "Opera",
            ],
            [
                "image" => "resources/images/browsers/safari.png",
                "name" => "Safari",
            ],
        ])->shuffle();
    }
}
