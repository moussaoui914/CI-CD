<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    public function test_api_hello()
    {
        $response = $this->get('/api/hello');

        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 'Hello CI/CD'
                 ]);
    }
}
