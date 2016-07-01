<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Usuario::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->safeEmail,
        'senha' => bcrypt(str_random(10)),
        'dat_nasc'=>$faker->date,
        'foto'=>$faker->imageUrl(640, 480, 'people'),

    ];
});
