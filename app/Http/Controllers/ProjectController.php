<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public static function index() {
        $projects = 
        [
            [
                "id" => 1, 
                "title" => "Frawlsalla",
                "tools" => ["HTML", "CSS", "JavaScript"],
                "desc" => "Tugas Kelompok Project HCI by Ariantoly, Ivano Ekasetia Tjahyadi, Raksi Ghaly Rianto",
                "img" => "images/frawlsalla-1.png",
                "link" => "https://github.com/Ariantoly/Frawlsalla"
            ],
            [
                "id" => 2, 
                "title" => "InvoiceApplication",
                "tools" => ["HTML", "CSS", "Bootstrap", "Laravel"],
                "desc" => "Tugas Test Junior Programmer IT Division - Bugged",
                "img" => "images/frawlsalla-1.png",
                "link" => "https://github.com/Ariantoly/InvoiceApplication"
            ],
            [
                "id" => 3, 
                "title" => "NeinteenFlower",
                "tools" => ["ASP.NET"],
                "desc" => "Tugas Kelompok Project PSD by Ariantoly, Ivano Ekasetia Tjahyadi, Raksi Ghaly Rianto",
                "img" => "images/frawlsalla-1.png",
                "link" => "https://github.com/Ariantoly/NeinteenFlower"
            ],
            [
                "id" => 4, 
                "title" => "Keypedia",
                "tools" => ["HTML", "CSS", "Bootstrap", "Laravel"],
                "desc" => "Tugas Project Web Programming",
                "img" => "images/frawlsalla-1.png",
                "link" => "https://github.com/Ariantoly/keypedia"
            ]
        ];

        return view('home', ['title' => 'home', 'projects' => $projects]);
    }

    public static function getProjectById($id) {
        $projects = 
        [
            [
                "id" => 1, 
                "title" => "Frawlsalla",
                "tools" => ["HTML", "CSS", "JavaScript"],
                "desc" => "Tugas Kelompok Project HCI by Ariantoly, Ivano Ekasetia Tjahyadi, Raksi Ghaly Rianto",
                "img" => "images/frawlsalla-1.png",
                "link" => "https://github.com/Ariantoly/Frawlsalla"
            ],
            [
                "id" => 2, 
                "title" => "InvoiceApplication",
                "tools" => ["HTML", "CSS", "Bootstrap", "Laravel"],
                "desc" => "Tugas Test Junior Programmer IT Division - Bugged",
                "img" => "images/frawlsalla-1.png",
                "link" => "https://github.com/Ariantoly/InvoiceApplication"
            ],
            [
                "id" => 3, 
                "title" => "NeinteenFlower",
                "tools" => ["ASP.NET"],
                "desc" => "Tugas Kelompok Project PSD by Ariantoly, Ivano Ekasetia Tjahyadi, Raksi Ghaly Rianto",
                "img" => "images/frawlsalla-1.png",
                "link" => "https://github.com/Ariantoly/NeinteenFlower"
            ],
            [
                "id" => 4, 
                "title" => "Keypedia",
                "tools" => ["HTML", "CSS", "Bootstrap", "Laravel"],
                "desc" => "Tugas Project Web Programming",
                "img" => "images/frawlsalla-1.png",
                "link" => "https://github.com/Ariantoly/keypedia"
            ]
        ];

        $selected = null;

        foreach($projects as $project) {
            if((int) $id === $project['id']) {
                $selected = $project;
            }
                
        }

        return view('project', ['title' => $selected['title'], 'project' => $selected]);
    }
}
