<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Users;

class ProjectDetails
{
    public static function generateRandomLink(): string
    {
        $randomChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $randomString = "";
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $randomChars[rand(0, strlen($randomChars) - 1)];
        }
        $url = "http://left4code.com/share/" . $randomString;
        return $url;
    }

    public static function fakeProjectDetails(): Collection
    {
        return collect([
            [
                "title" => "Marketing Campaign Poster",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project1-400x400.jpg"
            ],
            [
                "title" => "Social Media Graphics",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project2-400x400.jpg"
            ],
            [
                "title" => "Website Redesign Mockup",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project3-400x400.jpg"
            ],
            [
                "title" => "Content Calendar",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project4-400x400.jpg"
            ],
            [
                "title" => "Email Campaign Templates",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project5-400x400.jpg"
            ],
            [
                "title" => "Market Research Report",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project6-400x400.jpg"
            ],
            [
                "title" => "Video Advertisements",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project7-400x400.jpg"
            ],
            [
                "title" => "Product Brochures",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project8-400x400.jpg"
            ],
            [
                "title" => "Social Media Analytics",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project9-400x400.jpg"
            ],
            [
                "title" => "Sales Presentation Deck",
                "link" => self::generateRandomLink(),
                "contributors" => Users::fakeUsers(),
                "image" => "resources/images/projects/project10-400x400.jpg"
            ],
        ])->shuffle();
    }
}
