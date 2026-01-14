<?php

use Illuminate\Support\Facades\Route;

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
