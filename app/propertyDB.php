<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CustomInterfaces\propertyInterface;

class Propertydb extends Model implements propertyInterface {

  //

  protected $fillable = [
      'name','unit','street','suburb','state','country','sell_price','rent_price'
  ];

  public function getAllProperties(){
    return $this::all();
  }

  public function getProperty($requests){
    $query = array();
    foreach ($requests as $key =>$request){
      $query[$key] = $request;
    }//
    $properties = $this::where($query)->get()->all();
    //  dd($properties);
    return $properties;
  }

}
