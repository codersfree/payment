<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'image' => 'products/' . $this->faker->image('public/storage/products', 640, 480, null, false),  //products/image1
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19, 49, 99])
        ];
    }
}
