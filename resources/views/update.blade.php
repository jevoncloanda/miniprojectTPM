@extends('layouts.layout')
@section('navbar')

<h1>UPDATE STUDENT FORM</h1>

<form action="{{route('updateStudent', ['id' => $student->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="formGroupExampleInput" value="{{$student->name}}" placeholder="Input Name">
    </div>
    <div class="mb-3">
        <label for="NIM" class="form-label">NIM</label>
        <input name="NIM" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$student->NIM}}" placeholder="Input NIM">
    </div>
    <div class="mb-3">
        <label for="birth" class="form-label">Birthday</label>
        <input name="birth" type="date" class="form-control" id="formGroupExampleInput" value="{{$student->birth}}" placeholder="Input Date">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input name="age" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$student->age}}" placeholder="Input Age">
    </div>
    <div class="mb-3">
        <label for="class" class="form-label">Class</label>
        <input name="class" type="text" class="form-control" id="formGroupExampleInput" value="{{$student->class}}" placeholder="Input Class">
    </div>
    <button type="submit" class="btn btn-success">Done</button>
</form>
@endsection
