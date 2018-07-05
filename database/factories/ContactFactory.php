<?php
use Faker\Generator as Faker;

$factory->define(App\Contact::class, function(Faker $faker){
    $gender = ['MALE', 'FEMALE'];
   return [
       'lastname' => $faker->lastName,
       'firstname' => $faker->firstName,
       'middlename' => $faker->lastName,
       'gender' => $gender[rand(0, 1)],
       'address' => $faker->address,
       'phone' => $faker->phoneNumber,
       'email' => $faker->email
   ];
});