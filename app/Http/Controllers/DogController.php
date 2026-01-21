<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'amy',
                'mobile' => '0911'
            ],
            [
                'id' => 2,
                'name' => 'bob',
                'mobile' => '0922'
            ],
            [
                'id' => 3,
                'name' => 'cat',
                'mobile' => '0933'
            ],
        ];
        dd($data);
        // dd('Dog index ok 123');
        return view('dog.index')->with('data', $data);
        // return view('dog.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function f1()
    {
        return view('dog.f1');
    }

    public function f2()
    {
        return view('dog.f2');
    }

    public function f3()
    {
        return view('dog.f3');
    }

    public function child()
    {
        // dd('dog child ok dog controller');
        return view('child');
    }

    public function b1()
    {
        return view('dog.blue.b1');
    }

    public function b2()
    {
        return view('dog.blue.b2');
    }

    public function b3()    
    {
        return view('dog.blue.b3');
    }
}
