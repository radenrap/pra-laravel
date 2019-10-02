@extends('layout.main')

@section('title', 'Add Student')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt3">Add Student</h1>
            <form method="POST" action="{{url('/students')}}">
                @csrf
                <div class="form-group">
                    <label for="nim">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" value="{{old('nim')}}" id="nim" name="nim"
                        placeholder="Nomor Induk Mahasiswa">
                    @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}" id="nama" name="nama"
                        placeholder="Nama Lengkap">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" value="{{old('jurusan')}}" id="jurusan"
                        name="jurusan" placeholder="Jurusan">
                    @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" name="email"
                        placeholder="Email Akademik">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
