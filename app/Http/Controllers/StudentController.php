<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentPostRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\DB;


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

       return redirect()->route('list');

    }
    public function getStudents(){
        $students = Student::all();
        return view('student.list', compact('students'));
    }
    public function search(Request $request){
        $name = $request->search;
        $student = DB::table('students')
        ->where('student_name', '=', $name)
        ->get();
        if($student->isNotEmpty()){
            return $student;
        }else{
            return "Does not find $name";
        }
    }
    public function edit($id){
        $studentID = Crypt::decrypt($id);
        $student = Student::find($studentID);
        return view('student.edit', compact('student'));
    }
    public function update(Request $request){
        $studentID = Crypt::decrypt($request->id);
        $student = Student::find($studentID);
        $student->student_name = $request->studentName;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->dob = $request->dob;
        $student->cource = $request->cource;
        $student->save();
        return redirect()->route('list');
    }
    public function delete($id){
        $id = Crypt::decrypt($id);
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('list',)->with('message', 'successfully deleted');
    }
    
}
