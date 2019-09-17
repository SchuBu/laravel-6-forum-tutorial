<?php

use Illuminate\Database\Seeder;

class ThreadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Thread::class, 1000)->create();
    }
}
