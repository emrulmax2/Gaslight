<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Categories;
use App\Fakers\Users;

class Products
{
    public $imageAssets;

    public function __construct()
    {
        $this->imageAssets = array_values(array_filter(getFileList(resource_path("images/products"), "jpg,jpeg,png,svg"), function ($file) {
            return strpos($file, "400x400");
        }));
    }

    public static function fakeProducts(): Collection
    {
        $instance = new self();

        return collect([
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Wireless Noise-Cancelling Headphones",
                "price" => 149.99,
                "isActive" => true,
                "stock" => 50,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "wireless-noise-cancelling-headphones",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Smartphone Charging Dock",
                "price" => 19.99,
                "isActive" => false,
                "stock" => 25,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "smartphone-charging-dock",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Ultra HD 4K Smart TV",
                "price" => 599.99,
                "isActive" => true,
                "stock" => 75,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "ultra-hd-4k-smart-tv",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Professional DSLR Camera",
                "price" => 799.99,
                "isActive" => true,
                "stock" => 60,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "professional-dslr-camera",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Wireless Gaming Mouse",
                "price" => 49.99,
                "isActive" => false,
                "stock" => 10,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "wireless-gaming-mouse",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "High-Performance Laptop",
                "price" => 1099.99,
                "isActive" => true,
                "stock" => 30,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "high-performance-laptop",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Bluetooth Speaker with Bass Boost",
                "price" => 79.99,
                "isActive" => true,
                "stock" => 40,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "bluetooth-speaker-with-bass-boost",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Wireless Earbuds with Mic",
                "price" => 79.99,
                "isActive" => false,
                "stock" => 20,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "wireless-earbuds-with-mic",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "8-Cup Coffee Maker",
                "price" => 39.99,
                "isActive" => true,
                "stock" => 55,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "8-cup-coffee-maker",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Smart Home Security Camera",
                "price" => 129.99,
                "isActive" => true,
                "stock" => 15,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "smart-home-security-camera",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Wireless Noise-Cancelling Headphones",
                "price" => 149.99,
                "isActive" => true,
                "stock" => 50,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "wireless-noise-cancelling-headphones",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Smartphone Charging Dock",
                "price" => 19.99,
                "isActive" => false,
                "stock" => 25,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "smartphone-charging-dock",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Ultra HD 4K Smart TV",
                "price" => 599.99,
                "isActive" => true,
                "stock" => 75,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "ultra-hd-4k-smart-tv",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Professional DSLR Camera",
                "price" => 799.99,
                "isActive" => true,
                "stock" => 60,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "professional-dslr-camera",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Wireless Gaming Mouse",
                "price" => 49.99,
                "isActive" => false,
                "stock" => 10,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "wireless-gaming-mouse",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "High-Performance Laptop",
                "price" => 1099.99,
                "isActive" => true,
                "stock" => 30,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "high-performance-laptop",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Bluetooth Speaker with Bass Boost",
                "price" => 79.99,
                "isActive" => true,
                "stock" => 40,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "bluetooth-speaker-with-bass-boost",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Wireless Earbuds with Mic",
                "price" => 79.99,
                "isActive" => false,
                "stock" => 20,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "wireless-earbuds-with-mic",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "8-Cup Coffee Maker",
                "price" => 39.99,
                "isActive" => true,
                "stock" => 55,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "8-cup-coffee-maker",
            ],
            [
                "images" => [
                    [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ], [
                        "path" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                        "uploadDate" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000))
                    ]
                ],
                "name" => "Smart Home Security Camera",
                "price" => 129.99,
                "isActive" => true,
                "stock" => 15,
                "category" => Categories::fakeCategories()[0],
                "buyers" => Users::fakeUsers(),
                "slug" => "smart-home-security-camera",
            ],
        ])->shuffle();
    }
}
