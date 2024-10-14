<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPeerGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("user_peer_groups")->insert([
            ["userId" => 5, "peer_group_id" => 1, "assessment_id" => 2],
            ["userId" => 9, "peer_group_id" => 1, "assessment_id" => 2],
            ["userId" => 11, "peer_group_id" => 1, "assessment_id" => 2],

            ["userId" => 13, "peer_group_id" => 2, "assessment_id" => 2],
            ["userId" => 15, "peer_group_id" => 2, "assessment_id" => 2],
            ["userId" => 17, "peer_group_id" => 2, "assessment_id" => 2],

            ["userId" => 7, "peer_group_id" => 3, "assessment_id" => 2],
            ["userId" => 10, "peer_group_id" => 3, "assessment_id" => 2],
            ["userId" => 12, "peer_group_id" => 3, "assessment_id" => 2],

            ["userId" => 14, "peer_group_id" => 4, "assessment_id" => 2],
            ["userId" => 16, "peer_group_id" => 4, "assessment_id" => 2],
            ["userId" => 18, "peer_group_id" => 4, "assessment_id" => 2],
            ["userId" => 7, "peer_group_id" => 5, "assessment_id" => 4],
            ["userId" => 10, "peer_group_id" => 5, "assessment_id" => 4],
            ["userId" => 12, "peer_group_id" => 5, "assessment_id" => 4],

            ["userId" => 14, "peer_group_id" => 6, "assessment_id" => 4],
            ["userId" => 16, "peer_group_id" => 6, "assessment_id" => 4],
            ["userId" => 18, "peer_group_id" => 6, "assessment_id" => 4],

            ["userId" => 5, "peer_group_id" => 7, "assessment_id" => 4],
            ["userId" => 9, "peer_group_id" => 7, "assessment_id" => 4],
            ["userId" => 11, "peer_group_id" => 7, "assessment_id" => 4],

            ["userId" => 13, "peer_group_id" => 8, "assessment_id" => 4],
            ["userId" => 15, "peer_group_id" => 8, "assessment_id" => 4],
            ["userId" => 17, "peer_group_id" => 8, "assessment_id" => 4],
            ["userId" => 8, "peer_group_id" => 9, "assessment_id" => 5],
            ["userId" => 9, "peer_group_id" => 9, "assessment_id" => 5],
            ["userId" => 12, "peer_group_id" => 9, "assessment_id" => 5],

            ["userId" => 13, "peer_group_id" => 10, "assessment_id" => 5],
            ["userId" => 15, "peer_group_id" => 10, "assessment_id" => 5],
            ["userId" => 17, "peer_group_id" => 10, "assessment_id" => 5],

            ["userId" => 5, "peer_group_id" => 11, "assessment_id" => 5],
            ["userId" => 10, "peer_group_id" => 11, "assessment_id" => 5],
            ["userId" => 11, "peer_group_id" => 11, "assessment_id" => 5],

            ["userId" => 14, "peer_group_id" => 12, "assessment_id" => 5],
            ["userId" => 16, "peer_group_id" => 12, "assessment_id" => 5],
            ["userId" => 18, "peer_group_id" => 12, "assessment_id" => 5],
            ["userId" => 5, "peer_group_id" => 13, "assessment_id" => 14],
            ["userId" => 8, "peer_group_id" => 13, "assessment_id" => 14],
            ["userId" => 9, "peer_group_id" => 13, "assessment_id" => 14],
            ["userId" => 11, "peer_group_id" => 13, "assessment_id" => 14],

            ["userId" => 13, "peer_group_id" => 14, "assessment_id" => 14],
            ["userId" => 15, "peer_group_id" => 14, "assessment_id" => 14],
            ["userId" => 17, "peer_group_id" => 14, "assessment_id" => 14],

            ["userId" => 6, "peer_group_id" => 15, "assessment_id" => 14],
            ["userId" => 7, "peer_group_id" => 15, "assessment_id" => 14],
            ["userId" => 10, "peer_group_id" => 15, "assessment_id" => 14],

            ["userId" => 12, "peer_group_id" => 16, "assessment_id" => 14],
            ["userId" => 14, "peer_group_id" => 16, "assessment_id" => 14],
            ["userId" => 16, "peer_group_id" => 16, "assessment_id" => 14],
            ["userId" => 18, "peer_group_id" => 16, "assessment_id" => 14],
        ]);
    }
}
