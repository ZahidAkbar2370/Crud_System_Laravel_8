<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function index()
    {
        $all_students = Student::all();

        return view("Student/view_student",["all_students" => $all_students]);
    }

    public function create()
    {
        return view("Student/add_student");
    }

    
    public function store(Request $request)
    {
        $add_student = Student::create([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'cnic_no' => $request->cnic_no,
            'address' => $request->address,
        ]);

        return redirect('view-student');
    }


    public function edit($id)
    {
        $edit_student = Student::find($id);

        return view("Student/edit_student",["edit_student" => $edit_student]);
    }

    
    public function update(Request $request, $id)
    {
        $update_student = Student::where("id",$id)->update([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile_no' => $request->mobile_no,
            'cnic_no' => $request->cnic_no,
            'address' => $request->address,
            'email' => $request->email,

        ]);

        return redirect('view-student');
    }

    
    public function destroy($id)
    {
        $delete_student = Student::find($id);

        $delete_student->delete();

        return redirect('view-student');
    }
}
