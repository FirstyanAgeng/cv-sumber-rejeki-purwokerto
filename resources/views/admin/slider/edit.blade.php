@extends('layouts.app')
@section('title', 'Edit Banner')

@section('content')
<div class="container">

    <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-4">
                <img src="/image/{{ $slider->image }}" class="img-fluid shadow-sm" style="border-radius: 14px;"
                    id="imgPrev">
                <div class="mt-3">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <div>
                            Gambar hanya berekstensi JPG dan PNG, Maksimal ukuran 2 MB
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="judul"
                        value="{{ $slider->title }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" class="form-control" id="" cols="30"
                        rows="10">{{ $slider->description }}</textarea>
                </div>
                @error('description')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- <img src="/image/{{ $slider->image }}" alt="" class="img-fuid" width="300" height="300"> --}}
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" id="formFile" name="image">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('/admin/sliders') }}" class="btn btn-danger">Batal</a>
    </form>
</div>
</div>
</div>
@endsection