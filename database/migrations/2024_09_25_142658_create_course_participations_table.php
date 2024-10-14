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
        Schema::create("course_participations", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("userId");
            $table->string("course_code");
            $table->unsignedBigInteger("course_schedule_id");
            $table
                ->foreign("userId")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
            $table
                ->foreign("course_code")
                ->references("course_code")
                ->on("courses")
                ->onDelete("cascade");
            $table
                ->foreign("course_schedule_id")
                ->references("id")
                ->on("course_schedules")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists("course_participations");
    }
};
