<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {

    return [
        'type' => $faker->word,
        'url_pattern' => $faker->word,
        'index_route_name' => $faker->word,
        'title' => $faker->word,
        'parent_id' => $faker->randomDigitNotNull,
        'pos' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
