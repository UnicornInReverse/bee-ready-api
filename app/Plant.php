<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [
        'name', 'season_id'
    ];

    public function season(){
    	return $this->belongsTo('App\Season');
    }
}
