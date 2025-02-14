<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Users;

class Projects
{
    public static function fakeProjects(): Collection
    {
        return collect([
            [
                "projectName" => "Web Odyssey: Redesigning the Future - 2043",
                "projectManager" => Users::fakeUsers()[0],
                "creativeDirector" => Users::fakeUsers()[0],
                "dueDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "projectName" => "Appventures: Crafting Magic - 2043",
                "projectManager" => Users::fakeUsers()[0],
                "creativeDirector" => Users::fakeUsers()[0],
                "dueDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "projectName" => "Content Constellations: Shaping Stories - 2043",
                "projectManager" => Users::fakeUsers()[0],
                "creativeDirector" => Users::fakeUsers()[0],
                "dueDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "projectName" => "Customer Chronicles: Engagement Quest - 2042",
                "projectManager" => Users::fakeUsers()[0],
                "creativeDirector" => Users::fakeUsers()[0],
                "dueDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "projectName" => "Social Symphony: Spring Serenade - 2043",
                "projectManager" => Users::fakeUsers()[0],
                "creativeDirector" => Users::fakeUsers()[0],
                "dueDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "projectName" => "E-commerce Enchantment: Winter Wonders - 2043",
                "projectManager" => Users::fakeUsers()[0],
                "creativeDirector" => Users::fakeUsers()[0],
                "dueDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "projectName" => "Productivity Pioneers: Journey to Efficiency - 2042",
                "projectManager" => Users::fakeUsers()[0],
                "creativeDirector" => Users::fakeUsers()[0],
                "dueDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "projectName" => "Brand Ballet: Dancing into Spring - 2043",
                "projectManager" => Users::fakeUsers()[0],
                "creativeDirector" => Users::fakeUsers()[0],
                "dueDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "projectName" => "MarketQuest: Exploring New Horizons - 2042",
                "projectManager" => Users::fakeUsers()[0],
                "creativeDirector" => Users::fakeUsers()[0],
                "dueDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
            [
                "projectName" => "SalesSaga: Summer Success - 2043",
                "projectManager" => Users::fakeUsers()[0],
                "creativeDirector" => Users::fakeUsers()[0],
                "dueDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
            ],
        ])->shuffle();
    }
}
