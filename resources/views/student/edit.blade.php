@extends('student.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
        Edit Student Data
        </div>
            <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
                <form method="post" action="{{ route('student.update', $Student->nim) }}" id="myForm">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="Nim">Nim</label>
                        <input type="text" name="Nim" class="form-control" id="Nim" value="{{ $Student->nim }}" ariadescribedby="Nim" >
                    </div>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" class="form-control" id="Name" value="{{ $Student->name }}" aria-describedby="Name" >
                    </div>
                    <div class="form-group">
                        <label for="Class">Class</label>
                        <select name="Class" id = "class" class="form-control">
                            @foreach($class as $kls)
                            <option value="{{$kls->id}}" {{$Student->class_id == $kls->id ? 'selected' : ''}} >{{$kls->class_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Major">Major</label>
                        <input type="Major" name="Major" class="form-control" id="Major" value="{{ $Student->major }}" aria-describedby="Major" >
                    </div>
                    @php
                        $pathImage = '';
                        $Mahasiswa->photo ? ($pathImage = 'storage/' . $Mahasiswa->photo) : ($pathImage = 'img/empty.jpg');
                    @endphp
                    <div class="d-flex align-items-start mb-3">
                            <img src="{{ asset('' . $pathImage . '') }}" alt="" width="100" class="img-responsive">
                            <div class="form-group ml-3 ">
                                <label for="picture">Profile Picture</label>
                                <input type="file" class="form-control-file" id="picture" name="picture">
                            </div>
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection