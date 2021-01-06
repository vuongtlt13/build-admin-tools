<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {

    return [
        'class_name' => $faker->word,
        'table_name' => $faker->word,
        'singular' => $faker->word,
        'plural' => $faker->word,
        'description' => $faker->text,
        'timestamps' => $faker->word,
        'soft_delete' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
