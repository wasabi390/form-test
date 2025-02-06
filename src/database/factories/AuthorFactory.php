<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
    protected $model = Author::class;


    /**
   * Define the model's default state.
   *
   * @return array
   */
    public function definition()
    {
    return [
        'first_name' => $this->faker->first_name,
        'last_name' => $this->faker->last_name,
        'gender' => $this->faker->randomElement([1, 2, 3]),
        'email' => $this->faker->email,
        'tell' => $this->faker->phoneNumber,
        'address' => $this->faker->address,
        'building' => $this->faker->building,
        'detail' => $this->faker->text(120),
    ];
    }
}

