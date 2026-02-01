@extends('layouts.app')
@section('title', 'Create Kontraktor')

@section('content')
<div class="container">
    <form action="{{ route('contractor.update', $contractor->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-4">
                <img src="/image/{{ $contractor->image }}" class="img-fluid shadow-sm" style="border-radius: 14px;"
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
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ $contractor->name }}">
                </div>
                @error('name')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control" name="category" value="{{ $contractor->category }}">
                </div>
                @error('category')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" name="price" value="{{ $contractor->price }}">
                </div>
                @error('price')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="description" class="form-control" id="content" cols="30"
                rows="10">{!! $contractor->description !!}</textarea>
        </div>
        @error('description')
        <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Detail</label>
            <textarea name="detail" class="form-control" id="" cols="30" rows="10">{{ $contractor->detail }}</textarea>
        </div>
        @error('detail')
        <small style="color: red">{{ $message }}</small>
        @enderror


        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('/admin/contractor') }}" class="btn btn-danger">Batal</a>
    </form>
</div>

@endsection