<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tools;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::orderBy('title')->paginate(10)->withQueryString();
        $size = Project::all()->count();
        $tools = Tools::all();

        return view('dashboard.dashboard', ['title' => 'Dashboard', 'projects' => $projects, 'tools' => $tools, 'size' => $size]);
    }

    public function showInsertForm()
    {
        $tools = Tools::all();

        return view('dashboard.insertProject', ['title' => 'Insert', 'tools' => $tools]);
    }

    public function showUpdateForm($id)
    {
        $tools = Tools::all();
        $project = Project::find($id);

        return view('dashboard.updateProject', ['title' => 'Update', 'tools' => $tools, 'project' => $project]);
    }

    public function insertProject(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->desc = $request->desc;
        $project->link = $request->link;
        $tools = "";
        $i = 0;

        foreach($request->tools as $tool) {
            if($i == sizeof($request->tools) - 1) {
                $tools = $tools.$tool;
                break;
            }
            $tools = $tools.$tool.", ";
            $i++;
        }

        $project->tools = $tools;

        $project->save();

        return redirect('/dashboard');
    }

    public function updateProject(Request $request, $id)
    {
        $project = Project::find($id);
        $project->title = $request->title;
        $project->desc = $request->desc;
        $project->link = $request->link;
        $project->tools = "";
        $tools = "";
        $i = 0;

        foreach($request->tools as $tool) {
            if($i == sizeof($request->tools) - 1) {
                $tools = $tools.$tool;
                break;
            }
            $tools = $tools.$tool.", ";
            $i++;
        }

        $project->tools = $tools;

        $project->save();

        return redirect('/dashboard');
    }

    public function deleteProject($id)
    {
        $project = Project::find($id);

        $project->delete();

        return redirect()->back();
    }

    
}
