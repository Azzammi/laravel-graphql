<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categoryIDs = Category::all()->pluck('id')->toArray();
        return [
            'title'         => $this->faker->title(),
            'desciption'    => $this->faker->text(),
            'reward'        => $this->faker->numberBetween(1, 100),
            'category_id'   => $this->faker->randomElement($categoryIDs)
        ];
    }
}
