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
        Schema::create("assessments", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title");
            $table->text("instructions");
            $table->dateTime("due_date");
            $table->enum("type", ["student-select", "teacher-assign"]);
            $table
                ->unsignedTinyInteger("maxscore")
                ->default(100)
                ->check("maxscore >= 1 AND maxscore <= 100");
            $table->integer("required_reviews")->nullable()->min(1);
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
        Schema::dropIfExists("assessments");
    }
};
