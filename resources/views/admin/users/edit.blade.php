@extends('layouts.app')
@section('title', 'Edit Users')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                </div>
                @error('name')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                </div>
                @error('email')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" value="{{ bcrypt($user->password) }}">
                </div>
                @error('password')
                <small style="color: red">{{ $message }}</small>
                @enderror --}}

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('/user') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection