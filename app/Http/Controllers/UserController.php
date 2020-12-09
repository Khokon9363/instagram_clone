<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'full_name' => 'required',
            'user_name' => 'required',
            'password' => 'required',
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->full_name = $request->full_name;
        $user->user_name = $request->user_name;
        $user->password = bcrypt($request->password);
        $user->save();
        session()->put('id',$user->id);
        return response()->json($user,200);
    }
}
