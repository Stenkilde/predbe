<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\GroupMember;

class GroupMembersController extends Controller
{
    public function index()
    {
        $groupMembers = GroupMember::all();

        return $groupMembers;
    }

    public function single($id)
    {
        $groupMember = GroupMember::where('id', $id)->first();

        return $groupMember;
    }
}
