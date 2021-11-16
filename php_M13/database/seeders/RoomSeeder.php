<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;


class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room1= new Room();
        $room1->num_hab= '10';
        $room1->tipo_hab= 'sencilla';
        $room1->save();

        $room2= new Room();
        $room2->num_hab= '20';
        $room2->tipo_hab= 'sencilla';
        $room2->save();

        $room3= new Room();
        $room3->num_hab= '30';
        $room3->tipo_hab= 'sencilla';
        $room3->save();

        $room4= new Room();
        $room4->num_hab= '40';
        $room4->tipo_hab= 'sencilla';
        $room4->save();

        $room5= new Room();
        $room5->num_hab= '50';
        $room5->tipo_hab= 'sencilla';
        $room5->save();

        $room6= new Room();
        $room6->num_hab= '60';
        $room6->tipo_hab= 'sencilla';
        $room6->save();

        $room7= new Room();
        $room7->num_hab= '70';
        $room7->tipo_hab= 'sencilla';
        $room7->save();

        $room8= new Room();
        $room8->num_hab= '80';
        $room8->tipo_hab= 'sencilla';
        $room8->save();
    }
}
