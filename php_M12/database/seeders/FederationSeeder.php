<?php

namespace Database\Seeders;

use App\Models\Federation;
use Illuminate\Database\Seeder;


class FederationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fed= new Federation();
        $fed->ball_id= '1';
        $fed->nivel= 'Estatal';
        $fed->email= 'rfef@gmail.com';
        $fed->web= 'www.rfef.es';
        $fed->save();

        $fed2= new Federation();
        $fed2->ball_id= '2';
        $fed2->nivel= 'Catalana';
        $fed2->email= 'fcf@gmail.com';
        $fed2->web= 'www.fcf.es';
        $fed2->save();

    }
}