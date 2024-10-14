<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * モデルのデフォルト状態を定義する
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Unitテストのために記述内容変更
        return [
            'name' => fake()->name,
            'mail' => fake()->unique()->safeEmail(),
            'age' => random_int(1, 99),
        ];
    }
}
