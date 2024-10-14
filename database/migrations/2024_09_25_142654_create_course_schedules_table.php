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
        Schema::create("course_schedules", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("day");
            $table->string("time");
            $table->enum("mode", ["online", "in-person"]);
            $table->string("course_code");
            $table
                ->foreign("course_code")
                ->references("course_code")
                ->on("courses")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists("course_schedules");
    }
};
