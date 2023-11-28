<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    //
    //     User::create([
    //       "name" => "triyono02",
    //       "email" => "triyono@log.com",
    //       "password" => "admin",
    //     ]);
    $user = new User();
    $user->name = "triyono";
    $user->email = "triyono@log.com";
    $user->password = "admin";

    $user->save();
  }
}
