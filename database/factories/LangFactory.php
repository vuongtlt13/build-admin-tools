<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\Lang;
use Faker\Generator as Faker;

$factory->define(Lang::class, function (Faker $faker) {

    return [
        'language' => $faker->word,
        'locale' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
