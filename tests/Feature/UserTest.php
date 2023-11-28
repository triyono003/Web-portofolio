<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\DB;
use Database\Seeders\UserSeeder;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
  /**
   * A basic feature test example.
   */
  public function testRegisterUser()
  {
    $this->seed([UserSeeder::class]);
        $user = User::find(1);
     self::assertNotNull($user);
  }
}
