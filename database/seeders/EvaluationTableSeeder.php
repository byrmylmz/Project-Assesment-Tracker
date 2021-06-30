<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Evaluation::factory(25000)->create();
       



    }
}
