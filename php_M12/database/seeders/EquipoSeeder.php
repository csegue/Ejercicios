<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipo= new Equipo();
        $equipo->nombre= 'Barcelona';
        $equipo->save();

        $equipo2= new Equipo();
        $equipo2->nombre= 'Atletico de Madrid';
        $equipo2->save();

        $equipo3= new Equipo();
        $equipo3->nombre= 'Valencia';
        $equipo3->save();

        $equipo4= new Equipo();
        $equipo4->nombre= 'Real Madrid';
        $equipo4->save();

        $equipo5= new Equipo();
        $equipo5->nombre= 'Atletic de Bilbao';
        $equipo5->save();

        $equipo6= new Equipo();
        $equipo6->nombre= 'Español';
        $equipo6->save();

        $equipo7= new Equipo();
        $equipo7->nombre= 'Tarrasa';
        $equipo7->save();

        $equipo8= new Equipo();
        $equipo8->nombre= 'Berga';
        $equipo8->save();
    
        $equipo9= new Equipo();
        $equipo9->nombre= 'Montgat';
        $equipo9->save();
    
    }


}
