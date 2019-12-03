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

    /** @test */
    public function controller_user()
    {
        $response = $this->get('/user');

        $response->assertStatus(200);
    }

}
