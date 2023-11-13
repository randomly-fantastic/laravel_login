<!-- resources/views/students/show.blade.php -->

@extends('layout')

@section('content')
    <h1>Student Details</h1>
    <div>
        <strong>Name:</strong> {{ $student->name }}
    </div>
    <div>
        <strong>Age:</strong> {{ $student->age }}
    </div>
    <div>
        <strong>Email:</strong> {{ $student->email }}
    </div>
    <br>
    <a href="/students" class="btn btn-primary">Back to Students List</a>
@endsection
