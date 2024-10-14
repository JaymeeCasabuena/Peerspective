<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AssessmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table("assessments")->insert([
            [
                "title" => "Introduction to Programming - Assignment 1",
                "instructions" =>
                    "Complete the first programming assignment focusing on basic syntax and data types.",
                "due_date" => Carbon::create(2024, 10, 15, 23, 59, 59),
                "type" => "student-select",
                "required_reviews" => 3,
                "course_code" => "4599ICT",
            ],
            [
                "title" => "Introduction to Programming - Midterm Exam",
                "instructions" =>
                    "Prepare for the midterm exam covering all material from weeks 1 to 6.",
                "due_date" => Carbon::create(2024, 11, 10, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "4599ICT",
            ],
            [
                "title" => "Web Development with JavaScript - Project 1",
                "instructions" =>
                    "Build a simple web application using JavaScript, HTML, and CSS.",
                "due_date" => Carbon::create(2024, 10, 20, 23, 59, 59),
                "type" => "student-select",
                "required_reviews" => 3,
                "course_code" => "3162ICT",
            ],
            [
                "title" => "Web Development with JavaScript - Final Exam",
                "instructions" =>
                    "Complete the final exam covering all JavaScript concepts learned.",
                "due_date" => Carbon::create(2024, 11, 25, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "3162ICT",
            ],
            [
                "title" => "Database Management Systems - Assignment 1",
                "instructions" =>
                    "Implement a database schema based on the given specifications.",
                "due_date" => Carbon::create(2024, 10, 12, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "1816ICT",
            ],
            [
                "title" => "Database Management Systems - Group Project",
                "instructions" =>
                    "Collaborate with your group to create a database application.",
                "due_date" => Carbon::create(2024, 11, 15, 23, 59, 59),
                "type" => "student-select",
                "required_reviews" => 3,
                "course_code" => "1816ICT",
            ],
            [
                "title" => "Cloud Computing Fundamentals - Quiz 1",
                "instructions" => "Complete the first quiz on cloud concepts.",
                "due_date" => Carbon::create(2024, 10, 22, 23, 59, 59),
                "type" => "student-select",
                "required_reviews" => 2,
                "course_code" => "3486ICT",
            ],
            [
                "title" => "Cloud Computing Fundamentals - Case Study",
                "instructions" =>
                    "Analyze a case study and present your findings.",
                "due_date" => Carbon::create(2024, 11, 18, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "3486ICT",
            ],
            [
                "title" => "Mobile App Development - Assignment 1",
                "instructions" =>
                    "Develop a mobile application prototype using the specified tools.",
                "due_date" => Carbon::create(2024, 10, 30, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "9589ICT",
            ],
            [
                "title" => "Mobile App Development - Final Project",
                "instructions" =>
                    "Submit your final mobile application project for evaluation.",
                "due_date" => Carbon::create(2024, 12, 10, 23, 59, 59),
                "type" => "student-select",
                "required_reviews" => 2,
                "course_code" => "9589ICT",
            ],
            [
                "title" => "Cybersecurity and Ethical Hacking - Lab 1",
                "instructions" =>
                    "Complete the first lab exercise focusing on network security.",
                "due_date" => Carbon::create(2024, 10, 28, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "2710ICT",
            ],
            [
                "title" => "Cybersecurity and Ethical Hacking - Midterm Exam",
                "instructions" =>
                    "Prepare for the midterm exam on ethical hacking techniques.",
                "due_date" => Carbon::create(2024, 11, 30, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "2710ICT",
            ],
            [
                "title" => "Data Structures and Algorithms - Assignment 1",
                "instructions" =>
                    "Implement a set of algorithms using the data structures learned.",
                "due_date" => Carbon::create(2024, 10, 25, 23, 59, 59),
                "type" => "student-select",
                "required_reviews" => 3,
                "course_code" => "5406ICT",
            ],
            [
                "title" => "Data Structures and Algorithms - Final Exam",
                "instructions" =>
                    "Prepare for the final exam covering all topics discussed.",
                "due_date" => Carbon::create(2024, 12, 15, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 3,
                "course_code" => "5406ICT",
            ],
            [
                "title" =>
                    "Artificial Intelligence and Machine Learning - Assignment 1",
                "instructions" =>
                    "Complete the first assignment focusing on AI concepts.",
                "due_date" => Carbon::create(2024, 10, 16, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "5984ICT",
            ],
            [
                "title" =>
                    "Artificial Intelligence and Machine Learning - Final Project",
                "instructions" =>
                    "Develop an AI model and present your findings.",
                "due_date" => Carbon::create(2024, 12, 20, 23, 59, 59),
                "type" => "student-select",
                "required_reviews" => 2,
                "course_code" => "5984ICT",
            ],
            [
                "title" => "DevOps Principles and Practices - Assignment 1",
                "instructions" =>
                    "Implement CI/CD pipeline for a sample project.",
                "due_date" => Carbon::create(2024, 10, 31, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "8555ICT",
            ],
            [
                "title" =>
                    "DevOps Principles and Practices - Case Study Analysis",
                "instructions" =>
                    "Analyze a real-world DevOps case study and report findings.",
                "due_date" => Carbon::create(2024, 11, 25, 23, 59, 59),
                "type" => "student-select",
                "required_reviews" => 2,
                "course_code" => "8555ICT",
            ],
            [
                "title" => "Software Engineering Practices - Group Project",
                "instructions" =>
                    "Work in teams to develop a software solution.",
                "due_date" => Carbon::create(2024, 12, 05, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "5737ICT",
            ],
            [
                "title" => "Software Engineering Practices - Final Exam",
                "instructions" =>
                    "Prepare for the final exam covering software engineering methodologies.",
                "due_date" => Carbon::create(2024, 12, 20, 23, 59, 59),
                "type" => "teacher-assign",
                "required_reviews" => 2,
                "course_code" => "5737ICT",
            ],
        ]);
    }
}
