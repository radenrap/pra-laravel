@extends('layout.main')

@section('title', 'Student Detail')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt3">Student Detail</h1>
            <div class="card col-10">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nim}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nama}}</h6>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <a href="mailto:{{$student->email}}" class="card-link">{{$student->email}}</a><br>
                    Data created : <a href="#" class="card-link">{{$student->created_at}}</a>
                    <hr>
                    <a href="{{url('/students')}}" class="btn btn-secondary">Back</a>
                    <a href="{{url('/students/'.$student->id.'/edit')}}" class="btn btn-success">Edit</a>
                    <form action="{{url('/students/'.$student->id)}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
