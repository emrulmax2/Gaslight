<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Countries;

class Departments
{
    public static function fakeDepartments(): Collection
    {
        return collect([
            [
                "id" => 1,
                "name" => "Sales",
                "location" => Countries::fakeCountries()[0],
                "head" => "John Doe",
                "employees" => 35,
                "budget" => "$2,500,000",
            ],
            [
                "id" => 2,
                "name" => "Marketing",
                "location" => Countries::fakeCountries()[0],
                "head" => "Jane Smith",
                "employees" => 42,
                "budget" => "$1,800,000",
            ],
            [
                "id" => 3,
                "name" => "Customer Support",
                "location" => Countries::fakeCountries()[0],
                "head" => "David Johnson",
                "employees" => 28,
                "budget" => "$1,200,000",
            ],
            [
                "id" => 4,
                "name" => "Finance",
                "location" => Countries::fakeCountries()[0],
                "head" => "Sarah Williams",
                "employees" => 19,
                "budget" => "$3,000,000",
            ],
            [
                "id" => 5,
                "name" => "Human Resources",
                "location" => Countries::fakeCountries()[0],
                "head" => "Michael Brown",
                "employees" => 14,
                "budget" => "$900,000",
            ],
            [
                "id" => 6,
                "name" => "Engineering",
                "location" => Countries::fakeCountries()[0],
                "head" => "Emily Davis",
                "employees" => 56,
                "budget" => "$4,500,000",
            ],
            [
                "id" => 7,
                "name" => "Product Management",
                "location" => Countries::fakeCountries()[0],
                "head" => "Daniel Lee",
                "employees" => 23,
                "budget" => "$2,200,000",
            ],
            [
                "id" => 8,
                "name" => "Operations",
                "location" => Countries::fakeCountries()[0],
                "head" => "Olivia Wilson",
                "employees" => 31,
                "budget" => "$1,600,000",
            ],
            [
                "id" => 9,
                "name" => "Research and Development",
                "location" => Countries::fakeCountries()[0],
                "head" => "Matthew Taylor",
                "employees" => 47,
                "budget" => "$3,800,000",
            ],
            [
                "id" => 10,
                "name" => "Quality Assurance",
                "location" => Countries::fakeCountries()[0],
                "head" => "Sophia Anderson",
                "employees" => 25,
                "budget" => "$1,300,000",
            ],
        ])->shuffle();
    }
}
