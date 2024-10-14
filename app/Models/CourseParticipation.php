<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseParticipation extends Model
{
    use HasFactory;

    protected $fillable = ["course_code", "userId", "course_schedule_id"];

    public function course()
    {
        return $this->belongsTo(Course::class, "course_code", "course_code");
    }

    public function schedule()
    {
        return $this->belongsTo(CourseSchedule::class, "schedule_id");
    }

    public function student()
    {
        return $this->belongsTo(User::class, "userId");
    }
}
