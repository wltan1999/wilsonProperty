<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SearchPropertyController;
use App\PropertyDB;
use App\PropertyJSON;

class PropertyPageController extends Controller
{

    public function searchView(Request $request){

      $data['content']="Content";
        return view('property.searchview',$data);
    }


}
