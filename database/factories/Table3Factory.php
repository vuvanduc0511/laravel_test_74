<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Table3Model;
use Faker\Generator as Faker;
// use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Table3Model::class, function (Faker $faker) {
    return [
        'name_table_3' => 'table 3 name - ' . Table3Model::$idAuto++
    ];
});
