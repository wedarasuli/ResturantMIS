<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
        
    protected $fillable = [
        'food_id',
     ];


    public function food()
    {
    	return $this->hasMany('App\food');
    }
    public function payment()
    {
    	return $this->hasMany('App\Payment');
    }
}
