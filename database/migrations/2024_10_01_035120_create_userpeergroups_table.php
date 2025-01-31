<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("user_peer_groups", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("userId");
            $table->unsignedBigInteger("peer_group_id")->nullable();
            $table->unsignedBigInteger("assessment_id");
            $table->timestamps();

            $table
                ->foreign("userId")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
            $table
                ->foreign("peer_group_id")
                ->references("id")
                ->on("peer_groups")
                ->onDelete("set null");
            $table
                ->foreign("assessment_id")
                ->references("id")
                ->on("assessments")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("user_peer_groups");
    }
};
