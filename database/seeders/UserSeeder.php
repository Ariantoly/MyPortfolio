<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Ariantoly',
            'email' => 'ariantoly.lee@gmail.com',
            'password' => '$2y$10$pXRzK.AzBR7qqRqEhlJUKOuIknKppB2l9OfqZqGZe/GGjsHVoX1z.'
        ]);
    }
}
