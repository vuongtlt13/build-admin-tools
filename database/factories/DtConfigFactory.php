<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\DtConfig;
use Faker\Generator as Faker;

$factory->define(DtConfig::class, function (Faker $faker) {

    return [
        'field_id' => $faker->word,
        'showable' => $faker->word,
        'searchable' => $faker->word,
        'orderable' => $faker->word,
        'exportable' => $faker->word,
        'printable' => $faker->word,
        'class' => $faker->word,
        'has_footer' => $faker->word
    ];
});
