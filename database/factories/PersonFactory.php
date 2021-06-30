<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_name'=> $this->faker->name(),
            'person_surname'=> $this->faker->name(),
            'person_entitle'=> $this->faker->name(),
            'person_phone_number'=> $this->faker->name(),
            'person_status'=> $this->faker->name(),
            'person_nor'=> $this->faker->name(),
            'users_id'=> '1',
            
        ];
    }
}
