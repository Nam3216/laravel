<?php

namespace Database\Factories;

use App\Models\Cloth;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cloth>
 */
class ClothFactory extends Factory
{
    protected $model =Cloth::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=>fake()->title(),
            "brand"=>fake()->title(),
            "description"=>fake()->paragraph(),
            "img"=>fake()->sentence(),
            "price"=>fake()->randomDigit(),
            "quantity"=>fake()->randomDigit(),
            "category"=>fake()->randomElement(["remeras", "pantalones", "camperas"]),
          
        
        ];
    }
}
