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

    //title_cardにアクセスした時に、称号の内容が表示されるか
    public function test_view_see_title_card()
    {
        $titleCard = factory('App\Title_Card')->create();

        $response = $this->get('/title_car');

        $response->assertSee($titleCard->body);

    }

}
