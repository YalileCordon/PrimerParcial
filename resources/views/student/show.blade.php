@extends('layouts.base')
@section('content')
    <form class="row shadow m-3 p-3" method="post" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-info">Show Estudiante</h1>
            </div>
        </div>

        <div class="col-md-6 mt-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}"
                placeholder="Student Name">
        </div>
        <div class="col-md-6 mt-2">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $student->lastname }}"
                placeholder="Student Last Name">
        </div>
        <div class="col-md-4 mt-2">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ $student->age }}"
                placeholder="Student Age">
        </div>
        <div class="col-md-8 mt-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}"
                placeholder="Student Email">
        </div>
        <div class="col-md-6 mt-2">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ $student->city }}"
                placeholder="Student City">
        </div>
        <div class="col-md-6 mt-2">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}"
                placeholder="Student Address">
        </div>
        <div class="col-md-4 mt-2">
            <label for="birthdate" class="form-label">Birthdate</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ $student->birthdate }}">
        </div>

        <div class="col-md-4 mt-2">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
                <option value="1" {{ $student->status == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $student->status == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="col-12 mt-2">
            <a href="{{ route('students.index') }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
