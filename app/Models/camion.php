<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camion extends Model
{
   public function trasnport(){
       return $this->belongsTo('App\Models\transporte');



   }
}
