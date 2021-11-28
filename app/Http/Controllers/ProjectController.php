<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use App\Models\Tools;

class ProjectController extends Controller
{
    public static function index() {

        $projects = Project::orderBy('title')->paginate(9)->withQueryString();
        
        return view('home', ['projects' => $projects]);
    }

    public static function getProjectById($id) {

        $project = Project::find($id);

        return view('project', ['project' => $project]);

    }

}
