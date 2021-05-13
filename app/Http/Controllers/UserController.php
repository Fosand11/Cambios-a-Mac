<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;
        $user->save();
        return $user;
    }

    public function update(Request $request, User $user)
    {
        $user->fill($request->all());
        $user->save();
        return dd($request->all());
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return $user;
    }
}
// $user->name = $request->name;
//         $user->email = $request->email;
//         $user->password = $request->password;
//         $user->is_admin = $request->is_admin;

//         $user->update();