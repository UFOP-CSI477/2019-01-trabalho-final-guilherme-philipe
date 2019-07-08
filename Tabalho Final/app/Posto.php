<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
  protected $fillable = [ 'nome', 'distancia','pgasolina','petanol','pdiesel'];
}
