<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $imArticles = [
            'Human and Computer Interaction',
            'User Experience',
            'User Experience for Digital Immersive Technology'
        ];

        foreach ($imArticles as $title) {
            Article::create([
                'title' => $title,
                'slug' => \Str::slug($title),
                'content' => $faker->paragraphs(10, true),
                'excerpt' => $faker->paragraph(3),
                'image' => $faker->imageUrl(800, 400, 'technology'),
                'category_id' => 1, 
                'writer_id' => rand(1, 3),
                'views' => rand(100, 1000)
            ]);
        }

        $seArticles = [
            'Pattern Software Design',
            'Agile Software Development',
            'Code Reengineering'
        ];

        foreach ($seArticles as $title) {
            Article::create([
                'title' => $title,
                'slug' => \Str::slug($title),
                'content' => $faker->paragraphs(10, true),
                'excerpt' => $faker->paragraph(3),
                'image' => $faker->imageUrl(800, 400, 'technology'),
                'category_id' => 2, 
                'writer_id' => rand(1, 3),
                'views' => rand(100, 1000)
            ]);
        }
    }
}
