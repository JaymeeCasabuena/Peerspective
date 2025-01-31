<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeerGroup extends Model
{
    use HasFactory;

    protected $fillable = ["assessment_id"];

    public function userPeerGroups()
    {
        return $this->hasMany(UserPeerGroup::class, "peer_group_id");
    }
}
