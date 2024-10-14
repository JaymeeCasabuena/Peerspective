<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewRating extends Model
{
    use HasFactory;

    protected $fillable = ["rating", "userId", "course_code", "reviewId"];

    public function student()
    {
        return $this->belongsTo(User::class, "userId");
    }
}
