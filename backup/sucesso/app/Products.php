<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

  protected $fillable = [
      'id_category', 'id_brand','name','description','stock',
      'price','price_from','rating','featured','sale','bestseller',
      'new_product','options',
  ];

  public function category(){
    return $this->belongsTo('App\Categories', 'id');
  }


  public function brand(){
      return $this-> belongsTo('App\Brands',  'id_brand');
  }


}
