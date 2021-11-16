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

        return view('dashboard.dashboard', ['title' => 'Dashboard', 'projects' => $projects, 'size' => $size]);
    }

    public function showInsertForm()
    {
        $tools = Tools::orderBy('type')->get();

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
        $tools = $request->tools;

        $project->save();

        $project1 = Project::find($project->id);
        foreach($tools as $t) {
            $tool = Tools::where('name', $t)->first();
            $project1->tools()->attach($tool);
        }

        return redirect('/dashboard')->with('success', $project->title.' Inserted');
    }

    public function updateProject(Request $request, $id)
    {
        $project = Project::find($id);
        $project->title = $request->title;
        $project->desc = $request->desc;
        $project->link = $request->link;
        $tools = $request->tools;

        $project->tools()->detach();

        foreach($tools as $t) {
            $tool = Tools::where('name', $t)->first();
            $project->tools()->attach($tool);
        }

        $project->save();

        return redirect('/dashboard')->with('success', $project->title.' Updated');
    }

    public function deleteProject($id)
    {
        $project = Project::find($id);

        $project->delete();

        return redirect()->back();
    }

    
}
