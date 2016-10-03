<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Plant;

class PlantController extends Controller
{
	/**
	 * returns an array of 10 plants
	 * @param  integer $ofset  	ofset for pagination
	 * @return array 			array of plants
	 */
    public function index($ofset = 0){
    	return Plant::skip($ofset)->take(10)->get();
    }
}
