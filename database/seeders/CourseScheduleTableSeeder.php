<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table("course_schedules")->insert([
            // Introduction to Programming
            [
                "day" => "Monday",
                "time" => "09:00 - 11:00",
                "mode" => "in-person",
                "course_code" => "4599ICT",
            ],
            [
                "day" => "Wednesday",
                "time" => "13:00 - 15:00",
                "mode" => "online",
                "course_code" => "4599ICT",
            ],

            // Web Development with JavaScript
            [
                "day" => "Tuesday",
                "time" => "10:00 - 12:00",
                "mode" => "online",
                "course_code" => "3162ICT",
            ],
            [
                "day" => "Thursday",
                "time" => "14:00 - 16:00",
                "mode" => "in-person",
                "course_code" => "3162ICT",
            ],

            // Database Management Systems
            [
                "day" => "Monday",
                "time" => "11:00 - 13:00",
                "mode" => "in-person",
                "course_code" => "1816ICT",
            ],
            [
                "day" => "Friday",
                "time" => "15:00 - 17:00",
                "mode" => "online",
                "course_code" => "1816ICT",
            ],

            // Cloud Computing Fundamentals
            [
                "day" => "Tuesday",
                "time" => "09:00 - 11:00",
                "mode" => "online",
                "course_code" => "3486ICT",
            ],
            [
                "day" => "Thursday",
                "time" => "10:00 - 12:00",
                "mode" => "in-person",
                "course_code" => "3486ICT",
            ],

            // Mobile App Development
            [
                "day" => "Wednesday",
                "time" => "11:00 - 13:00",
                "mode" => "in-person",
                "course_code" => "9589ICT",
            ],
            [
                "day" => "Friday",
                "time" => "09:00 - 11:00",
                "mode" => "online",
                "course_code" => "9589ICT",
            ],

            // Cybersecurity and Ethical Hacking
            [
                "day" => "Monday",
                "time" => "13:00 - 15:00",
                "mode" => "in-person",
                "course_code" => "2710ICT",
            ],
            [
                "day" => "Wednesday",
                "time" => "10:00 - 12:00",
                "mode" => "online",
                "course_code" => "2710ICT",
            ],

            // Data Structures and Algorithms
            [
                "day" => "Tuesday",
                "time" => "14:00 - 16:00",
                "mode" => "online",
                "course_code" => "5406ICT",
            ],
            [
                "day" => "Thursday",
                "time" => "09:00 - 11:00",
                "mode" => "in-person",
                "course_code" => "5406ICT",
            ],

            // Artificial Intelligence and Machine Learning
            [
                "day" => "Monday",
                "time" => "10:00 - 12:00",
                "mode" => "in-person",
                "course_code" => "5984ICT",
            ],
            [
                "day" => "Wednesday",
                "time" => "14:00 - 16:00",
                "mode" => "online",
                "course_code" => "5984ICT",
            ],

            // DevOps Principles and Practices
            [
                "day" => "Friday",
                "time" => "10:00 - 12:00",
                "mode" => "online",
                "course_code" => "8555ICT",
            ],
            [
                "day" => "Tuesday",
                "time" => "13:00 - 15:00",
                "mode" => "in-person",
                "course_code" => "8555ICT",
            ],

            // Software Engineering Practices
            [
                "day" => "Thursday",
                "time" => "14:00 - 16:00",
                "mode" => "in-person",
                "course_code" => "5737ICT",
            ],
            [
                "day" => "Friday",
                "time" => "12:00 - 14:00",
                "mode" => "online",
                "course_code" => "5737ICT",
            ],
        ]);
    }
}
