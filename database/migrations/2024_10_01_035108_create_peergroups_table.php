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
        Schema::create("peer_groups", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("assessment_id");
            $table->timestamps();

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
        Schema::dropIfExists("peer_groups");
    }
};
