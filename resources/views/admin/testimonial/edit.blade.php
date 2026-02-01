@extends('layouts.app')
@section('title', 'Create Testimonial')

@section('content')
<div class="container">
    <a href="{{ url('/admin/testimonial') }}" class="btn btn-primary">kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="judul"
                        value="{{ $testimonial->title }}">
                </div>

                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" class="form-control" id="" cols="30"
                        rows="10">{{ $testimonial->description }}</textarea>
                </div>
                
                @error('description')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $testimonial->image }}" alt="" class="img-fuid" width="300" height="300">
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