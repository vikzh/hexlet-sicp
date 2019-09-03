<?php

namespace Tests\Feature\Http\Controllers;

use App\User;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function testShow()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user);

        $response = $this->get(route('users.show', $user->name));

        $response->assertStatus(200)
            ->assertSee($user->name);
    }
}
