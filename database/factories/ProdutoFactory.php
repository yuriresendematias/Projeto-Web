<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'quantidade' => $this->faker->numberBetween(1, 100),
            'validade' => $this->faker->date,
            'precoCompra' => $this->faker->randomFloat(2, 0, 200),
            'precoVenda' => $this->faker->randomFloat(2, 0, 200),
        ];
    }
}
