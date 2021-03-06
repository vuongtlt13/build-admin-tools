<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\Field;
use Faker\Generator as Faker;

$factory->define(Field::class, function (Faker $faker) {

    return [
        'model_id' => $faker->word,
        'name' => $faker->word,
        'html_type' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
