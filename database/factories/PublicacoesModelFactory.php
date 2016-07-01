
<?php








$factory->define(App\Models\BlogPost::class, function (Faker\Generator $faker) {
    return [
        'autor_id'=>$faker->numberBetween($min = 1, $max = 20),
        'data_publicacao' => $faker->date,
        'titulo' => $faker->sentence(30),
        'conteudo'=>$faker->text(500),
        'imagem'=>$faker->imageUrl(800, 600),

    ];
});
