<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\CRUDConfig;
use Faker\Generator as Faker;

$factory->define(CRUDConfig::class, function (Faker $faker) {

    return [
        'field_id' => $faker->word,
        'creatable' => $faker->word,
        'editable' => $faker->word,
        'rules' => $faker->word
    ];
});
