<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $skills = Skill::orderBy('year', 'desc')->get();
        $projects = Project::all();

        return view('welcome', compact('skills', 'projects'));
    }
}
