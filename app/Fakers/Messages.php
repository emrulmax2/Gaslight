<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Users;

class Messages
{
    public static function fakeMessages(): Collection
    {
        return collect([
            [
                "id" => "1",
                "sender" => Users::fakeUsers()[0],
                "content" => "Hello there!",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "09:00 AM",
            ],
            [
                "id" => "2",
                "sender" => Users::fakeUsers()[0],
                "content" => "Hi, how are you?",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "02:30 PM",
            ],
            [
                "id" => "3",
                "sender" => Users::fakeUsers()[0],
                "content" => "Good morning!",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "10:00 AM",
            ],
            [
                "id" => "4",
                "sender" => Users::fakeUsers()[0],
                "content" => "What's up?",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "11:15 AM",
            ],
            [
                "id" => "5",
                "sender" => Users::fakeUsers()[0],
                "content" => "I'm doing well, thanks!",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "09:00 AM",
            ],
            [
                "id" => "6",
                "sender" => Users::fakeUsers()[0],
                "content" => "Any plans for the weekend?",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "03:00 PM",
            ],
            [
                "id" => "7",
                "sender" => Users::fakeUsers()[0],
                "content" => "Not yet, but I'm thinking of going hiking.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "07:30 PM",
            ],
            [
                "id" => "8",
                "sender" => Users::fakeUsers()[0],
                "content" => "That sounds fun!",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "10:30 AM",
            ],
            [
                "id" => "9",
                "sender" => Users::fakeUsers()[0],
                "content" => "Hello, everyone!",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "08:00 PM",
            ],
            [
                "id" => "10",
                "sender" => Users::fakeUsers()[0],
                "content" => "Hi James!",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "03:00 PM",
            ],
        ])->shuffle();
    }
}
