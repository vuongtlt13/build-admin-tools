<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\Translation;
use Faker\Generator as Faker;

$factory->define(Translation::class, function (Faker $faker) {

    return [
        'file_id' => $faker->word,
        'lang_id' => $faker->word,
        'key' => $faker->word,
        'value' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
