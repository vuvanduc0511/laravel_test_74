<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Table2Model;
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

$factory->define(Table2Model::class, function (Faker $faker) {
    return [
        'name_table_2' => 'table 2 name - ' . Table2Model::$idAuto++
    ];
});
