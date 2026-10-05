<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    //
    DB::table('users')->insert([
      ['name' => 'Test User', 'email' => 'test@example.com', 'password' => Hash::make('password'), 'role' => 'admin'],
      ['name' => 'Marco Hernandez', 'email' => 'marcohern@gmail.com', 'password' => Hash::make('password'), 'role' => 'admin'],
      ['name' => 'Read Only', 'email' => 'readonly@mail.com', 'password' => Hash::make('password'), 'role' => 'readonly'],
      ['name' => 'Editor', 'email' => 'editor@mail.com', 'password' => Hash::make('password'), 'role' => 'editor']
    ]);
  }
}
