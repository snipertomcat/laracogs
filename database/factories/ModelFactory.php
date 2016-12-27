<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/*
|--------------------------------------------------------------------------
| Customer Factory
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Customer::class, function (Faker\Generator $faker) {
    return [

        // Customer table data

    ];
});

/*
|--------------------------------------------------------------------------
| UserMeta Factory
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\UserMeta::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'phone' => $faker->phoneNumber,
        'marketing' => 1,
        'terms_and_cond' => 1,
    ];
});

$factory->define(App\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => 'member',
        'label' => 'Member',
    ];
});

/*
|--------------------------------------------------------------------------
| Team Factory
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Team::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'name' => $faker->name
    ];
});