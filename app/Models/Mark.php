<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = ["score", "assessment_id", "userId"];

    public function student()
    {
        return $this->belongsTo(User::class, "userId");
    }
}
