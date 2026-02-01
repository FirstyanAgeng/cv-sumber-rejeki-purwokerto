@extends('layouts.app')
@section('title', 'Create trade')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-5">
            <img src="/image/{{ $trade->image }}" class="img-fluid shadow-sm" style="border-radius: 14px;" id="imgPrev">
            <div class="mt-3">
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <div>
                        Images are only JPG and PNG and the Max Size is 2 MB
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <form action="{{ route('trade.update', $trade->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ $trade->name }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control" name="category" value="{{ $trade->category }}">
                </div>
                @error('category')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" name="price" value="{{ $trade->price }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" id="formFile" name="image">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" class="form-control content" id="content" cols="30"
                        rows="10">{{ $trade->description }}</textarea>
                </div>
                @error('description')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Detail</label>
                    <textarea name="detail" class="form-control" id="" cols="30"
                        rows="10">{{ $trade->detail }}</textarea>
                </div>
                @error('detail')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('/admin/trade') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection