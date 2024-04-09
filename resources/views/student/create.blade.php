@extends('layouts.base')
@section('content')
@section('title', 'Create a new Task')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-info">Create Student</h1>
        </div>
    </div>
    <div class="row">

    </div>
    <form class="row shadow m-3 p-3" method="post" action="{{ route('students.store') }}">
        @csrf
        <div class="col-md-6 mt-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Student Name">
        </div>
        <div class="col-md-6 mt-2">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Student Last Name">
        </div>
        <div class="col-md-4 mt-2">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Student Age">
        </div>
        <div class="col-md-8 mt-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Student Email">
        </div>
        <div class="col-md-6 mt-2">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Student City">
        </div>
        <div class="col-md-6 mt-2">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Student Address">
        </div>
        <div class="col-md-4 mt-2">
            <label for="birthdate" class="form-label">Birthdate</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate">
        </div>
        <div class="col-md-4 mt-2">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <div class="col-12 mt-2">
            <a href="{{ route('students.index') }}" class="btn btn-info">Back</a>
            <button type="submit" class="btn btn-info">Save</button>
        </div>
    </form>

</div>
@endsection
