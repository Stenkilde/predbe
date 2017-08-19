<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        $groupMember->group_id = $request->input('group_id');
        $groupMember->user_id = $request->input('user_id');

        $groupMember->save();

        return $groupMember;
    }

    public function single($id)
    {
        $groupMember = GroupMember::where('id', $id)->first();

        return $groupMember;
    }
}
