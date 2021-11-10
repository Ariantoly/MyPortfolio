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
        $projects = Project::orderBy('title')->paginate(9)->withQueryString();
        $tools = Tools::all();

        return view('dashboard.dashboard', ['title' => 'Dashboard', 'projects' => $projects, 'tools' => $tools]);
    }

    public function showInsertForm()
    {
        $tools = Tools::all();

        return view('dashboard.insert', ['tools' => $tools]);
    }

    public function showUpdateForm($id)
    {
        $tools = Tools::all();

        return view('dashboard.update', ['tools' => $tools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    public function deleteProject($id)
    {
        $project = Project::find($id);

        $project->delete();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
