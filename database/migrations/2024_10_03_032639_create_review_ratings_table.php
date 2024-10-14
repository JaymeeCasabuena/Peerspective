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
        Schema::create("review_ratings", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("userId");
            $table
                ->unsignedTinyInteger("rating")
                ->check("rating >= 0 AND rating <= 5");
            $table->string("course_code");
            $table->unsignedBigInteger("reviewId");

            $table->timestamps();

            $table
                ->foreign("course_code")
                ->references("course_code")
                ->on("courses")
                ->onDelete("cascade");
            $table
                ->foreign("userId")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
            $table
                ->foreign("reviewId")
                ->references("id")
                ->on("reviews")
                ->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("review_ratings");
    }
};
