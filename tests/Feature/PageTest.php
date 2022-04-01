<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_welcome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_aboutus_view()
    {
        $response = $this->get('/aboutus');

        $response->assertStatus(200);
    }

}
