<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectImageController extends Controller
{
    //
    public function index() {
        $images = Image::paginate(10)->withQueryString();
        $size = Image::all()->count();

        return view('dashboard.image', ['images' => $images, 'size' => $size]);
    }

    public function showInsertForm() {
        $projects = Project::orderBy('title')->get();

        return view('dashboard.insertProjectImage', ['projects' => $projects]);
    }

    public function insert(Request $request) {
        for($i = 1; $i <= 5; $i++) {
            $a = "image".$i;
            if($request->$a != null) {
                $imageFile = $request->file($a);
                $imagePath = 'images/'.Storage::disk('public_images')->put('', $imageFile);
                $image = new Image;
                $image->path = $imagePath;
                $project = Project::find($request->projects[0]);
                $image->project()->associate($project);
                
                $image->save();

            }
        }
        return redirect('/image');
    }
}
