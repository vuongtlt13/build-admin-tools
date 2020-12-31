<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\Field;
use Faker\Generator as Faker;

$factory->define(Field::class, function (Faker $faker) {

    return [
        'model_id' => $faker->word,
        'name' => $faker->word,
        'db_type' => $faker->word,
        'html_type' => $faker->word,
        'primary' => $faker->word,
        'unique' => $faker->word,
        'auto_increment' => $faker->word,
        'nullable' => $faker->word,
        'creatable' => $faker->word,
        'editable' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
