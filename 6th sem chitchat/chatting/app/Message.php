<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function customer(){
   	$this->belongsTo('App\Customer');
   }
}
