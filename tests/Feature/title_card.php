<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class title_card extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view_title_card()
    {
        $response = $this->get('/title_card');

        $response->assertStatus(200);
    }
}
