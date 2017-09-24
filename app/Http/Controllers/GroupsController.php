<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Webpatser\Uuid\Uuid;
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

    public function create(Request $request)
    {
        $group = new Group;
        $user = JWTAuth::parseToken()->authenticate();

        $group->id = Uuid::generate(4);
        $group->tournament_id = $request->tournament_id;
        $group->user_id = $user->id;

        $group->save();

        return $group;
    }

    public function single($id)
    {
        $group = Group::where('id', $id)->first();

        $user = Group::find($group->user_id)->User;
        $members = Group::find($id)->GroupMember;
        $tournament = Group::find($group->tournament_id)->Tournament;

        $group->admin = $user;
        $group->members = $members;
        $group->tournament = $tournament;

        return $group;
    }
}