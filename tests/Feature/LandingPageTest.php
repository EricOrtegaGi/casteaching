<?php

namespace Tests\Feature;
use Tests\TestCase;

class LandingPageTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
