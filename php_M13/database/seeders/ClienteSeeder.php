<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cli1= new Cliente();
        $cli1->nombre= 'Alberto Sánchez';
        $cli1->email= 'alberto@gmail.com';
        $cli1->save();
    
        $cli2= new Cliente();
        $cli2->nombre= 'María Dueñas';
        $cli2->email= 'maria@gmail.com';
        $cli2->save();

        $cli3= new Cliente();
        $cli3->nombre= 'Fernando Postigo';
        $cli3->email= 'fernando@gmail.com';
        $cli3->save();

        $cli4= new Cliente();
        $cli4->nombre= 'Carlos Zafón';
        $cli4->email= 'zafon@gmail.com';
        $cli4->save();
    
        $cli5= new Cliente();
        $cli5->nombre= 'Oscar Wilde';
        $cli5->email= 'oscar@gmail.com';
        $cli5->save();

        $cli6= new Cliente();
        $cli6->nombre= 'Santiago Posteguillo';
        $cli6->email= 'santi@gmail.com';
        $cli6->save();

        $cli7= new Cliente();
        $cli7->nombre= 'Ildefonso Falcones';
        $cli7->email= 'ildefonso@gmail.com';
        $cli7->save();
    
        $cli8= new Cliente();
        $cli8->nombre= 'Borja Semper';
        $cli8->email= 'borja@gmail.com';
        $cli8->save();

    }
}
