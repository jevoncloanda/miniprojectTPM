@extends('layouts.layout')
@section('navbar')

<h1>CREATE STUDENT FORM</h1>

<form action="{{route('createStudent')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Name">
    </div>
    <div class="mb-3">
        <label for="NIM" class="form-label">NIM</label>
        <input name="NIM" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input NIM">
    </div>
    <div class="mb-3">
        <label for="birth" class="form-label">Birthday</label>
        <input name="birth" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Date">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input name="age" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Age">
    </div>
    <div class="mb-3">
        <label for="class" class="form-label">Class</label>
        <input name="class" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Class">
    </div>
    @error('NIM')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-success">Insert</button>
</form>
@endsection
