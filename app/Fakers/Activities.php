<?php

namespace App\Fakers;

use Illuminate\Support\Collection;

class Activities
{
    public $imageAssets;

    public function __construct()
    {
        $this->imageAssets = array_values(array_filter(getFileList(resource_path("images/projects"), "jpg,jpeg,png,svg"), function ($file) {
            return strpos($file, "400x400");
        }));
    }

    public static function fakeActivities(): Collection
    {
        $instance = new self();

        return collect([
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Uploaded documents",
                "activityDetails" => "Uploaded important project documents",
                "uploadedFiles" => [
                    [
                        "filename" => "document1.pdf",
                        "size" => "2.5MB",
                        "fileType" => "PDF",
                    ],
                    [
                        "filename" => "document2.docx",
                        "size" => "1.8MB",
                        "fileType" => "DOCX",
                    ],
                ],
                "statusBadge" => "Completed",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Logged in successfully",
                "activityDetails" => "Accessed the dashboard",
                "statusBadge" => "Success",
                "images" => [
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
                ],
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Uploaded a spreadsheet",
                "activityDetails" => "Added financial data for Q3",
                "uploadedFiles" => [
                    [
                        "filename" => "spreadsheet.xlsx",
                        "size" => "3.4MB",
                        "fileType" => "XLSX",
                    ],
                ],
                "statusBadge" => "Completed",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Updated profile picture",
                "activityDetails" => "Changed profile photo",
                "statusBadge" => "Success",
                "images" => [
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
                ],
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Uploaded code files",
                "activityDetails" => "Added new code modules",
                "uploadedFiles" => [
                    [
                        "filename" => "code1.js",
                        "size" => "300KB",
                        "fileType" => "JavaScript",
                    ],
                    [
                        "filename" => "code2.py",
                        "size" => "450KB",
                        "fileType" => "Python",
                    ],
                ],
                "statusBadge" => "Completed",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Received 5 new emails",
                "activityDetails" => "Inbox updates",
                "uploadedFiles" => [
                    [
                        "filename" => "presentation1.pptx",
                        "size" => "5.2MB",
                        "fileType" => "PPTX",
                    ],
                    [
                        "filename" => "presentation2.ppt",
                        "size" => "4.5MB",
                        "fileType" => "PPT",
                    ],
                ],
                "statusBadge" => "Info",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Uploaded video files",
                "activityDetails" => "Shared video tutorials",
                "uploadedFiles" => [
                    [
                        "filename" => "video1.mp4",
                        "size" => "15MB",
                        "fileType" => "MP4",
                    ],
                    [
                        "filename" => "video2.mov",
                        "size" => "12.5MB",
                        "fileType" => "MOV",
                    ],
                ],
                "statusBadge" => "Completed",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Task completed: Review Project Proposal",
                "activityDetails" => "Reviewed and provided feedback",
                "statusBadge" => "Completed",
                "images" => [
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
                ],
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Uploaded images",
                "activityDetails" => "Added project screenshots",
                "images" => [
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
                ],
                "statusBadge" => "Completed",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Posted a status update",
                "activityDetails" => "Shared thoughts on the project",
                "statusBadge" => "Success",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Uploaded presentations",
                "activityDetails" => "Added slides for the team meeting",
                "uploadedFiles" => [
                    [
                        "filename" => "presentation1.pptx",
                        "size" => "5.2MB",
                        "fileType" => "PPTX",
                    ],
                    [
                        "filename" => "presentation2.ppt",
                        "size" => "4.5MB",
                        "fileType" => "PPT",
                    ],
                ],
                "statusBadge" => "Completed",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Logged out",
                "activityDetails" => "Signed out from the dashboard",
                "statusBadge" => "Info",
                "images" => [
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
                ],
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Received a friend request",
                "activityDetails" => "Friend request from John",
                "images" => [
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)],
                    $instance->imageAssets[mt_rand(0, count($instance->imageAssets) - 1)]
                ],
                "statusBadge" => "New",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Added a new contact",
                "activityDetails" => "Added a new contact, Sarah",
                "uploadedFiles" => [
                    [
                        "filename" => "spreadsheet.xlsx",
                        "size" => "3.4MB",
                        "fileType" => "XLSX",
                    ],
                ],
                "statusBadge" => "Success",
            ],
            [
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "activity" => "Uploaded audio recordings",
                "activityDetails" => "Recorded podcast episodes",
                "uploadedFiles" => [
                    [
                        "filename" => "audio1.mp3",
                        "size" => "4.8MB",
                        "fileType" => "MP3",
                    ],
                    [
                        "filename" => "audio2.wav",
                        "size" => "6.2MB",
                        "fileType" => "WAV",
                    ],
                ],
                "statusBadge" => "Completed",
            ],
        ])->shuffle();
    }
}
