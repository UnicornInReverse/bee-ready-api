<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{	
	/**
	 * shows a list of users
	 * @return [type] [description]
	 */
    public function index(){
    	$users = User::paginate(10);

        $keyword = '';                                               //dirty hack

    	return view('users.index', compact('users', 'keyword'));
    }

    /**
     * search for users and shows them
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function search(Request $request){
        $this->validate($request, [
            'keyword' => 'required']);

        $keyword = $request->input('keyword');

        $users = User::where('name', 'LIKE', "%$keyword%")->paginate(10);

        return view('users.index', compact('users', 'keyword'));
    }

    /**
     * shows the create form
     * @return [type] [description]
     */
    public function create(){
    	return view('users.create');
    }

    /**
     * creates a new user
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request){
    	$this->validate($request, [
    		'name' => 'required|max:100',
    		'email' => 'required|email|max:255|unique:users',
    		]);

    	$user = new user($request->all());
    	$user->password = Hash::make('password');

    	$user->save();

    	return redirect('user/' . $user->id);
    }

    /**
     * show a single user
     * @param  int $id  	if of the user
     * @return [type]     [description]
     */
    public function show($id){
    	$user = User::findOrFail($id);

    	return view('users.show', compact('user'));
    }

    /**
     * shows the form for editing an user
     * @param  int $id  	id of the user
     * @return [type]     [description]
     */
    public function edit($id){
    	$user = User:: findOrFail($id);

    	return view('users.edit', compact('user'));
    }

    /**
     * updates an user
     * @param  Request $request [description]
     * @param  int  $id 		id of the user
     * @return [type]           [description]
     */
    public function update(Request $request, $id){
    	$this->validate($request, [
    		'name' => 'required|max:100',
    		'email' => 'required|email|max:255']);

    	$user = User::findOrFail($id);

    	$user->name = $request->input('name');
    	$user->email = $request->input('email');

    	$user->save();

    	return redirect('user/' . $user->id);
    }

    /**
     * deletes an User
     * @param  User   $id  		the user to delete
     * @return [type]     [description]
     */
    public function delete(User $id){
    	$id->delete();

    	return redirect('/user');
    }
}
