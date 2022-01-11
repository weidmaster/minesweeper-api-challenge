<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BoardApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_board_can_be_shown()
    {
        $response = $this->get('/api/board');

        $response->assertStatus(200)
        ->assertJsonStructure([
            [],
            []
        ]);
    }
}
