<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentPostRequest;
use App\Models\Student;

class StudentController extends Controller
{

    public function index(){
        return view('student.index');
    }
    public function create(StudentPostRequest $request){
        $student = new Student();
        $student->student_name = $request->studentName;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->dob = $request->dob;
        $student->cource = $request->cource;
        $student->save();

   

    }
}
