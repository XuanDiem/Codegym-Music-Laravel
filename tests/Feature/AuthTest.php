<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /** @test */
    public function api_url_register_exist()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /** @test */
    public function api_register_success()
    {
        $fake = Factory::create();

        $this->withoutExceptionHandling();

        $response = $this->json('post', '/api/register', [
            'name' => $name = $fake->name,
            'email' => $email = $fake->email,
            'password' => $password = Hash::make('password'),
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'name' => $name,
            'email' => $email,
        ]);
    }
}
