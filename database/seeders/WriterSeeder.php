<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $writers = [
            ['name' => 'Raka Putra Wicaksono', 'specialization' => 'Spesialis Interactive Multimedia'],
            ['name' => 'Bia Mecca Annisa', 'specialization' => 'Spesialis Software Engineering'],
            ['name' => 'Abi Firmansyah', 'specialization' => 'Spesialis Interactive Multimedia'],
        ];

        foreach ($writers as $writer) {
            Writer::create([
                'name' => $writer['name'],
                'specialization' => $writer['specialization'],
                'image' => $faker->imageUrl(200, 200, 'people')
            ]);
        }
    }
}
