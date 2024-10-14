<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSchedule extends Model
{
    use HasFactory;

    protected $fillable = ["day", "time", "mode", "course_code"];

    public function course()
    {
        return $this->belongsTo(Course::class, "course_code", "course_code");
    }

    public function participations()
    {
        return $this->hasMany(CourseParticipation::class, "schedule_id");
    }
}
