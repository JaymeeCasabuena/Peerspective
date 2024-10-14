<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "instructions",
        "due_date",
        "type",
        "maxscore",
        "required_reviews",
        "course_code",
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, "course_code", "course_code");
    }
}
