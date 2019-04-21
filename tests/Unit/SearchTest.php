<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\SearchPropertyController;
use App\PropertyJSON;
use App\PropertyDB;

class SearchTest extends TestCase
{
    protected $baseUrl = 'http://wilsonproperty.test';
    protected $properties;
    protected $searchController;

    public function setUp():void {
      parent::setUp();
      $this->properties = new PropertyDB();
      //$this->properties = new PropertyDB();
      $this->all_properties = $this->properties->getAllProperties();
      $this->searchController = new SearchPropertyController($this->properties);
    }

    public function testRouteStatus()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


   public function testgetProperty()
   {
     $request = array(
       "id" => 1,
     );
      $result =$this->searchController->searchProperties($request);
    //  dd($this->all_properties);
       $this->assertEquals($this->all_properties[0]['street'],$result[0]['street']);
   }

}
