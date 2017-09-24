<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;
use App\GroupMember;

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

    public function group()
    {
        $user = JWTAuth::parseToken()->authenticate();

        return $groupMember = GroupMember::where('user_id', $user->id)->get();
    }
}
