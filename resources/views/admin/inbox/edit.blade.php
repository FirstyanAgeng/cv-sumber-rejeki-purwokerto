@extends('layouts.app')
@section('title', 'Edit inbox')

@section('content')
<div class="container">
    <a href="{{ url('/admin/inbox') }}" class="btn btn-primary">kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('inbox.update', $inbox->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="judul"
                        value="{{ $inbox->title }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="completed">
                        <option value="0" @if ($inbox->completed == 0) selected @endif>Belum Terbaca</option>
                        <option value="1" @if ($inbox->completed == 1) selected @endif>Sudah Terbaca</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection