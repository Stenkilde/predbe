<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $user = new User;
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        return $user;
    }
}
