@extends('student.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>INFORMATION TECHNOLOGY-STATE POLYTECHNIC OF MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('student.create') }}"> Input Student Data</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <div class="col-md-6">
    <form method="get" action="{{ url('search') }}">
        <div class="form-group w-100 mb-3">
            <input type="search" name="search" class="form-control w-75 d-inline" id="search" placeholder="Search Student ...">
            <span class = "form-group-btn">
                <button type="submit" class="btn btn-dark">Search</button>
            </span>
        </div>
    </form>
    </div>
</div>
<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Name</th>
        <th>Class</th>
        <th>Major</th>
        <th width="280px">Action</th>
    </tr>
@foreach ($paginate as $mhs)
    <tr>
        <td>{{ $mhs ->nim }}</td>
        <td>{{ $mhs ->name }}</td>
        <td>{{ $mhs ->class->class_name }}</td>
        <td>{{ $mhs ->major }}</td>
        <td>
            <form action="{{ route('student.destroy',['student'=>$mhs->nim]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('student.show',$mhs->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('student.edit',$mhs->nim) }}">Edit</a>
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a class="btn btn-warning" href="{{ route('student.value',$mhs->nim) }}">Value</a>
            </form>
        </td>
    </tr>
@endforeach
</table>
<div class="d-flex justify-content-center">
    {{ $paginate->links()}}
</div>

@endsection