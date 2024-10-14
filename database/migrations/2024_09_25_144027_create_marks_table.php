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
        Schema::create("marks", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table
                ->integer("score")
                ->unsigned()
                ->check("score <= 100 && score >= 0");
            $table->unsignedBigInteger("assessment_id");
            $table->unsignedBigInteger("userId");
            $table
                ->foreign("userId")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
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
        Schema::table("marks", function (Blueprint $table) {
            $table->dropForeign(["user_id"]);
            $table->dropForeign(["assessment_id"]);
        });

        Schema::dropIfExists("marks");
    }
};
