<?php

namespace App\Http\Controllers;

use App\Models\Tools;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    //
    public function index() {
        $tools = Tools::paginate(10)->withQueryString();
        $size = Tools::all()->count();

        return view('dashboard.tools', ['title' => 'Tools', 'tools' => $tools, 'size' => $size]);
    }

    public function showInsertForm()
    {
        return view('dashboard.insertTools', ['title' => 'Insert']);
    }
}
