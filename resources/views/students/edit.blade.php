<!-- resources/views/students/edit.blade.php -->

@extends('layout')

@section('content')
    <h1>Edit Student</h1>
    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ $student->age }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <br>
    <a href="/students" class="btn btn-primary">Back to Students List</a>
@endsection
