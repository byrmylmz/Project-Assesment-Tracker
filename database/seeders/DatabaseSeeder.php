<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        /* by
         * Callling the multi database seeder
         * https://laravel.com/docs/8.x/seeding#calling-additional-seeders
         */
        
        $this->call([
           // PersonTableSeeder::class,
           // ProjectTableSeeder::class,
            EvaluationTableSeeder::class,
        ]);
    }
}
