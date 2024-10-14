<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewRatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("review_ratings")->insert([
            [
                "userId" => 5,
                "rating" => 4,
                "course_code" => "4599ICT",
                "reviewId" => 1,
            ],
            [
                "userId" => 5,
                "rating" => 5,
                "course_code" => "4599ICT",
                "reviewId" => 2,
            ],
            [
                "userId" => 5,
                "rating" => 5,
                "course_code" => "4599ICT",
                "reviewId" => 3,
            ],
            [
                "userId" => 10,
                "rating" => 4,
                "course_code" => "4599ICT",
                "reviewId" => 10,
            ],
            [
                "userId" => 10,
                "rating" => 5,
                "course_code" => "4599ICT",
                "reviewId" => 11,
            ],
            [
                "userId" => 10,
                "rating" => 5,
                "course_code" => "4599ICT",
                "reviewId" => 12,
            ],
            [
                "userId" => 13,
                "rating" => 4,
                "course_code" => "4599ICT",
                "reviewId" => 19,
            ],
            [
                "userId" => 13,
                "rating" => 5,
                "course_code" => "4599ICT",
                "reviewId" => 20,
            ],
            [
                "userId" => 13,
                "rating" => 5,
                "course_code" => "4599ICT",
                "reviewId" => 21,
            ],
            [
                "userId" => 7,
                "rating" => 4,
                "course_code" => "4599ICT",
                "reviewId" => 4,
            ],
            [
                "userId" => 7,
                "rating" => 5,
                "course_code" => "4599ICT",
                "reviewId" => 5,
            ],
            [
                "userId" => 7,
                "rating" => 5,
                "course_code" => "4599ICT",
                "reviewId" => 6,
            ],
            [
                "userId" => 18,
                "rating" => 4,
                "course_code" => "4599ICT",
                "reviewId" => 34,
            ],
            [
                "userId" => 18,
                "rating" => 5,
                "course_code" => "4599ICT",
                "reviewId" => 35,
            ],
            [
                "userId" => 18,
                "rating" => 5,
                "course_code" => "4599ICT",
                "reviewId" => 36,
            ],
            [
                "userId" => 11,
                "rating" => 2,
                "course_code" => "4599ICT",
                "reviewId" => 13,
            ],
            [
                "userId" => 11,
                "rating" => 2,
                "course_code" => "4599ICT",
                "reviewId" => 14,
            ],
            [
                "userId" => 11,
                "rating" => 1,
                "course_code" => "4599ICT",
                "reviewId" => 15,
            ],
        ]);
    }
}
