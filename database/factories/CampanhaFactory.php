<?php

use Faker\Generator as Faker;

$factory->define(App\Campanha::class, function (Faker $faker) {
    return [
        'descricao' => $faker->realText(45, 2),
        'desconto' => $faker->randomFloat(2, 0, 20)
    ];
});
