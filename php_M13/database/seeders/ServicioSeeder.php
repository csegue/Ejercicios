<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;


class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $serv1= new Servicio();
        $serv1->tipo_serv= 'lavandería';
        $serv1->save();

        $serv2= new Servicio();
        $serv2->tipo_serv= 'Spa';
        $serv2->save();

        $serv3= new Servicio();
        $serv3->tipo_serv= 'Alquiler de coche';
        $serv3->save();

        $serv4= new Servicio();
        $serv4->tipo_serv= 'peluquería';
        $serv4->save();

    }
}
