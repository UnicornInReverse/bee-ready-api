<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Plant;
use App\Season;

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
    	$plants = Plant::paginate(10);	

        $keyword = '';                                          //dirty hack

    	return view('plants.index', compact('plants', 'keyword'));
    }

    /**
     * searches for plants and shows them
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function search(Request $request){
        $this->validate($request, [
            'keyword' => 'required']);

        $keyword = $request->input('keyword');

        $plants = Plant::where('name', 'LIKE', "%$keyword%")->paginate(10);


        dd($plants);
        return view('plants.index', compact('plants', 'keyword'));
    }

    /**
     * shows the form for creating a new plant
     * @return [type] [description]
     */
    public function create(){
    	$seasons = Season::all();

    	return view('plants.create', compact('seasons'));
    }

    /**
     * stores a new pant
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request){
    	$this->validate($request, ['name' => 'required|max:50',
    							   'season_id' => 'required|numeric']);

    	$plant = Plant::create($request->all());

    	return redirect('/plant/' . $plant->id);
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
     * shows the edit form
     * @param  int $id  	id of the plant
     * @return [type]     [description]
     */
    public function edit($id){
    	$plant = Plant::findOrFail($id);
    	$seasons = Season::all();
    	
    	return view('plants.edit', compact('plant', 'seasons'));
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

    	return redirect('/plant');
    }
}
