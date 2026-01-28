<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cat;
	
	

class CarController extends Controller
{
    public function index()
    {
        // get()  all()
        //  $data = Cat::all();
        //  $data = Cat::where('name', 'apple')->get();
         $data = Cat::where('name', 'apple')->get();
         dd($data);


        // dd('Car Controller Index Method');
        // $sql = 'SELECT * FROM `students` WHERE `name` = \'amy\'';
        // $data = DB::select($sql);；
        // $data = DB::table('students')->get();
        // $data = DB::table('students')->where('name', 'amy')->toSql();
        // $data = DB::table('students')->where('name', 'amy')->first();
        // $data = DB::table('students')->where('name', 'amy')->get();
        // $data = DB::table('students')->first();
        // get() php fetch all rows  , foreach loop
        // first() php fetch one row , 

        // dd($data);

        // data['key']
        // data->key
        // data.key

        // data['key']()
        // data->key()
        // data.key()

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
