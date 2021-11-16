<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tools')->insert([
            ['name' => "HTML", 'type' => "Language", 'path' => "/icons/html.png"],
            ['name' => "CSS", 'type' => "Language", 'path' => "/icons/css.png"],
            ['name' => "JS", 'type' => "Language", 'path' => "/icons/js.png"],
            ['name' => "PHP", 'type' => "Language", 'path' => "/icons/php.png"],
            ['name' => "Java", 'type' => "Language", 'path' => "/icons/java.png"],
            ['name' => "C#", 'type' => "Language", 'path' => "/icons/csharp.png"],
            ['name' => "Figma", 'type' => "Language", 'path' => "/icons/figma.png"],
            ['name' => "Laravel", 'type' => "Other", 'path' => "/icons/laravel.png"],
            ['name' => "MERN", 'type' => "Other", 'path' => "/icons/mern.png"],
            ['name' => "ASP.NET", 'type' => "Other", 'path' => "/icons/aspnet.png"],
            ['name' => "Bootstrap", 'type' => "Other", 'path' => "/icons/bootstrap.png"],
            ['name' => "Android", 'type' => "Other", 'path' => "/icons/android.png"],
        ]);
    }
}
