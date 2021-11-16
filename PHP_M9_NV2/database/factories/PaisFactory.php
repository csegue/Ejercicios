<?php

namespace Database\Factories;

use App\Models\Pais;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pais::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pais'            => $this->faker->randomElement(['España','Francia','Bélgica','Italia']),            //sentence(),
            'departamento'    => $this->faker->randomElement(['25','26','27']),                         //paragraph(),
            'ciudad'          => $this->faker->randomElement(['Barcelona','Teruel'])

        ];
    }
}
