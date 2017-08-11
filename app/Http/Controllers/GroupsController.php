<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\GroupMember;
use App\User;
use App\Tournament;

class GroupsController extends Controller
{
    public function index()
    {
        $groups = Group::all();

        return $groups;
    }

    public function single($id)
    {
        $group = Group::where('id', $id)->first();
        $user = Group::find($group->user_id)->user;
        $members = Group::find($id)->GroupMember;
        $tournament = Group::find($group->tournament_id)->Tournament;

        $group->admin = $user;
        $group->members = $members;
        $group->tournament = $tournament;

        return $group;
    }
}