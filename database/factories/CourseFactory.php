<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = app(Faker::class);
        // Use picsum.photos seeded images for consistent placeholder thumbnails
        $seed = $faker->unique()->numberBetween(1, 1000);
        $imageUrl = "https://picsum.photos/seed/{$seed}/800/450";

        return [
            'name' => $faker->sentence(3),
            'description' => $faker->paragraph(),
            'duration' => $faker->numberBetween(1, 52),
            'price' => $faker->randomFloat(2, 0, 500),
            'image' => $imageUrl,
        ];
    }
}
