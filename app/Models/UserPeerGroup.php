<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPeerGroup extends Model
{
    use HasFactory;

    protected $fillable = ["userId", "peer_group_id", "assessment_id"];

    public function peerGroup()
    {
        return $this->belongsTo(PeerGroup::class, "peer_group_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "userId");
    }

    public function assessment()
    {
        return $this->belongsTo(Assessment::class, "assessment_id");
    }
}
