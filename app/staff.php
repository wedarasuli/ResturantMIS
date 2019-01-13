<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
        
    protected $fillable = [
        'name','father_name','address','age','salary','phone','photo',
     ];

    public function attendance()
    {
    	return $this->belongsTo('App\attendance');
    }
}
