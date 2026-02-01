@extends('layouts.app')
@section('title', 'Edit blog')

@section('content')
<div class="container">



    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-4">
                <img src="/image/{{ $blog->image_1 }}" class="img-fluid shadow-sm" style="border-radius: 14px;"
                    id="imgPrev">
                <div class="mt-3">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <div>
                            Images are only JPG and PNG and the Max Size is 2 MB
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" value="{{ $blog->title }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control" name="kategori" value="{{ $blog->kategori }}">
                </div>
                @error('kategori')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image_1">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="subtitle" value="{{ $blog->subtitle }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

            </div>
        </div>



        <div class="form-group">
            <label for="">Konten</label>
            <textarea name="content" class="form-control" id="" cols="30" rows="10">{{ $blog->content }}</textarea>
        </div>
        @error('content')
        <small style="color: red">{{ $message }}</small>
        @enderror


        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('/admin/blog') }}" class="btn btn-danger">Batal</a>

    </form>

</div>
</div>
@endsection