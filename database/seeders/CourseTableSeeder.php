<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table("courses")->insert([
            [
                "course_code" => "4599ICT",
                "name" => "Introduction to Programming",
            ],
            [
                "course_code" => "3162ICT",
                "name" => "Web Development with JavaScript",
            ],
            [
                "course_code" => "1816ICT",
                "name" => "Database Management Systems",
            ],
            [
                "course_code" => "3486ICT",
                "name" => "Cloud Computing Fundamentals",
            ],
            [
                "course_code" => "9589ICT",
                "name" => "Mobile App Development",
            ],
            [
                "course_code" => "2710ICT",
                "name" => "Cybersecurity and Ethical Hacking",
            ],
            [
                "course_code" => "5406ICT",
                "name" => "Data Structures and Algorithms",
            ],
            [
                "course_code" => "5984ICT",
                "name" => "Artificial Intelligence and Machine Learning",
            ],
            [
                "course_code" => "8555ICT",
                "name" => "DevOps Principles and Practices",
            ],
            [
                "course_code" => "5737ICT",
                "name" => "Software Engineering Practices",
            ],
        ]);
    }
}
