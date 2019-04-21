<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomInterfaces\propertyInterface;

class SearchPropertyController extends Controller
{
      //private $propertyController;
      private $properties;
      public function __construct(propertyInterface $properties) {
        //  $properties = new PropertyDB();
        //  $this->propertyController = new propertyController($properties);
          $this->properties = $properties;
      }

      public function searchProperties($request){
          return $this->properties->getProperty($request);
      }
}
