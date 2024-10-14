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
        Schema::create("reviews", function (Blueprint $table) {
            $table->id();
            $table->string("reviewer_id");
            $table->string("reviewee_id");
            $table->text("review_text");
            $table->unsignedBigInteger("assessment_id");
            $table->timestamps();

            $table
                ->foreign("reviewer_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
            $table
                ->foreign("reviewee_id")
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
        Schema::dropIfExists("reviews");
    }
};
