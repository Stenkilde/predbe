<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    public function Group()
    {
        return $this->belongsTo('App\Group', 'group_id');
    }
}
