<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $node = \App\Category::create([
            'name' => 'Main Forum 1',
            'description' => $faker->text(400),
            'children' => [
                [
                    'name' => 'Subforum 1.1',
                    'description' => $faker->text(400),
                    'children' => [
                        ['name' => 'Sub sub Forum 1.1.1', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 1.1.2', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 1.1.3', 'description' => $faker->text(400),],
                    ],
                ], [
                    'name' => 'Subforum 1.2',
                    'description' => $faker->text(400),
                    'children' => [
                        ['name' => 'Sub sub Forum 1.2.1', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 1.2.2', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 1.2.3', 'description' => $faker->text(400),],
                    ],
                ], [
                    'name' => 'Subforum 1.3',
                    'description' => $faker->text(400),
                    'children' => [
                        ['name' => 'Sub sub Forum 1.3.1', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 1.3.2', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 1.3.3', 'description' => $faker->text(400),],
                    ],
                ],
            ],
        ]);

        $node = \App\Category::create([
            'name' => 'Main Forum 2',
            'description' => $faker->text(400),
            'children' => [
                [
                    'name' => 'Subforum 2.1',
                    'description' => $faker->text(400),
                    'children' => [
                        ['name' => 'Sub sub Forum 2.1.1', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 2.1.2', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 2.1.3', 'description' => $faker->text(400),],
                    ],
                ], [
                    'name' => 'Subforum 2.2',
                    'description' => $faker->text(400),
                    'children' => [
                        ['name' => 'Sub sub Forum 2.2.1', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 2.2.2', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 2.2.3', 'description' => $faker->text(400),],
                    ],
                ], [
                    'name' => 'Subforum 2.3',
                    'description' => $faker->text(400),
                    'children' => [
                        ['name' => 'Sub sub Forum 2.3.1', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 2.3.2', 'description' => $faker->text(400),],
                        ['name' => 'Sub sub Forum 2.3.3', 'description' => $faker->text(400),],
                    ],
                ],
            ],
        ]);
    }
}
