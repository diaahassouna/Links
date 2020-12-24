<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factories\Factory $factory */

use App\Models\Link;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class LinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Link::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => substr($this->faker->sentence(2), 0, -1),
            'url' => $this->faker->url,
            'description' => $this->faker->paragraph,
        ];
    }
}

// Old Version syntax

/*$factory->define(Link::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'url' => $faker->url,
        'description' => $faker->paragraph,
    ];
});
*/