<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
        
    protected $fillable = [
        'menu_id',
     ];

    public function menu()
    {
    	return $this->belongsTo('App\menu');
    }
}
