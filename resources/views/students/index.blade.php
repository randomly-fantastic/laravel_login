<!-- resources/views/students/index.blade.php -->

@extends('layout')

@section('content')
    <h1>Students List</h1>
    <a href="/students/create" class="btn btn-primary mb-3">Add New Student</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="/students/{{ $student->id }}" class="btn btn-info btn-sm">View</a>
                        <a href="/students/{{ $student->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                        <form action="/students/{{ $student->id }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
