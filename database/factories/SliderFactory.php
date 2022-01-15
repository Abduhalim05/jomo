<?php

namespace Database\Factories;

use App\Models\Slider ;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return[
        //     'image'=>rand(50,99),
        //     'title'=>$this->faker->title,
        //     'body'=>$this->faker->text(50)

        // ];
    }

}
