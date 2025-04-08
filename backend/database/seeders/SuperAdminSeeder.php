<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name"=> "Grazielle Santana",
            "email"=> "sntgrazi22@gmail.com",
            "email_verified_at"=> now(),
            "password"=> Hash::make('Jinx2004@@'),
            'role'=> 'ROLE_ROOT_ADMIN',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
