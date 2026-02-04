<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Phone;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data  = Student::with('phone')->get();
        // dd($data[0]->phone->name);
        // dd($data);

        return view('student.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('Student create method');
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->except('_token');
        // dd($input);

        // studnets
        $data = new Student();
        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();

        // phones
        $dataPhone = new Phone();
        $dataPhone->name = $input['phone'];
        $dataPhone->student_id = $data->id;
        $dataPhone->save();
            
        return redirect()->route('students.index');
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
        // $data = Student::find($id);
        $data = Student::where('id', $id)->first();
        // dd($data);

        // dd('Student edit method '.$id);
        return view('student.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd('Student update method '.$id);
        // $input = $request->all( );
        $input = $request->except('_token', '_method');
        // dd($input);
        $data = Student::where('id', $id)->first();
        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();

        return redirect()->route('students.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd('Student destroy method ' . $id);
        // $student = Student::find($id);
        $data = Student::where('id', $id)->first();
        $data->delete();

        return redirect()->route('students.index');
    }
}
