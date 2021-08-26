<?php

namespace Database\Factories;

use App\Models\DataKGBModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PesanFactory extends Factory{
    $factory->define[(Order::class, 'Faker()$faker'] {
        return [
            'name' => $faker->sentence,
            'amount' => $faker->numberBetween($min = 1000, $max = 9000),
        ];
    };
}

