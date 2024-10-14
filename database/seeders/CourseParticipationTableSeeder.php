<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseParticipationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table("course_participations")->insert([
            // John Doe
            [
                "userId" => 1,
                "course_code" => "4599ICT",
                "course_schedule_id" => 1,
            ],
            [
                "userId" => 1,
                "course_code" => "3162ICT",
                "course_schedule_id" => 3,
            ],
            [
                "userId" => 1,
                "course_code" => "1816ICT",
                "course_schedule_id" => 5,
            ],
            [
                "userId" => 1,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],

            // John Smith
            [
                "userId" => 2,
                "course_code" => "4599ICT",
                "course_schedule_id" => 2,
            ],
            [
                "userId" => 2,
                "course_code" => "3162ICT",
                "course_schedule_id" => 4,
            ],
            [
                "userId" => 2,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 2,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],

            // Jane Austen
            [
                "userId" => 3,
                "course_code" => "1816ICT",
                "course_schedule_id" => 6,
            ],
            [
                "userId" => 3,
                "course_code" => "5406ICT",
                "course_schedule_id" => 13,
            ],
            [
                "userId" => 3,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],
            [
                "userId" => 3,
                "course_code" => "8555ICT",
                "course_schedule_id" => 17,
            ],

            // Sarah Lawson
            [
                "userId" => 4,
                "course_code" => "5406ICT",
                "course_schedule_id" => 14,
            ],
            [
                "userId" => 4,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],
            [
                "userId" => 4,
                "course_code" => "5737ICT",
                "course_schedule_id" => 19,
            ],
            [
                "userId" => 4,
                "course_code" => "8555ICT",
                "course_schedule_id" => 18,
            ],

            // Wynnie Mingasson
            [
                "userId" => 5,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 5,
                "course_code" => "5406ICT",
                "course_schedule_id" => 13,
            ],
            [
                "userId" => 5,
                "course_code" => "4599ICT",
                "course_schedule_id" => 1,
            ],
            [
                "userId" => 5,
                "course_code" => "3162ICT",
                "course_schedule_id" => 4,
            ],
            [
                "userId" => 5,
                "course_code" => "1816ICT",
                "course_schedule_id" => 6,
            ],

            // Cindie Fosken
            [
                "userId" => 6,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],
            [
                "userId" => 6,
                "course_code" => "5406ICT",
                "course_schedule_id" => 14,
            ],
            [
                "userId" => 6,
                "course_code" => "5737ICT",
                "course_schedule_id" => 20,
            ],
            [
                "userId" => 6,
                "course_code" => "8555ICT",
                "course_schedule_id" => 18,
            ],

            // Misha Gerish
            [
                "userId" => 7,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 7,
                "course_code" => "5406ICT",
                "course_schedule_id" => 14,
            ],
            [
                "userId" => 7,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 7,
                "course_code" => "4599ICT",
                "course_schedule_id" => 2,
            ],
            [
                "userId" => 7,
                "course_code" => "3162ICT",
                "course_schedule_id" => 3,
            ],

            // Mei Scriver
            [
                "userId" => 8,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 8,
                "course_code" => "1816ICT",
                "course_schedule_id" => 5,
            ],
            [
                "userId" => 8,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],
            [
                "userId" => 8,
                "course_code" => "5406ICT",
                "course_schedule_id" => 13,
            ],

            // Liam Jacobs (userId = 9)

            [
                "userId" => 9,
                "course_code" => "4599ICT",
                "course_schedule_id" => 1,
            ],
            [
                "userId" => 9,
                "course_code" => "3162ICT",
                "course_schedule_id" => 4,
            ],
            [
                "userId" => 9,
                "course_code" => "1816ICT",
                "course_schedule_id" => 5,
            ],
            [
                "userId" => 9,
                "course_code" => "5406ICT",
                "course_schedule_id" => 13,
            ],

            // Sophia Nguyen (userId = 10)

            [
                "userId" => 10,
                "course_code" => "4599ICT",
                "course_schedule_id" => 2,
            ],
            [
                "userId" => 10,
                "course_code" => "3162ICT",
                "course_schedule_id" => 3,
            ],
            [
                "userId" => 10,
                "course_code" => "1816ICT",
                "course_schedule_id" => 6,
            ],
            [
                "userId" => 10,
                "course_code" => "5406ICT",
                "course_schedule_id" => 14,
            ],

            // Oliver Turner (userId = 11)

            [
                "userId" => 11,
                "course_code" => "4599ICT",
                "course_schedule_id" => 1,
            ],
            [
                "userId" => 11,
                "course_code" => "3162ICT",
                "course_schedule_id" => 4,
            ],
            [
                "userId" => 11,
                "course_code" => "1816ICT",
                "course_schedule_id" => 6,
            ],
            [
                "userId" => 11,
                "course_code" => "5406ICT",
                "course_schedule_id" => 13,
            ],

            // Ava Thompson (userId = 12)

            [
                "userId" => 12,
                "course_code" => "4599ICT",
                "course_schedule_id" => 2,
            ],
            [
                "userId" => 12,
                "course_code" => "3162ICT",
                "course_schedule_id" => 3,
            ],
            [
                "userId" => 12,
                "course_code" => "1816ICT",
                "course_schedule_id" => 5,
            ],
            [
                "userId" => 12,
                "course_code" => "5406ICT",
                "course_schedule_id" => 14,
            ],

            // Noah Walker (userId = 13)

            [
                "userId" => 13,
                "course_code" => "4599ICT",
                "course_schedule_id" => 1,
            ],
            [
                "userId" => 13,
                "course_code" => "3162ICT",
                "course_schedule_id" => 4,
            ],
            [
                "userId" => 13,
                "course_code" => "1816ICT",
                "course_schedule_id" => 5,
            ],
            [
                "userId" => 13,
                "course_code" => "5406ICT",
                "course_schedule_id" => 13,
            ],

            // Emily Garcia (userId = 14)

            [
                "userId" => 14,
                "course_code" => "4599ICT",
                "course_schedule_id" => 2,
            ],
            [
                "userId" => 14,
                "course_code" => "3162ICT",
                "course_schedule_id" => 3,
            ],
            [
                "userId" => 14,
                "course_code" => "1816ICT",
                "course_schedule_id" => 6,
            ],
            [
                "userId" => 14,
                "course_code" => "5406ICT",
                "course_schedule_id" => 14,
            ],

            // James King (userId = 15)

            [
                "userId" => 15,
                "course_code" => "4599ICT",
                "course_schedule_id" => 1,
            ],
            [
                "userId" => 15,
                "course_code" => "3162ICT",
                "course_schedule_id" => 4,
            ],
            [
                "userId" => 15,
                "course_code" => "1816ICT",
                "course_schedule_id" => 5,
            ],
            [
                "userId" => 15,
                "course_code" => "5406ICT",
                "course_schedule_id" => 13,
            ],

            // Amelia Scott (userId = 16)

            [
                "userId" => 16,
                "course_code" => "4599ICT",
                "course_schedule_id" => 2,
            ],
            [
                "userId" => 16,
                "course_code" => "3162ICT",
                "course_schedule_id" => 3,
            ],
            [
                "userId" => 16,
                "course_code" => "1816ICT",
                "course_schedule_id" => 6,
            ],
            [
                "userId" => 16,
                "course_code" => "5406ICT",
                "course_schedule_id" => 14,
            ],

            // Lucas Evans (userId = 17)

            [
                "userId" => 17,
                "course_code" => "4599ICT",
                "course_schedule_id" => 1,
            ],
            [
                "userId" => 17,
                "course_code" => "3162ICT",
                "course_schedule_id" => 4,
            ],
            [
                "userId" => 17,
                "course_code" => "1816ICT",
                "course_schedule_id" => 5,
            ],
            [
                "userId" => 17,
                "course_code" => "5406ICT",
                "course_schedule_id" => 13,
            ],

            // Mia Adams (userId = 18)

            [
                "userId" => 18,
                "course_code" => "4599ICT",
                "course_schedule_id" => 2,
            ],
            [
                "userId" => 18,
                "course_code" => "3162ICT",
                "course_schedule_id" => 3,
            ],
            [
                "userId" => 18,
                "course_code" => "1816ICT",
                "course_schedule_id" => 6,
            ],
            [
                "userId" => 18,
                "course_code" => "5406ICT",
                "course_schedule_id" => 14,
            ],

            //19

            [
                "userId" => 19,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 19,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 19,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 19,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],

            //20
            [
                "userId" => 20,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 20,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 20,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 20,
                "course_code" => "2710ICT",
                "course_schedule_id" => 16,
            ],

            // User 21
            [
                "userId" => 21,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 21,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 21,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 21,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],

            // User 22
            [
                "userId" => 22,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 22,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 22,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 22,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],

            // User 23
            [
                "userId" => 23,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 23,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 23,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 23,
                "course_code" => "8555ICT",
                "course_schedule_id" => 17,
            ],

            // User 24
            [
                "userId" => 24,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 24,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 24,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 24,
                "course_code" => "8555ICT",
                "course_schedule_id" => 18,
            ],

            // User 25
            [
                "userId" => 25,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 25,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 25,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],
            [
                "userId" => 25,
                "course_code" => "5737ICT",
                "course_schedule_id" => 19,
            ],

            // User 26
            [
                "userId" => 26,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 26,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 26,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],
            [
                "userId" => 26,
                "course_code" => "5737ICT",
                "course_schedule_id" => 20,
            ],

            // User 27
            [
                "userId" => 27,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 27,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 27,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],
            [
                "userId" => 27,
                "course_code" => "8555ICT",
                "course_schedule_id" => 17,
            ],

            // User 28
            [
                "userId" => 28,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 28,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 28,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],
            [
                "userId" => 28,
                "course_code" => "8555ICT",
                "course_schedule_id" => 18,
            ],

            // User 29
            [
                "userId" => 29,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 29,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 29,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],
            [
                "userId" => 29,
                "course_code" => "5737ICT",
                "course_schedule_id" => 19,
            ],

            // User 30
            [
                "userId" => 30,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 30,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 30,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],
            [
                "userId" => 30,
                "course_code" => "5737ICT",
                "course_schedule_id" => 20,
            ],

            // User 31
            [
                "userId" => 31,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 31,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 31,
                "course_code" => "8555ICT",
                "course_schedule_id" => 17,
            ],
            [
                "userId" => 31,
                "course_code" => "5737ICT",
                "course_schedule_id" => 19,
            ],

            // User 32
            [
                "userId" => 32,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 32,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 32,
                "course_code" => "8555ICT",
                "course_schedule_id" => 18,
            ],
            [
                "userId" => 32,
                "course_code" => "5737ICT",
                "course_schedule_id" => 20,
            ],
            // User 33
            [
                "userId" => 33,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 33,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 33,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 33,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],

            // User 34
            [
                "userId" => 34,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 34,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 34,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 34,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],

            // User 35
            [
                "userId" => 35,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 35,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 35,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 35,
                "course_code" => "8555ICT",
                "course_schedule_id" => 17,
            ],

            // User 36
            [
                "userId" => 36,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 36,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 36,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 36,
                "course_code" => "8555ICT",
                "course_schedule_id" => 18,
            ],

            // User 37
            [
                "userId" => 37,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 37,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 37,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],
            [
                "userId" => 37,
                "course_code" => "5737ICT",
                "course_schedule_id" => 19,
            ],

            // User 38
            [
                "userId" => 38,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 38,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 38,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],
            [
                "userId" => 38,
                "course_code" => "5737ICT",
                "course_schedule_id" => 20,
            ],

            // User 39
            [
                "userId" => 39,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 39,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 39,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],
            [
                "userId" => 39,
                "course_code" => "8555ICT",
                "course_schedule_id" => 17,
            ],

            // User 40
            [
                "userId" => 40,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 40,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 40,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],
            [
                "userId" => 40,
                "course_code" => "8555ICT",
                "course_schedule_id" => 18,
            ],

            // User 41
            [
                "userId" => 41,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 41,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 41,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],
            [
                "userId" => 41,
                "course_code" => "5737ICT",
                "course_schedule_id" => 19,
            ],

            // User 42
            [
                "userId" => 42,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 42,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 42,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],
            [
                "userId" => 42,
                "course_code" => "5737ICT",
                "course_schedule_id" => 20,
            ],

            // User 43
            [
                "userId" => 43,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 43,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 43,
                "course_code" => "8555ICT",
                "course_schedule_id" => 17,
            ],
            [
                "userId" => 43,
                "course_code" => "5737ICT",
                "course_schedule_id" => 19,
            ],

            // User 44
            [
                "userId" => 44,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 44,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 44,
                "course_code" => "8555ICT",
                "course_schedule_id" => 18,
            ],
            [
                "userId" => 44,
                "course_code" => "5737ICT",
                "course_schedule_id" => 20,
            ],

            // User 45
            [
                "userId" => 45,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 45,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 45,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 45,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],

            // User 46
            [
                "userId" => 46,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 46,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 46,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 46,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],

            // User 47
            [
                "userId" => 47,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 47,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 47,
                "course_code" => "2710ICT",
                "course_schedule_id" => 11,
            ],
            [
                "userId" => 47,
                "course_code" => "8555ICT",
                "course_schedule_id" => 17,
            ],

            // User 48
            [
                "userId" => 48,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 48,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 48,
                "course_code" => "2710ICT",
                "course_schedule_id" => 12,
            ],
            [
                "userId" => 48,
                "course_code" => "8555ICT",
                "course_schedule_id" => 18,
            ],

            // User 49
            [
                "userId" => 49,
                "course_code" => "3486ICT",
                "course_schedule_id" => 7,
            ],
            [
                "userId" => 49,
                "course_code" => "9589ICT",
                "course_schedule_id" => 9,
            ],
            [
                "userId" => 49,
                "course_code" => "5984ICT",
                "course_schedule_id" => 15,
            ],
            [
                "userId" => 49,
                "course_code" => "5737ICT",
                "course_schedule_id" => 19,
            ],

            // User 50
            [
                "userId" => 50,
                "course_code" => "3486ICT",
                "course_schedule_id" => 8,
            ],
            [
                "userId" => 50,
                "course_code" => "9589ICT",
                "course_schedule_id" => 10,
            ],
            [
                "userId" => 50,
                "course_code" => "5984ICT",
                "course_schedule_id" => 16,
            ],
            [
                "userId" => 50,
                "course_code" => "5737ICT",
                "course_schedule_id" => 20,
            ],
        ]);
    }
}
