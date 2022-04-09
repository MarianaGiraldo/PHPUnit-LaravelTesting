<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** Test creation of users
     * @return void
     */
    public function test_user()
    {
        User::factory()->create([
            'email' => 'mgiraldo@mail.com'
        ]);
        $this->assertDatabaseHas('users', [
            'email' => 'mgiraldo@mail.com']);

        $this->assertDatabaseMissing('users',[
            'email'=> 'notexisting@mail.com']);
    }
}

