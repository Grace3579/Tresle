<?php

use \Illuminate\Database\Eloquent\Factory $factory 

use App\Business;
use Faker\Generator as Faker;

$factory->define(App\Models\Business::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->price,
        'city' => $faker->city
    ];
});

/*
class TresleFactory extends Factory
{

    $factory->define(App\Business::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->price,
        'city' => $faker->city,
    ];
});
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Business::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $faker->name,
        'price' => $faker->price,
        'city' => $faker->city
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
*/
