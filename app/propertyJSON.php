<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CustomInterfaces\propertyInterface;
use Illuminate\Support\Facades\File;

class propertyJSON extends Model implements propertyInterface {

  //
  protected $all_properties = array();

  public function __construct() {
      $filename = base_path()."/public/assets/properties.json";
      $this->all_properties = json_decode(File::get($filename),true);
  }

  protected $fillable = [

  ];

  public function getAllProperties(){
    return $this->all_properties;
  }

  public function getProperty($requests){

    if ($requests==null){
      $properties = $this->getAllProperties();
    }else{
      $query = array();
      foreach ($requests as $key =>$request){
        $query[$key] = $request;
      }
        $properties = array_filter($this->all_properties, function ($item) use ($query) {
          return array_intersect_assoc($query, $item) === $query;
        });
    }
    return $properties;
  }


}
