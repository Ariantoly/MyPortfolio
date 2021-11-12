<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Tools;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public static function index() {

        $projects = Project::orderBy('title')->paginate(9)->withQueryString();
        $projectImage = ProjectImage::all();
        
        return view('home', ['title' => 'home', 'projects' => $projects, 'projectImage' => $projectImage]);
    }

    public static function getProjectById($id) {

        $project = Project::find($id);
        $t = $project->tools;
        $tok = strtok($t, '[, ]+');
        $conv = array();
        $tools = array();

        while($tok) {
            array_push($conv, $tok);
            $tok = strtok('[, ]+');
        }
        foreach($conv as $c) {
            $tool = Tools::where('name', $c)->get();
            array_push($tools, $tool);
        }

        return view('project', ['title' => $project->title, 'project' => $project, 'tools' => $tools]);

    }

}
