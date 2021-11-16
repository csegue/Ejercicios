<?php

namespace Database\Seeders;

use App\Models\Reserva;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $resv1= new Reserva();
    $resv1->cliente_id= '1';
    $resv1->pension_id= '1';
    $resv1->room_id= '1';
    $resv1->fecha_ent= '2021/11/01';
    $resv1->fecha_sal= '2021/11/07';
    $resv1->estado_hab= 'ocupada';
    $resv1->save();

    $resv2= new Reserva();
    $resv2->cliente_id= '2';
    $resv2->pension_id= '2';
    $resv2->room_id= '2';
    $resv2->fecha_ent= '2021/11/08';
    $resv2->fecha_sal= '2021/11/10';
    $resv2->estado_hab= 'ocupada';
    $resv2->save();

    $resv3= new Reserva();
    $resv3->cliente_id= '3';
    $resv3->pension_id= '3';
    $resv3->room_id= '3';
    $resv3->fecha_ent= '2021/11/05';
    $resv3->fecha_sal= '2021/11/13';
    $resv3->estado_hab= 'ocupada';
    $resv3->save();

    $resv4= new Reserva();
    $resv4->cliente_id= '4';
    $resv4->pension_id= '4';
    $resv4->room_id= '4';
    $resv4->fecha_ent= '20211101';
    $resv4->fecha_sal= '20211101';
    $resv4->estado_hab= 'libre';
    $resv4->save();

    $resv5= new Reserva();
    $resv5->cliente_id= '5';   
    $resv5->pension_id= '1';
    $resv5->room_id= '5';
    $resv5->fecha_ent= '20211101';
    $resv5->fecha_sal= '20211101';
    $resv5->estado_hab= 'libre';
    $resv5->save();

    $resv6= new Reserva();
    $resv6->cliente_id= '6';
    $resv6->pension_id= '2';
    $resv6->room_id= '6';
    $resv6->fecha_ent= '20211101';
    $resv6->fecha_sal= '20211101';
    $resv6->estado_hab= 'libre';
    $resv6->save();

    $resv7= new Reserva();
    $resv7->cliente_id= '7';
    $resv7->pension_id= '3';
    $resv7->room_id= '7';
    $resv7->fecha_ent= '20211101';
    $resv7->fecha_sal= '20211101';
    $resv7->estado_hab= 'libre';
    $resv7->save();

    $resv8= new Reserva();
    $resv8->cliente_id= '8';
    $resv8->pension_id= '4';   
    $resv8->room_id= '8';
    $resv8->fecha_ent= '20211101';
    $resv8->fecha_sal= '20211101';
    $resv8->estado_hab= 'libre';
    $resv8->save();

    }
}
