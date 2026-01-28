<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {

        // dd('Car Controller Index Method');
        $data = DB::select('select * from students');
        // $data = DB::table('students')->get();
        // dd($data);

        // foreach ($data as $key => $value) {
        //     echo 'ID: ' . $value->id . ' Name: ' . $value->name . ' Mobile: ' . $value->mobile . '<br>';
        // }
        // dd('hello car controller index');
        return view('car.index')->with('data', $data);
        // return 'This is Car Controller';
    }

    public function hello()
    {
        // dd('hello car controller hello');
        return view('car.hello');
    }
}
