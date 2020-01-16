<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Patient;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(Patient::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
    ];
});
$factory->define(App\Account::class, function (Faker $faker) {
    $firstletter = $faker->randomLetter;
    $numbersetone = $faker->numberBetween($min = 10, $max = 99);
    $numbersettwo = $faker->numberBetween($min = 10, $max = 99);
    $diagnosisCode = strtoupper($firstletter) . $numbersetone . "." . $numbersettwo;
    return [
        'diagnosis_code' => $diagnosisCode,
        'patient_id' => $faker->numberBetween($min = 1, $max = 50),
    ];
});