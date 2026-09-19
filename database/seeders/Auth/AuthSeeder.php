<?php

namespace Database\Seeders\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('users')->insert([
        [
          'name'=>'Marco Hernandez',
          'email'=>'marcohern@gmail.com',
          'password'=> Hash::make('system')
        ]
      ]);
    }
}
