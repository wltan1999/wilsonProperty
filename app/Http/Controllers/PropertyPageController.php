<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SearchPropertyController;
use App\PropertyDB;
use App\PropertyJSON;

class PropertyPageController extends Controller
{
    //
    private $properties;
    public function __construct() {
        $properties = new PropertyDB();
        $this->properties =$properties;
    }

    public function searchView(Request $request){
        $requestArr = $request->all();
        $searchController = new SearchPropertyController($this->properties);
      //  $properties = $searchController->getProperty($requestArr);
      $requestArr = array(
        "postcode" => "3003",
      );
      $data['content']=($searchController->searchProperties($requestArr));
        return view('property.searchview',$data);
    }


}
