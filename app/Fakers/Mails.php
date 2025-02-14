<?php

namespace App\Fakers;

use Illuminate\Support\Collection;
use App\Fakers\Users;

class Mails
{
    public static function fakeMails(): Collection
    {
        return collect([
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Regarding Project Deadline",
                "content" =>
                "Hello team, I wanted to discuss the upcoming project deadline. Let's meet tomorrow to go over the details.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => false,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Weekly Status Report",
                "content" =>
                "Hi everyone, please submit your weekly status reports by the end of the day. Thank you!",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => true,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Invitation: Team Lunch",
                "content" =>
                "Dear team, we're organizing a team lunch this Friday at the new Italian restaurant. Please RSVP by Wednesday.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => false,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "New Product Launch",
                "content" =>
                "Hello everyone, we're excited to announce the launch of our new product line. Check out the attached brochure for details.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => true,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Upcoming Training Session",
                "content" =>
                "Hi team, there will be a training session on the new software next Monday. Be sure to attend!",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => false,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Project Update Meeting",
                "content" =>
                "Dear team, let's schedule a project update meeting for next week to discuss our progress.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => true,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Important Announcement",
                "content" =>
                "Hello team, we have an important announcement regarding changes to the company policies. Please read the attached document.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => false,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Team Building Event",
                "content" =>
                "Hi everyone, get ready for a fun team-building event this weekend! Don't forget to bring your enthusiasm.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => true,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Meeting Rescheduled",
                "content" =>
                "Dear team, the meeting scheduled for tomorrow has been rescheduled to next week. Check your updated calendars.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => false,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Holiday Schedule",
                "content" =>
                "Hello team, here is the holiday schedule for the upcoming month. Plan your time off accordingly.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => true,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Important Update: New Policies",
                "content" =>
                "Hello team, please review the updated company policies attached to this email.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => true,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Reminder: Team Meeting Tomorrow",
                "content" =>
                "Hi everyone, a reminder that we have a team meeting scheduled for tomorrow. Don't forget to prepare your updates.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => false,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Project Deadline Extension",
                "content" =>
                "Dear team, we've extended the project deadline by one week. Please adjust your schedules accordingly.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => true,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Congratulations on the Successful Launch!",
                "content" =>
                "Hello team, I wanted to congratulate everyone on the successful launch of our new product. Great job!",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => false,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Upcoming Training Session",
                "content" =>
                "Hi team, there will be a training session on the new software next Monday. Be sure to attend!",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => true,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Project Update Meeting",
                "content" =>
                "Dear team, let's schedule a project update meeting for next week to discuss our progress.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => false,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Important Announcement",
                "content" =>
                "Hello team, we have an important announcement regarding changes to the company policies. Please read the attached document.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => true,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Team Building Event",
                "content" =>
                "Hi everyone, get ready for a fun team-building event this weekend! Don't forget to bring your enthusiasm.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => false,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Meeting Rescheduled",
                "content" =>
                "Dear team, the meeting scheduled for tomorrow has been rescheduled to next week. Check your updated calendars.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => true,
            ],
            [
                "sender" => Users::fakeUsers()[0],
                "subject" => "Holiday Schedule",
                "content" =>
                "Hello team, here is the holiday schedule for the upcoming month. Plan your time off accordingly.",
                "date" => date("D M Y", intval(mt_rand(1586584776897, 1672333200000) / 1000)),
                "opened" => false,
            ],
        ])->shuffle();
    }
}
