<?php

namespace Database\Seeders;

use App\Models\Liga;
use Illuminate\Database\Seeder;


class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fed1= new Liga();
        $fed1->federation_id= '1';
        $fed1->jornada= '1';
        $fed1->local= 'Barcelona';
        $fed1->Visitante= 'Atletico de Madrid';
        $fed1->res_local= '2';
        $fed1->res_visitante= '1';
        $fed1->save();

        $fed2= new Liga();
        $fed2->federation_id= '1';
        $fed2->jornada= '1';
        $fed2->local= 'Valencia';
        $fed2->Visitante= 'Real Madrid';
        $fed2->res_local= '4';
        $fed2->res_visitante= '1';
        $fed2->save();

        $fed3= new Liga();
        $fed3->federation_id= '1';
        $fed3->jornada= '1';
        $fed3->local= 'Atleticc de Bilbao';
        $fed3->Visitante= 'Español';
        $fed3->res_local= '2';
        $fed3->res_visitante= '4';
        $fed3->save();

        $fed4= new Liga();
        $fed4->federation_id= '1';
        $fed4->jornada= '2';
        $fed4->local= 'Valencia';
        $fed4->Visitante= 'Barcelona';
        $fed4->res_local= '2';
        $fed4->res_visitante= '1';
        $fed4->save();

        $fed5= new Liga();
        $fed5->federation_id= '1';
        $fed5->jornada= '2';
        $fed5->local= 'Atletico de Madrid';
        $fed5->Visitante= 'Atletic de Bilbao';
        $fed5->res_local= '0';
        $fed5->res_visitante= '1';
        $fed5->save();

        $fed6= new Liga();
        $fed6->federation_id= '1';
        $fed6->jornada= '2';
        $fed6->local= 'Real Madrid';
        $fed6->Visitante= 'Español';
        $fed6->res_local= '0';
        $fed6->res_visitante= '1';
        $fed6->save();
    }
}
