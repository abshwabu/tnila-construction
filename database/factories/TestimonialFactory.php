<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $positions = ['CEO', 'Director', 'Project Manager', 'Client', 'Architect', 'Contractor'];
        
        return [
            'name' => fake()->name(),
            'position' => fake()->randomElement($positions),
            'content' => fake()->paragraph(3),
            'image' => 'img/testi-' . fake()->numberBetween(1, 3) . '.jpg', // Using existing images
            'rating' => fake()->numberBetween(4, 5),
            'is_active' => true,
            'display_order' => fake()->numberBetween(1, 10),
        ];
    }
} 