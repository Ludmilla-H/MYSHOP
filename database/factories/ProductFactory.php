<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

        
            //random = intervalle de valeur aléatoire
            'category_id'=> mt_rand(1 , 9) ,
            'user_id'=> 1 ,
            'name' => fake()->name(),
            'description' => fake()->text(),
            'price' => mt_rand(1 , 1000),

            //
        ];
    }
}
