<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vuongdq\VLAdminTool\Models\TranslationFile;
use Faker\Generator as Faker;

$factory->define(TranslationFile::class, function (Faker $faker) {

    return [
        'filename' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
