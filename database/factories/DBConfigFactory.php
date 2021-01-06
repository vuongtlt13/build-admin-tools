<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\DBConfig;
use Faker\Generator as Faker;

$factory->define(DBConfig::class, function (Faker $faker) {

    return [
        'field_id' => $faker->word,
        'type' => $faker->word,
        'length' => $faker->randomDigitNotNull,
        'nullable' => $faker->word,
        'unique' => $faker->word,
        'default' => $faker->word
    ];
});
