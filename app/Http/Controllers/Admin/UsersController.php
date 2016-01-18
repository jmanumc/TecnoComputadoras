<?php

namespace TecnoComputadoras\Http\Controllers\Admin;

use Illuminate\Http\Request;

use TecnoComputadoras\Http\Controllers\Controller;
use TecnoComputadoras\Http\Requests;
use TecnoComputadoras\Http\Requests\StoreUserRequest;
use TecnoComputadoras\Http\Requests\UpdateUserRequest;

use TecnoComputadoras\User;

use Laracasts\Flash\Flash;
use Storage;

class UsersController extends Controller
{
    protected $avatar = [
        'default' => 'user-avatar-default.png',
        'pd'      => 'images/default/',
        'path'    => 'avatars/',
        'prefix'  => 'avatar_',
        'url'     => 'images/avatars'
    ];

    public function __construct ()
    {
        $this->middleware('auth');
    }

	public function index()
	{
        $users = User::orderBy('id', 'DESC')->paginate(10);

		return view('admin.users.index')->with('users', $users);
	}

    public function show ($id)
    {
        $user = User::findOrFail($id);
        $user->avatar = $this->getAvatar($user->avatar);

        return \Response::json(array('success' => true, 'user' => $user));
    }

    public function create ()
    {
    	return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {
    	$user = new User($request->all());
    	if(!empty($user->avatar)) {
	    	$user->avatar = $this->putAvatar($user->avatar);
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
            $user->avatar = $this->putAvatar($request->file('avatar'));
            $this->deleteAvatar($avatar_old);
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

    public function destroy ($id)
    {
        $user = User::findOrFail($id);
        $this->deleteAvatar($user->avatar);
        $user->delete();

        Flash::success('El usuario ' . $user->name . ' ha sido eliminado exitosamente');
    }

    public function getAvatar ($fileName)
    {
        if($fileName == $this->avatar['default']) {
            return asset($this->avatar['pd'] . $this->avatar['default']);
        } else {
            return url($this->avatar['url'], $fileName);
        }
    }

    public function putAvatar ($image)
    {
        $name = $this->avatar['prefix'] . microtime(true) . '.' . $image->getClientOriginalExtension();
        $path = $this->avatar['path'] . $name;
        Storage::put($path, file_get_contents($image));

        return $name;
    }

    public function deleteAvatar ($fileName)
    {
        $path = $this->avatar['path'] . $fileName;

        if($fileName != $this->avatar['default'] && Storage::disk('local')->exists($path)) {
            Storage::delete($path);
        }
    }
}
