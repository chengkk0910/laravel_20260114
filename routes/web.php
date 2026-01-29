<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\BlueController;
use App\Http\Controllers\RedController;
use App\Http\Controllers\StudentController;

// Student Controller
Route::resource('students', StudentController::class);

// Red Controller
Route::resource('/reds', RedController::class);

// Blue Controller
Route::resource('/blues', BlueController::class);


// Dog Controller
Route::get('/dogs_all', [DogController::class, 'all'])->name('dogs.all');
Route::get('/dogs_r1', [DogController::class, 'r1'])->name('dogs.r1');
Route::get('/dogs_r2', [DogController::class, 'r2'])->name('dogs.r2');
Route::get('/dogs_r3', [DogController::class, 'r3'])->name('dogs.r3');
Route::get('/dogs_b1', [DogController::class, 'b1'])->name('dogs.b1');
Route::get('/dogs_b2', [DogController::class, 'b2'])->name('dogs.b2');
Route::get('/dogs_b3', [DogController::class, 'b3'])->name('dogs.b3');
Route::get('/dogs_child', [DogController::class, 'child'])->name('dogs.child');
Route::get('/dogs_1f', [DogController::class, 'f1'])->name('dogs.f1');
Route::get('/dogs_2f', [DogController::class, 'f2'])->name('dogs.f2');
Route::get('/dogs_3f', [DogController::class, 'f3'])->name('dogs.f3');
Route::resource('dogs', DogController::class);

// Car Controller
Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars_hello', [CarController::class, 'hello']);



Route::get('/git', function () {
    dd('git ok');
});

Route::get('/calculator/{num1}/{num2}', function (string $num1, string $num2) {
    // dd($num);

    $data  = [
        'num1' => $num1,
        'num2' => $num2,
        'plus' => $num1 + $num2,
        'minus' => $num1 - $num2,
        'multiply' => $num1 * $num2,
        'divide' => $num1 / $num2,
    ];

    // dd($data);

    // dd($sum);
    // return 'User '.$num;
    return view('calculator')->with('data', $data);
});

Route::get('/sum/{num}', function (string $num) {
    // dd($num);

    $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
    };

    $data  = [
        'num' => $num,
        'sum' => $sum,
    ];
    // dd($data);

    // dd($sum);
    // return 'User '.$num;
    return view('sum')->with('result', $data);
});

Route::get('/user/{id}', function (string $id) {
    dd($id);
    return 'User ' . $id;
});

Route::get('/', function () {
    // dump 繼續
    // dd 停止
    $name = 'kai';
    dump($name);
    $mobile = '090-1234-5678';
    $text = "$name - $mobile";
    dd($text);
    return view('welcome');
});

Route::get('/home0114', function () {
    return view('home0114');
});
