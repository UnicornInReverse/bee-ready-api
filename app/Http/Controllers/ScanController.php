<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Scan;
use Validator;

class ScanController extends Controller
{
    /**
     * shows a list of scans
     * @return [type] [description]
     */
    public function index(){
        $scans = Scan::paginate(25);

        return view('scans.index', compact('scans'));
    }

    /**
     * stores a new scan
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request){
    	$validator = Validator::make($request->all(), [
				'plant_id' => 'required',
				'longitude' => 'required|min:-90|max:90',
				'latitude' => 'required|min:-90|max:90'
    		]);

    	if($validator->fails()){
    		return [
    			'statuscode' => 422,
    			'error' => 'validation failed'
    		];
    	}

    	return Scan::create([
    		'plant_id' => $request->input('plant_id'),
    		'user_id' => 1,									//for now, fix when Auth::api added
    		'longitude' => $request->input('longitude'),
    		'latitude' => $request->input('latitude')
    		]);
    }

    public function delete($id){
        $scan = Scan::findOrFail($id);

        $scan->delete();

        return redirect('/scan');
    }
}
