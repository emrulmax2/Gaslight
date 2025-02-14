<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Users;

class Events
{
    public static function fakeEvents(): Collection
    {
        return collect([
            [
                "id" => "1",
                "title" => "Tech Conference",
                "description" => "Annual tech conference for developers",
                "location" => "City Convention Center",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "09:00 AM",
                "icon" => "Hourglass",
                "organizer" => "Tech Events Inc.",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/tech-conference",
                "maxAttendees" => 500,
                "image" =>
                'resources/images/projects/project1-400x400.jpg',
            ],
            [
                "id" => "2",
                "title" => "Product Launch",
                "description" => "Launch event for our latest product",
                "location" => "Company Headquarters",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "02:30 PM",
                "icon" => "Clock4",
                "organizer" => "Left4code",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/product-launch",
                "maxAttendees" => 200,
                "image" =>
                'resources/images/projects/project2-400x400.jpg',
            ],
            [
                "id" => "3",
                "title" => "Team Building Workshop",
                "description" => "Team-building activities and games",
                "location" => "City Park",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "10:00 AM",
                "icon" => "Truck",
                "organizer" => "Team Builders Inc.",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/team-building",
                "maxAttendees" => 100,
                "image" =>
                'resources/images/projects/project3-400x400.jpg',
            ],
            [
                "id" => "4",
                "title" => "Marketing Workshop",
                "description" => "Workshop on modern marketing strategies",
                "location" => "Hotel Conference Room",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "11:15 AM",
                "icon" => "PackageCheck",
                "organizer" => "Marketing Pro",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/marketing-workshop",
                "maxAttendees" => 150,
                "image" =>
                'resources/images/projects/project4-400x400.jpg',
            ],
            [
                "id" => "5",
                "title" => "Community Cleanup",
                "description" => "Volunteer event to clean up the neighborhood",
                "location" => "Community Center",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "09:00 AM",
                "icon" => "PackageX",
                "organizer" => "Local Community Association",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/community-cleanup",
                "maxAttendees" => 50,
                "image" =>
                'resources/images/projects/project5-400x400.jpg',
            ],
            [
                "id" => "6",
                "title" => "Webinar: AI in Healthcare",
                "description" => "Online webinar on AI applications in healthcare",
                "location" => "Online",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "03:00 PM",
                "icon" => "Wallet",
                "organizer" => "AI Experts",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/ai-webinar",
                "maxAttendees" => 300,
                "image" =>
                'resources/images/projects/project6-400x400.jpg',
            ],
            [
                "id" => "7",
                "title" => "Networking Mixer",
                "description" => "Networking event for professionals",
                "location" => "Downtown Lounge",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "07:30 PM",
                "icon" => "ArrowLeftSquare",
                "organizer" => "Networking Pro",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/networking-mixer",
                "maxAttendees" => 80,
                "image" =>
                'resources/images/projects/project7-400x400.jpg',
            ],
            [
                "id" => "8",
                "title" => "Customer Workshop",
                "description" => "Hands-on workshop for our customers",
                "location" => "Company Training Center",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "10:30 AM",
                "icon" => "FileX2",
                "organizer" => "Left4code",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/customer-workshop",
                "maxAttendees" => 120,
                "image" =>
                'resources/images/projects/project8-400x400.jpg',
            ],
            [
                "id" => "9",
                "title" => "Holiday Party",
                "description" => "Annual holiday celebration and party",
                "location" => "Grand Hotel Ballroom",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "08:00 PM",
                "icon" => "PackageSearch",
                "organizer" => "Left4code",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/holiday-party",
                "maxAttendees" => 250,
                "image" =>
                'resources/images/projects/project9-400x400.jpg',
            ],
            [
                "id" => "10",
                "title" => "Company Retreat",
                "description" => "Team retreat in a scenic location",
                "location" => "Mountain Resort",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "time" => "All Day",
                "icon" => "Package",
                "organizer" => "Left4code",
                "attendees" => Users::fakeUsers(),
                "availableSeats" => mt_rand(1, 4),
                "registrationLink" => "https://left4code.com/company-retreat",
                "maxAttendees" => 60,
                "image" =>
                'resources/images/projects/project10-400x400.jpg',
            ],
        ])->shuffle();
    }
}
