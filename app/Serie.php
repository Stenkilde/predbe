<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function player()
    {
        return $this->hasMany('App\SeriePlayer', 'serie_id', 'id');
    }

    public function team()
    {
        return $this->hasOne('App\Tournament', 'id');
    }
}
