<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;


class ProjectController extends Controller
{
    protected $table = 'projects';

    public function show(Project $project){

        $projects = $project->all();

        return view('welcome', compact('projects'));

    } 
}
