<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::whereNull('image')->get()->each(function (Course $c) {
            $c->image = 'https://picsum.photos/seed/' . rand(1001, 9999) . '/800/450';
            $c->save();
        });
    }
}
