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
            'invoice_id' => $this->faker->numberBetween(1,10),
            'name' => $this->faker->word(),
            'quantity' => $this->faker->numberBetween(1,10),
            'price' => $this->faker->numberBetween(10000,1000000)
        ];
    }
}
