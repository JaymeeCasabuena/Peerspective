<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ["course_code", "name"];

    public function assessments()
    {
        return $this->hasMany(Assessment::class, "course_code", "course_code");
    }

    public function schedules()
    {
        return $this->hasMany(
            CourseSchedule::class,
            "course_code",
            "course_code"
        );
    }

    public function participations()
    {
        return $this->hasMany(
            CourseParticipation::class,
            "course_code",
            "course_code"
        );
    }

    public function instructors()
    {
        return $this->hasManyThrough(
            User::class,
            CourseParticipation::class,
            "course_code",
            "sNumber",
            "course_code",
            "sNumber"
        )->where("users.isInstructor", 1);
    }
}
