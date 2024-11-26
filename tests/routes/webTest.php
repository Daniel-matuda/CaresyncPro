<?php

namespace Tests\routes;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_route_is_accessible()
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);
    }

    public function test_users_routes_are_accessible()
    {
        $response = $this->get(route('users.index'));
        $response->assertStatus(200);

        $response = $this->get(route('users.create'));
        $response->assertStatus(200);
    }

    public function test_users_store_accepts_post()
    {
        $userData = User::factory()->make()->toArray();

        $response = $this->post(route('users.store'), $userData);

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('users', ['email' => $userData['email']]);
    }

    public function test_users_edit_route_is_accessible()
    {
        $user = User::factory()->create();

        $response = $this->get(route('users.edit', $user->id));
        $response->assertStatus(200);
    }

    public function test_users_update_accepts_put()
    {
        $user = User::factory()->create();
        $newData = [
            'firstName' => 'Updated',
            'lastName' => 'Name',
            'email' => 'updatedemail@example.com',
        ];

        $response = $this->put(route('users.update', $user->id), $newData);

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('users', ['email' => 'updatedemail@example.com']);
    }

    public function test_users_destroy_accepts_delete()
    {
        $user = User::factory()->create();

        $response = $this->delete(route('users.destroy', $user->id));

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}