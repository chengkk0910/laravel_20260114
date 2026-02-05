<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Phone;
use App\Models\Hobby;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data  = Student::with('phone')->with('hobbies')->get();
        // dd($data[0]->phone->name);
        // dd($data[0]->hobbies);
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
        $hobbies = explode(',', $input['hobbies']);
        // dd($hobbies);
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

        // hobbies
        if (!empty($hobbies)) {
            foreach ($hobbies as $key => $value) {
                $dataHobby = new Hobby();
                $dataHobby->name = $value;
                $dataHobby->student_id = $data->id;
                $dataHobby->save();
            }
        }

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
        $data = Student::where('id', $id)->with('phone')->first();
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

        // students
        $data = Student::where('id', $id)->first();
        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();

        // 刪除子表
        Phone::where('student_id', $id)->delete();

        // phones
        $dataPhone = new Phone();
        $dataPhone->name = $input['phone'];
        $dataPhone->student_id = $data->id;
        $dataPhone->save();

        return redirect()->route('students.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd('Student destroy method ' . $id);
        // $student = Student::find($id);
        // 刪除主表
        $data = Student::where('id', $id)->first();
        $data->delete();

        // 刪除子表
        Phone::where('student_id', $id)->delete();

        return redirect()->route('students.index');
    }
}
