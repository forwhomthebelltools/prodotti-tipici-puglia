<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'category', 'img', 'user_id'];

    //metodo che resituisce lo user che ha creato un prodotto
	public function user()
    {
        return $this->belongsTo('App\User');
        //this=questa news, che appartiene all'utente
        //poichè ho creato la foreign key, capisce come collegare le due tabelle
    }


}
