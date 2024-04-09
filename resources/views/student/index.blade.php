@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-info">Students</h1>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <form action="{{ route('students.index') }}" method="GET" class="form-inline">
                    <div class="form-group">
                        <label for="search">Search:</label>
                        <input type="text" class="form-control mx-sm-3" id="search" name="search"
                            placeholder="Enter keyword">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
        <div class="row">
            @foreach ($students as $student)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $student->name }} {{ $student->lastname }}</h5>
                            <p class="card-text"><strong>Age:</strong> {{ $student->age }}</p>
                            <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                            <p class="card-text"><strong>City:</strong> {{ $student->city }}</p>
                            <p class="card-text"><strong>Address:</strong> {{ $student->address }}</p>
                            <p class="card-text"><strong>Birthdate:</strong> {{ $student->birthdate }}</p>
                            <p class="card-text"><strong>Status:</strong> {{ $student->status ? 'Active' : 'Inactive' }}</p>
                            <a href="/students/{{ $student->id }}/edit" class="btn btn-outline-success">Edit</a>
                            <a href="/students/{{ $student->id }}" class="btn btn-outline-success">Show</a>
                            <form method="post" action="{{ route('students.destroy', $student) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger"
                                    onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-12 mt-3">
                <a href="{{ route('students.create') }}" class="btn btn-info">Add New Student</a>
            </div>
        </div>
    </div>
@endsection
