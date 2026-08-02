<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create or update test user (idempotent)
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
                'is_admin' => true,
            ]
        );

        // Seed categories and courses
        Category::factory()->count(5)->create();

        Course::factory()->count(12)->create()->each(function (Course $course) {
            $categoryIds = Category::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $course->categories()->attach($categoryIds);
        });
    }
}
