<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function user_route()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function admin_route()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function user_route_api()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function admin_route_api()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function controller_user()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/test-user');

        $response->assertStatus(200);
    }

    /** @test */
    public function controller_admin()
    {
        $response = $this->get('/test-admin');

        $response->assertStatus(200);
    }
}
