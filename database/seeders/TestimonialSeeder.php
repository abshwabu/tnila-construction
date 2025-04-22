<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create predefined testimonials using existing images
        Testimonial::create([
            'name' => 'Kyle Frederick',
            'position' => 'Director',
            'content' => 'Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!',
            'image' => 'img/testi-1.jpg',
            'rating' => 5,
            'display_order' => 1,
        ]);

        Testimonial::create([
            'name' => 'Valentin Lacoste',
            'position' => 'CEO',
            'content' => 'We are extremely satisfied with the quality of work and attention to detail. The team was professional, responsive, and delivered our project on time and within budget.',
            'image' => 'img/testi-2.jpg',
            'rating' => 5,
            'display_order' => 2,
        ]);

        Testimonial::create([
            'name' => 'José Carpio',
            'position' => 'Architect',
            'content' => 'Working with this construction team was a pleasure. They understood our vision and brought it to life with exceptional craftsmanship and dedication to quality.',
            'image' => 'img/testi-3.jpg',
            'rating' => 5,
            'display_order' => 3,
        ]);

        // Add some additional random testimonials
        Testimonial::factory()->count(3)->create();
    }
} 