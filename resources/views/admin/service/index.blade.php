@extends('layouts.app')
@section('title', 'Data Service')
@section('content')

<div class="container">
    <a href="{{ url('/admin/services/create') }}" class="btn btn-primary mb-3">create</a>
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($services as $service)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->description }}</td>
                    <td><img src="/image/{{ $service->image }}" alt="" class="img-fuid" width="100">
                    </td>
                    <td>
                        <a href="{{ route('services.edit',$service->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('services.destroy',$service->id) }}" method="POST">
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