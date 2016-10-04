<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Season;
use App\Http\Requests;

class SeasonController extends Controller
{
	/**
	 * shows all the seasons
	 * @return [type] [description]
	 */
    public function index(){
    	$seasons = Season::all();

    	return view('seasons.index', compact('seasons'));
    }

    /**
     * shows the form for creating a new season
     * @return [type] [description]
     */
    public function create(){
    	return view('seasons.create');
    }

    /**
     * stores a new season
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request){
    	$this->validate($request, [
    		'name' => 'required|max:50']);

    	$season = Season::create($request->all());

    	return redirect('/season' . $season->id);
    }

    /**
     * shows a single season
     * @param  int $id 		id of the season
     * @return [type]     [description]
     */
    public function show($id){
    	$season = Season::findOrFail($id);

    	return view('seasons.edit', compact('season'));
    }	

    /**
     * updates a season
     * @param  Request $request [description]
     * @param  int  $id      id of the season
     * @return [type]           [description]
     */
    public function update(Request $request, $id){
    	$this->validate($request, [
    		'name' => 'required|max:50']);

    	$season = Season::create($request::all());

    	return redirect('season/' . $season->id);
    }
}
