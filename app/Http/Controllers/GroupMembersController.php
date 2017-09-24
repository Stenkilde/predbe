<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\GroupMember;

class GroupMembersController extends Controller
{
    public function index()
    {
        $groupMembers = GroupMember::all();

        return $groupMembers;
    }

    public function join(Request $request)
    {
        $groupMember = new GroupMember;
        $user = JWTAuth::parseToken()->authenticate();

        $groupMember->group_id = $request->input('group_id');
        $groupMember->user_id = $user->id;

        $groupMember->save();

        return $groupMember;
    }

    public function single($id)
    {
        $groupMember = GroupMember::where('user_id', $id)->get();

        return $groupMember;
    }
}
