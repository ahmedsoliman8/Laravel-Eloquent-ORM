<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   // return view('welcome');

   // $user= User::select('name','email')->get();

    $user= DB::table('users')->where('name','ahmed')->value('email');

    $numbers=collect([1,2,3,4,5,6,7,8,9]);
    $modifiedNumbers=$numbers->filter(function ($value, $key) {
        return $value % 2 === 1;
    });
    $faker = Faker\Factory::create('fr_FR');
    for ($i = 0; $i < 3; $i++) {
        echo $faker->name() . "\n";
    }
});
