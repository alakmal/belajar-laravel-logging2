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

    public function testContext()
    {

        Log::withContext([
            "user" => "John Doe",
            "action" => "testContext",
        ]);
        Log::info("Hello Context");

        $this->assertTrue(true); // Just to ensure the test passes
    }
}
