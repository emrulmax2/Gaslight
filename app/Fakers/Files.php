<?php

namespace App\Fakers;

use Illuminate\Support\Collection;

class Files
{
    public $imageAssets;

    public function __construct()
    {
        $this->imageAssets = array_values(array_filter(getFileList(resource_path("images/products"), "jpg,jpeg,png,svg"), function ($file) {
            return strpos($file, "100x100");
        }));
    }

    public static function fakeFiles(): Collection
    {
        $instance = new self();

        return collect([
            [
                "fileName" => "Annual-Report-2023.pdf",
                "size" => "2.5 MB",
                "type" => "PDF",
            ],
            [
                "fileName" => "Dota 2",
                "type" => "Folder",
                "size" => "112 GB",
            ],
            [
                "fileName" => "Financial-Statements.xlsx",
                "size" => "1.8 MB",
                "type" => "XLSX",
            ],
            [
                "fileName" => "Laravel 10",
                "type" => "Empty Folder",
                "size" => "120 MB",
            ],
            [
                "fileName" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                "size" => "750 KB",
                "type" => "Image",
            ],
            [
                "fileName" => "Sales-Presentation.pptx",
                "size" => "3.2 MB",
                "type" => "PPT",
            ],
            [
                "fileName" => "Meeting-Minutes.txt",
                "size" => "320 KB",
                "type" => "TXT",
            ],
            [
                "fileName" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                "size" => "150 KB",
                "type" => "Image",
            ],
            [
                "fileName" => "Product_Demo.mp4",
                "size" => "15.4 MB",
                "type" => "MP4",
            ],
            ["fileName" => "Repository", "type" => "Folder", "size" => "20 KB"],
            [
                "fileName" => "Project-Documents.zip",
                "size" => "6.7 MB",
                "type" => "ZIP",
            ],
            [
                "fileName" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                "size" => "30 KB",
                "type" => "Image",
            ],
            [
                "fileName" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                "size" => "550 KB",
                "type" => "Image",
            ],
            [
                "fileName" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                "size" => "150 KB",
                "type" => "Image",
            ],
            [
                "fileName" => "Background-Music.mp3",
                "size" => "5.2 MB",
                "type" => "MP3",
            ],
            [
                "fileName" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                "size" => "1.1 MB",
                "type" => "Image",
            ],
            [
                "fileName" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                "size" => "20 KB",
                "type" => "Image",
            ],
            [
                "fileName" => $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                "size" => "50 KB",
                "type" => "Image",
            ],
            [
                "fileName" => "Marketing-Plan.docx",
                "size" => "1.9 MB",
                "type" => "DOCX",
            ],
            [
                "fileName" => "Documentation",
                "type" => "Empty Folder",
                "size" => "4 MB",
            ],
        ])->shuffle();
    }
}
