@extends('layouts.app')
@section('title', 'Edit contact')

@section('content')
<div class="container">
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{ $message }}</p>
    </div>
    @endif

    <form action="/admin/contact/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-4">

                <img src="/image/{{ $contact->image }}" class="img-fluid shadow-sm" style="border-radius: 14px;"
                    id="imgPrev">
                <div class="mt-3">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <div>
                            Images are only JPG and PNG and the Max Size is 2 MB
                        </div>
                    </div>
                </div>
                <img src="/image/{{ $contact->logo }}" class="img-fluid shadow-sm" style="border-radius: 14px;"
                    id="imgLogo">
            </div>

            <div class="col-8">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="name" placeholder="judul"
                        value="{{ $contact->name }}">
                </div>
                @error('name')
                <small style="color: red">{{ $message }}</small>
                @enderror


                <div class="form-group">
                    <label for="">Gambar Kantor</label>
                    <input type="file" class="form-control" name="image" id="formFile">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" class="form-control" name="logo" id="logoFile">
                </div>
                @error('logo')
                <small style="color: red">{{ $message }}</small>
                @enderror


                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $contact->alamat }}">
                </div>
                @error('alamat')
                <small style="color: red">{{ $message }}</small>
                @enderror


                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" name="telepon_1" value="{{ $contact->telepon_1 }}">
                </div>
                @error('telepon_1')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" name="telepon_2" value="{{ $contact->telepon_2 }}">
                </div>
                @error('telepon_2')
                <small style="color: red">{{ $message }}</small>
                @enderror


                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $contact->email }}">
                </div>
                @error('email')
                <small style="color: red">{{ $message }}</small>
                @enderror


            </div>

        </div>
        <label for="">Maps</label>
        <textarea name="maps_embed" class="form-control" id="" cols="20" rows="8">{{ $contact->maps_embed }}</textarea>
        @error('maps_embed')
        <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="description" class="form-control" id="" cols="30"
                rows="10">{{ $contact->description }}</textarea>
        </div>
        @error('description')
        <small style="color: red">{{ $message }}</small>
        @enderror

        <button type="submit" class="btn btn-primary">Simpan</button>


    </form>

</div>
</div>

@endsection