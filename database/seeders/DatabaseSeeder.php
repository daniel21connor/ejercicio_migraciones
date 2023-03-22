<?php

namespace Database\Seeders;
use App\Models\transporte;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        $this->call(camionseeder::class);
         $transportes=new transporte();
         $transportes-> id= '234222';
         $transportes-> nombre= 'samba';
         $transportes-> razon_social='camiones';
         $transportes -> save();
    }
}
