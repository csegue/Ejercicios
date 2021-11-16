<?php

namespace Database\Seeders;

use App\Models\Ball;
use Illuminate\Database\Seeder;

class BallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ball= new Ball();
        $ball->marca= 'Adidas';
        $ball->save();

        $ball2= new Ball();
        $ball2->marca= 'Nike';
        $ball2->save();
    }
}
