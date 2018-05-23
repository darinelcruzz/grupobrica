<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Runa\RClient::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'city' => $faker->city,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->freeEmail,
        'contact' => $faker->name,
        'contact_phone' => $faker->phoneNumber,
        'rfc' => $faker->regexify('[A-Z]{3}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|2[0-9]|3[0-1])[A-Z]{2}'),
        'credit' => $faker->randomElement(array(0, 1)),
        'discount' => $faker->randomElement(array(0, 3, 5)),
    ];
});
