<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scan extends Model
{
    protected $fillable = [
        'plant_id', 'user_id', 'longitude', 'latitude'
    ];

    public function plant(){
    	return $this->belongsTo('App\Plant');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
