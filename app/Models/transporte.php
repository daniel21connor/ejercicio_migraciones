<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transporte extends Model
{
    public $table='transportes';
    use HasFactory;




    public function camiones(){
        return $this->hasMany('App\Models\camion');

    }
}
