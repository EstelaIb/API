<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portafolio>
 */
class PortafolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(4),
            'category' => $this->faker->word(),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'url' => $this->faker->domainName()
            
        ];
    }
}
