<?php

use App\Http\Controllers\BmiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view ('welcome');
});

Route::get('/Dashboard', function () {
    return view ('Dashboard');
});

Route::get('/bmi', function () {
    return view ('BMI',[
        "name" => "Halo! Atiyah Zahra",
        "image" => "atiyah.jpg"
    ]);
});

Route::get('/bmi/create', [BMIController::class, 'create'])->name('bmi.create');
Route::post('/bmi/calculate', [BMIController::class, 'calculate'])->name('bmi.calculate');


Route::get('/TargetMakanan', function () {
    return view ('TargetMakanan');
});

Route::post('/Login', function () {
    return view ('Login');
});

