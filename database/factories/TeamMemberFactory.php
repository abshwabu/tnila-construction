<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $positions = ['Architect', 'Designer', 'Developer', 'Project Manager', 'Engineer', 'Construction Manager'];
        
        return [
            'name' => fake()->name(),
            'position' => fake()->randomElement($positions),
            'bio' => fake()->paragraph(3),
            'image' => 'img/Worker-' . fake()->numberBetween(1, 4) . '.jpg', // Using existing images
            'facebook_url' => fake()->boolean(80) ? 'https://facebook.com/' . fake()->userName() : null,
            'twitter_url' => fake()->boolean(70) ? 'https://twitter.com/' . fake()->userName() : null,
            'instagram_url' => fake()->boolean(60) ? 'https://instagram.com/' . fake()->userName() : null,
            'linkedin_url' => fake()->boolean(90) ? 'https://linkedin.com/in/' . fake()->userName() : null,
            'email' => fake()->boolean(50) ? fake()->email() : null,
            'phone' => fake()->boolean(30) ? fake()->phoneNumber() : null,
            'is_active' => true,
            'display_order' => fake()->numberBetween(1, 10),
        ];
    }
} 