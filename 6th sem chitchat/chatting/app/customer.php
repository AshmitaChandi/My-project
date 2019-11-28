<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
   public function message(){
   	$this->hasMany('App\Message');
   }
}
