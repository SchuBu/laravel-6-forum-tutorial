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
        $node = \App\Category::create([
            'name' => 'Main Forum 1',
            'children' => [
                [
                    'name' => 'Subforum 1.1',
                    'children' => [
                        [ 'name' => 'Sub sub Forum 1.1.1' ],
                        [ 'name' => 'Sub sub Forum 1.1.2' ],
                        [ 'name' => 'Sub sub Forum 1.1.3' ],
                    ],
                ],[
                    'name' => 'Subforum 1.2',
                    'children' => [
                        [ 'name' => 'Sub sub Forum 1.2.1' ],
                        [ 'name' => 'Sub sub Forum 1.2.2' ],
                        [ 'name' => 'Sub sub Forum 1.2.3' ],
                    ],
                ],[
                    'name' => 'Subforum 1.3',
                    'children' => [
                        [ 'name' => 'Sub sub Forum 1.3.1' ],
                        [ 'name' => 'Sub sub Forum 1.3.2' ],
                        [ 'name' => 'Sub sub Forum 1.3.3' ],
                    ],
                ],
            ],
        ]);

        $node = \App\Category::create([
            'name' => 'Main Forum 2',
            'children' => [
                [
                    'name' => 'Subforum 2.1',
                    'children' => [
                        [ 'name' => 'Sub sub Forum 2.1.1' ],
                        [ 'name' => 'Sub sub Forum 2.1.2' ],
                        [ 'name' => 'Sub sub Forum 2.1.3' ],
                    ],
                ],[
                    'name' => 'Subforum 2.2',
                    'children' => [
                        [ 'name' => 'Sub sub Forum 2.2.1' ],
                        [ 'name' => 'Sub sub Forum 2.2.2' ],
                        [ 'name' => 'Sub sub Forum 2.2.3' ],
                    ],
                ],[
                    'name' => 'Subforum 2.3',
                    'children' => [
                        [ 'name' => 'Sub sub Forum 2.3.1' ],
                        [ 'name' => 'Sub sub Forum 2.3.2' ],
                        [ 'name' => 'Sub sub Forum 2.3.3' ],
                    ],
                ],
            ],
        ]);
    }
}
