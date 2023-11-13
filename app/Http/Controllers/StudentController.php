<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        //dd(123);
        return view('students.create');

    }

    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect('/students')->with('success', 'Student record created successfully!');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', ['student' => $student]);
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', ['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect('/students')->with('success', 'Student record updated successfully!');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/students')->with('success', 'Student record deleted successfully!');
    }
}
