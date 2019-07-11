<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUsersPage()
    {
        $user = factory('App\User')->create();

        $response = $this->actingAs($user,'api')->get('/api/users');

        $response->assertStatus(200);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([[
                "id",
                "name",
                "email",
                "email_verified_at",
                "created_at",
                "updated_at"
            ]]);
    }


}
