@extends('layouts.layout')
@section('navbar')
<h1>SEARCH RESULTS</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">NIM</th>
            <th scope="col">Age</th>
            <th scope="col">Class</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($studentz as $student)
        <tr>
            <th scope="row">{{ $student->id }}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->NIM }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->class }}</td>
            <td>
                <a href="{{route('getStudentById', ['id'=>$student->id])}}"><button type="submit" class="btn btn-success">Edit</button></a>
                <form action="{{route('deleteStudent', ['id' => $student->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
