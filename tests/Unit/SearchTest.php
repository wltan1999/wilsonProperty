<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class SearchTest extends TestCase
{
    protected $baseUrl = 'http://wilsonproperty.test';


    public function setUp():void {
      parent::setUp();
    }

    public function testRouteStatus()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }



}
