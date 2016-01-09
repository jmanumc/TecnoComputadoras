<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

use App\User;

use Storage;

class UsersController extends Controller
{
	public function index()
	{
		//
	}

    public function create ()
    {
    	return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
    	$user = new User($request->all());
    	if(!empty($user->avatar)) {
	    	$user->avatar = $this->manipulateImage($user->avatar);
    	}
    	$user->save();

    	return redirect()->route('admin.users.index');
    }

    public function manipulateImage($image)
    {
		$name = 'avatar_' . microtime(true) . '.' . $image->getClientOriginalExtension();
		$path = 'users/avatars/' . $name;
		Storage::put($path, file_get_contents($image));

		return $name;
    }
}
