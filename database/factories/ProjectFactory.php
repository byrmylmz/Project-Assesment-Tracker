<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'project_name'=> $this->faker->name(),
            'project_summary'=> $this->faker->name(),
            'project_starting_date'=>now(),
            'project_finishing_date'=>now(),
            'users_id'=>'1',
           
        
        ];
    }
}
