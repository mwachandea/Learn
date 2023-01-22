<?php

namespace Database\Factories;

use App\Models\Book;
use Faker\Generator as faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var str
     * ing
     */
    protected $model =  Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3, true),
            'description' => $this->faker->sentence(6, true),
            'price' => $this->faker->numberBetween(100, 800),
            'author_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
