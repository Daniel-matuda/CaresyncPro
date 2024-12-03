<?php

namespace Tests\app\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_users()
    {
        User::factory()->count(3)->create();

        $response = $this->get(route('users.index'));

        $response->assertStatus(200);
    }

    public function test_create_page_is_accessible()
    {
        $response = $this->get(route('users.create'));

        $response->assertStatus(200);
    }

    public function test_store_creates_a_new_user()
    {
        $data = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ];

        $response = $this->post(route('users.store'), $data);

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);
    }

    public function test_edit_page_shows_correct_user()
    {
        $user = User::factory()->create();

        $response = $this->get(route('users.edit', $user));

        $response->assertStatus(200);
    }

    public function test_update_modifies_existing_user()
    {
        $user = User::factory()->create();
        $updatedData = ['name' => 'Updated Name'];

        $response = $this->put(route('users.update', $user), $updatedData);

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('users', ['name' => 'Updated Name']);
    }

    public function test_destroy_deletes_a_user()
    {
        $user = User::factory()->create();

        $response = $this->delete(route('users.destroy', $user));

        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}