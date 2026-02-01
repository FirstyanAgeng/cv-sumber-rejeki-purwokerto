@extends('layouts.app')
@section('title', 'Create Users')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('/user') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name">
                </div>
                @error('name')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                @error('email')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="formFile" name="password">
                </div>
                @error('password')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('/user') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection