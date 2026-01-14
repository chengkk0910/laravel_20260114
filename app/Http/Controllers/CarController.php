<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        // dd('hello car controller index');
        return view('car.index');
        // return 'This is Car Controller';
    }

    public function hello()
    {
        // dd('hello car controller hello');
        return view('car.hello');
    }
}
