<?php

namespace Database\Factories;

use App\Models\Evaluation;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evaluation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'evaluation_score'=>$this->faker->name(),
            'working_area'=>$this->faker->name(),
            'users_id'=>1,
            'projects_id'=>1,
            'people_id'=>1,


        ];
    }
}
