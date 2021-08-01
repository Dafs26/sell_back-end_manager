<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\This;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'date' => $this->faker->date(),
            'user_id' => $this->faker->numberBetween(1,10),
            'seller_id'=> $this->faker->numberBetween(1,10),
            'type' => $this->faker->word()
        ];
    }
}
