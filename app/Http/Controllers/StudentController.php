<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = StudentModel::all();
        // return view('sample')->with('students', $students);
        // return view('sample',compact('students'));
        return view('samplefolder/sample',compact('students'));
    }

    public function create()
    {
        return view('samplefolder.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        StudentModel::create($input);
        return redirect('student')->with('flash_message','Student Added');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
