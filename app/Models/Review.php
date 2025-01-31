<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        "reviewer_id",
        "reviewee_id",
        "peer_group_id",
        "review_text",
        "assessment_id",
    ];

    public function reviewer()
    {
        return $this->belongsTo(User::class, "reviewer_id");
    }

    public function reviewee()
    {
        return $this->belongsTo(User::class, "reviewee_id");
    }

    public function assessment()
    {
        return $this->belongsTo(Assessment::class, "assessment_id");
    }
}
