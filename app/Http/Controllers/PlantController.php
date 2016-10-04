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
    public function showList($ofset = 0){
    	return Plant::skip($ofset)->take(10)->get();
    }

    /**
     * shows a list with plants
     * @return [type] [description]
     */
    public function index(){
    	$plants = Plant::take(10)->get();							//TO-DO: pagination
    	return view('plants.index', compact('plants'));
    }

    /**
     * stores a new pant
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request){

    	return back();
    }

    /**
     * shows a single plant
     * @param  in $id  		id of the plant
     * @return [type]     [description]
     */
    public function show($id){
    	$plant = Plant::findOrFail($id);

    	return view('plants.show', compact('plant'));
    }

    /**
     * updates a single plant
     * @param  Request $request [description]
     * @param  int  $id      id of the plant
     * @return [type]           [description]
     */
    public function update(Request $request, $id){
    	$this->validate($request, ['name' => 'required|max:50',
    							   'season_id' => 'required|numeric']);

    	$plant = Plant::findOrFail($id);

    	$plant->name = $request->input('name');
    	$plant->season_id = $request->input('season_id');

    	$plant->save();

    	return back();
    }

    /**
     * deletes a plant
     * @param  in $id 		id of the plant
     * @return [type]     [description]
     */
    public function delete($id){
    	$plant = Plant::findOrFail($id);

    	$plant->delete();

    	return redirect('/plants');
    }
}
