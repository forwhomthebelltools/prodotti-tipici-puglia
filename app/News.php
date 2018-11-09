<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

use App\NewsComment;

class News extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
        //this=questa news, che appartiene all'utente
        //poichè ho creato la foreign key, capisce come collegare le due tabelle
    }

    public function comments() {
        return $this->hasMany('App\NewsComment');
    }
}
