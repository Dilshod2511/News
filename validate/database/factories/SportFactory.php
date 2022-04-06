<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     p
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name('auto'),
            'description'=>$this->faker->text,
            'photo'=>$this->faker->image
        ];
    }
}
