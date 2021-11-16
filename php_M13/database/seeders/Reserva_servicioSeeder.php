<?php

namespace Database\Seeders;

use App\Models\Reserva_servicio;
use Illuminate\Database\Seeder;



class Reserva_servicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rs1= new Reserva_servicio();
        $rs1->reserva_id= '1';
        $rs1->servicio_id= '1';
        $rs1->save();

        $rs2= new Reserva_servicio();
        $rs2->reserva_id= '1';
        $rs2->servicio_id= '2';
        $rs2->save();

        $rs3= new Reserva_servicio();
        $rs3->reserva_id= '2';
        $rs3->servicio_id= '3';
        $rs3->save();

        $rs4= new Reserva_servicio();
        $rs4->reserva_id= '2';
        $rs4->servicio_id= '4';
        $rs4->save();

        $rs5= new Reserva_servicio();
        $rs5->reserva_id= '3';
        $rs5->servicio_id= '1';
        $rs5->save();

        $rs6= new Reserva_servicio();
        $rs6->reserva_id= '3';
        $rs6->servicio_id= '2';
        $rs6->save();

        $rs7= new Reserva_servicio();
        $rs7->reserva_id= '4';
        $rs7->servicio_id= '3';
        $rs7->save();

        $rs8= new Reserva_servicio();
        $rs8->reserva_id= '4';
        $rs8->servicio_id= '4';
        $rs8->save();

        $rs9= new Reserva_servicio();
        $rs9->reserva_id= '5';
        $rs9->servicio_id= '1';
        $rs9->save();

        $rs10= new Reserva_servicio();
        $rs10->reserva_id= '5';
        $rs10->servicio_id= '2';
        $rs10->save();

        $rs11= new Reserva_servicio();
        $rs11->reserva_id= '6';
        $rs11->servicio_id= '3';
        $rs11->save();

        $rs12= new Reserva_servicio();
        $rs12->reserva_id= '6';
        $rs12->servicio_id= '4';
        $rs12->save();

        $rs13= new Reserva_servicio();
        $rs13->reserva_id= '7';
        $rs13->servicio_id= '1';
        $rs13->save();

        $rs14= new Reserva_servicio();
        $rs14->reserva_id= '7';
        $rs14->servicio_id= '2';
        $rs14->save();

        $rs15= new Reserva_servicio();
        $rs15->reserva_id= '8';
        $rs15->servicio_id= '3';
        $rs15->save();

        $rs16= new Reserva_servicio();
        $rs16->reserva_id= '8';
        $rs16->servicio_id= '4';
        $rs16->save();

    }
}
