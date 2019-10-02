@extends('layout.main')

@section('title', 'Data Mahasiswa')

@section('content')

<div class="container">
    <div class="row">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->email}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td>
                        <a href="#" class="badge badge-success">Update</a>
                        <a href="#" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
