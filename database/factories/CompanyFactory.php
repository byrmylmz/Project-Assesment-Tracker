<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name'=>$this->faker->name(),
            'company_owner'=>$this->faker->name(),
            'company_email'=>'bayram@bayram.com',
            'company_phone'=>'05386198724',
            'company_status'=>'Aktif',
            'users_id'=>1,


        ];
    }
}

