<?php

use Faker\Generator as Faker;

$factory->define(App\Produto::class, function (Faker $faker) {
    return [
        'descricao' => $faker->realText(45, 2)
    ];
});
