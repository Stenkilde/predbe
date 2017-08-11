<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    
    public function GroupMember()
    {
        return $this->hasMany('App\GroupMember', 'group_id');
    }

    public function Tournament()
    {
        return $this->hasOne('App\Tournament', 'id');
    }
}
