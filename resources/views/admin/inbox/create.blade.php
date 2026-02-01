@extends('layouts.app')
@section('title', 'Create Team')

@section('content')
<div class="container">
    <a href="{{ url('/admin/team') }}" class="btn btn-primary">kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('/admin/team') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="title">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" class="form-control" name="description">
                </div>
                @error('description')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Status</label>
                    <input type="file" class="form-control" id="formFile" name="image">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection