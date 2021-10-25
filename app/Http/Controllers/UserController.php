<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public static function index() {

        return view('about', ["title" => "about"]);
    }
}
