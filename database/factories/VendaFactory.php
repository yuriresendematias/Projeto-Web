<?php

namespace Database\Factories;

use App\Models\Venda;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    /* $table->dateTime('data');
            $table->decimal('total', 10, 2);
            $table->boolean('fiado'); */
    public function definition()
    {
        return [
            'total' => $this->faker->randomFloat(2, 0, 200),
            'fiado' => $this->faker->boolean(30),
            'funcionario_id' => $this->faker->numberBetween(1, 10),
            'cliente_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
