@extends('layouts.app')
@section('title', 'Edit about')

@section('content')
<div class="container">
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{ $message }}</p>
    </div>
    @endif
    <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-6">
                <img src="/image/{{ $about->image }}" class="img-fluid shadow-sm" style="border-radius: 14px;"
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
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="title" class="form-control" id="" cols="30" rows="10">{{ $about->title }}</textarea>
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" class="form-control" id="" cols="30"
                        rows="10">{{ $about->description }}</textarea>
                </div>
                @error('description')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="">
                    <label for="formFile" class="form-label">Struktur Organisasi</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>
                
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- <div class="form-group">
                    <label class="font-weight-bold">Gambar</label>
                    <input type="file" class="form-control" name="image" id="imgInp">
                </div> --}}
                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
            </div>
        </div>
    </form>
</div>
</div>

@endsection