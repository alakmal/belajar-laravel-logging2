<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoggingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testLog()
    {

        Log::info("Hello Info");
        Log::debug("Hello Debug");
        Log::error("Hello Error");
        Log::warning("Hello Warning");
        Log::critical("Hello Critical");
        Log::alert("Hello Alert");
        Log::emergency("Hello Emergency");

        $this->assertTrue(true); // Just to ensure the test passes
    }
}
