@extends('layouts.app')
@section('title', 'Edit client')

@section('content')
<div class="container">
    <a href="{{ url('/admin/client') }}" class="btn btn-primary">kembali</a>
    <div class="row">
        <div class="col-6">
            <img src="/image/{{ $client->image }}" class="img-fluid shadow-sm" style="border-radius: 14px;"
                id="imgPrev">
            <div class="mt-3">
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <div>
                        Images are only JPG and PNG and the Max Size is 2 MB
                    </div>
                </div>

            </div>
        </div>
        <div class="col-6">

            <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" value="{{ $client->title }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
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