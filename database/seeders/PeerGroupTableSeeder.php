<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeerGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("peer_groups")->insert([
            [
                "assessment_id" => 2,
            ],
            [
                "assessment_id" => 2,
            ],
            [
                "assessment_id" => 2,
            ],
            [
                "assessment_id" => 2,
            ],
            [
                "assessment_id" => 4,
            ],
            [
                "assessment_id" => 4,
            ],
            [
                "assessment_id" => 4,
            ],
            [
                "assessment_id" => 4,
            ],
            [
                "assessment_id" => 5,
            ],
            [
                "assessment_id" => 5,
            ],
            [
                "assessment_id" => 5,
            ],
            [
                "assessment_id" => 5,
            ],
            [
                "assessment_id" => 14,
            ],
            [
                "assessment_id" => 14,
            ],
            [
                "assessment_id" => 14,
            ],
            [
                "assessment_id" => 14,
            ],
        ]);
    }
}
