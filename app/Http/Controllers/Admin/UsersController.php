<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;

use App\User;

use Storage;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
	public function index()
	{
        $users = User::orderBy('id', 'DESC')->paginate(10);

		return view('admin.users.index')->with('users', $users);
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

        Flash::success('El usuario ' . $user->name . ' ha sido registrado exitosamente');
    	return redirect()->route('admin.users.index');
    }

    public function edit ($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit')->with('user', $user);
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $changes = false;

        if($user->name != $request->name) {
            $user->name = $request->name;
            $changes = true;
        }

        if($user->email != $request->email) {
            $user->email = $request->email;
            $changes = true;
        }

        if($user->type != $request->type) {
            $user->type = $request->type;
            $changes = true;
        }

        if($request->has('password')) {
            $user->password = $request->password;
            $changes = true;
        }

        if(!empty($request->file('avatar'))) {
            $avatar_old = $user->avatar;
            print($avatar_old);
            $user->avatar = $this->manipulateImage($request->file('avatar'));

            if($avatar_old != 'user-avatar-default.png' && Storage::disk('local')->exists('users/avatars/' . $avatar_old)) {
                Storage::delete('users/avatars/' . $avatar_old);
            }
            $changes = true;
        }

        if($changes) {
            $user->save();

            Flash::success('El usuario ' . $user->name . ' ha sido actualizado exitosamente');
            return redirect()->route('admin.users.index');
        } else {
            return redirect()->back();
        }
    }

    public function manipulateImage($image)
    {
        $name = 'avatar_' . microtime(true) . '.' . $image->getClientOriginalExtension();
        $path = 'users/avatars/' . $name;
        Storage::put($path, file_get_contents($image));

        return $name;
    }
}
