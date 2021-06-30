<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Person::factory(5)->create();
    }
}
