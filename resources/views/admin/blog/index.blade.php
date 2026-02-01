@extends('layouts.app')
@section('title', 'Data Berita')
@section('content')

<div class="container">
    <a href="{{ url('/admin/blog/create') }}" class="btn btn-primary mb-3">create</a>
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" id="example">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Konten</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ Str::limit($blog->title, 30) }}</td>
                    <td>{{ $blog->subtitle }}</td>
                    <td>{!! Str::limit($blog->content, 20) !!}</td>
                    <td><img src="/image/{{ $blog->image_1}}" alt="" class="img-fuid" width="150px" height="150px">
                    </td>
                    <td>
                        <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection