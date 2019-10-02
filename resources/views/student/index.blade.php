@extends('layout.main')

@section('title', 'Students List')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt3">Student Lists</h1>
            <a href="{{url('/students/create')}}" class="btn btn-primary my-3">Add Student</a>
            @if (session('flashKey'))
                <div class="alert alert-success">
                    {{ session('flashKey') }}
                </div>
            @endif
            <ul class="list-group">
            @foreach ($data as $r)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$r->nama}}
                <a href="{{ url('/students/'.$r->id)}}" class="badge badge-primary badge-pill">Detail</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
