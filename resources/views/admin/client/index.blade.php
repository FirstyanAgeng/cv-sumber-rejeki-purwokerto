@extends('layouts.app')
@section('title', 'Data Mitra')
@section('content')

<div class="container">
    <a href="{{ url('/admin/client/create') }}" class="btn btn-primary mb-3">create</a>
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
                    <th>Nama Mitra</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($clients as $client)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $client->title }}</td>
                    <td><img src="/image/{{ $client->image }}" alt="" class="img-fuid" width="100">
                    </td>
                    <td>
                        <a href="{{ route('client.edit',$client->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('client.destroy',$client->id) }}" method="POST">
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