<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\Relation;
use Faker\Generator as Faker;

$factory->define(Relation::class, function (Faker $faker) {

    return [
        'second_field_id' => $faker->word,
        'type' => $faker->word,
        'table_name' => $faker->word,
        'fk_1' => $faker->word,
        'fk_2' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
