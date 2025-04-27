<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create predefined team members using existing images
        TeamMember::create([
            'name' => 'Jhon Castellon',
            'position' => 'Architect',
            'bio' => 'John is a licensed architect with over 15 years of experience in residential and commercial projects. He specializes in sustainable design and urban planning.',
            'image' => 'img/Worker-1.jpg',
            'facebook_url' => 'https://facebook.com/jhoncastellon',
            'twitter_url' => 'https://twitter.com/jhoncastellon',
            'instagram_url' => 'https://instagram.com/jhoncastellon',
            'linkedin_url' => 'https://linkedin.com/in/jhoncastellon',
            'display_order' => 1,
        ]);

        TeamMember::create([
            'name' => 'José Carpio',
            'position' => 'Designer',
            'bio' => 'José brings creativity and innovation to every project. With a background in both interior and exterior design, he creates spaces that are both functional and beautiful.',
            'image' => 'img/Worker-2.jpg',
            'facebook_url' => 'https://facebook.com/josecarpio',
            'twitter_url' => 'https://twitter.com/josecarpio',
            'instagram_url' => 'https://instagram.com/josecarpio',
            'linkedin_url' => 'https://linkedin.com/in/josecarpio',
            'display_order' => 2,
        ]);

        TeamMember::create([
            'name' => 'Valentin Lacoste',
            'position' => 'Developer',
            'bio' => 'Valentin handles the technical aspects of our projects, ensuring that designs are structurally sound and meet all building codes and regulations.',
            'image' => 'img/Worker-3.jpg',
            'facebook_url' => 'https://facebook.com/valentinlacoste',
            'twitter_url' => 'https://twitter.com/valentinlacoste',
            'instagram_url' => 'https://instagram.com/valentinlacoste',
            'linkedin_url' => 'https://linkedin.com/in/valentinlacoste',
            'display_order' => 3,
        ]);

        TeamMember::create([
            'name' => 'Kyle Frederick',
            'position' => 'Marketer',
            'bio' => 'Kyle leads our marketing efforts, showcasing our projects and connecting with clients. He ensures that our work reaches the right audience.',
            'image' => 'img/Worker-4.jpg',
            'facebook_url' => 'https://facebook.com/kylefrederick',
            'twitter_url' => 'https://twitter.com/kylefrederick',
            'instagram_url' => 'https://instagram.com/kylefrederick',
            'linkedin_url' => 'https://linkedin.com/in/kylefrederick',
            'display_order' => 4,
        ]);

        // Add some additional random team members
        TeamMember::factory()->count(2)->create();
    }
} 