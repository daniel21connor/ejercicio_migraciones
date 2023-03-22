<?php

namespace Database\Seeders;

use App\Models\camion;
use Illuminate\Database\Seeder;

class camionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camions=new camion();
        $camions-> id= '2323444';
        $camions-> placa_camion= 'samba';
        $camions-> marca='camiones';
        $camions->color='rojo';
        $camions->model='hola';
        $camions->capacidad_toneladas='12';
        $camions-> transportes_id='23423322';
        $camions -> save();
    }
}
