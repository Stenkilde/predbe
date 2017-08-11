<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return $teams;
    }

    public function single($id)
    {
        $team = Team::where('id', $id)->first();

        return $team;
    }
}
