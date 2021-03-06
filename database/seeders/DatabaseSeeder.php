<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "nom" => "mouheb",
                "prenom" => "mouheb",
                "email" => "mouhebabderrahim@gmail.com",
                "numtel" => "53966974",
                "role" => "client",
                "password" => Hash::make("adminadmin"),
            ],
            [
                "nom" => "admin",
                "prenom" => "admin",
                "email" => "admin@gmail.com",
                "numtel" => "12345679",
                "role" => "admin",
                "password" => Hash::make("adminadmin"),
            ]
        ]);
    }
}
