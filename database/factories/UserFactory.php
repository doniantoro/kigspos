<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_level_id' => function(){
            return factory(App\UserLevel::class)->create()->id;
        },
        'username' => $faker->userName,
        'password' => $faker->password,
    ];
});
