<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(1, 7), true),
            'author' => $this->faker->name,
            'image' => $this->faker->imageUrl(300, 400),
            'descr' => $this->faker->realText(400),
            'year' => rand(1500, 2021),
            'pages' => rand(130, 1000)
        ];
    }
}
