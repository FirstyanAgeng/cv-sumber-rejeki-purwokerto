@extends('layouts.app')
@section('title', 'Data Pengurus')
@section('content')

<div class="container">
    <a href="{{ url('/admin/team/create') }}" class="btn btn-primary mb-3">create</a>
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped example">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($team as $tim)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $tim->title }}</td>
                    <td>{{ $tim->description }}</td>
                    <td><img src="/image/{{ $tim->image }}" alt="" class="img-fuid" width="100">
                    </td>
                    <td>
                        <a href="{{ route('team.edit',$tim->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('team.destroy',$tim->id) }}" method="POST">
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