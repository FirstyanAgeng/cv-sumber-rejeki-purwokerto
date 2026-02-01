@extends('layouts.app')
@section('title', 'Data Perdagangan')
@section('content')

<div class="container">
    <a href="{{ url('/admin/trade/create') }}" class="btn btn-primary mb-3">create</a>
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped " id="example">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($trades as $trade)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $trade->name }}</td>
                    <td>{!! $trade->description !!}</td>
                    <td>{{ $trade->price }}</td>
                    <td><img src="/image/{{ $trade->image }}" alt="" class="img-fuid" width="100">
                    </td>
                    <td>
                        <a href="{{ route('trade.edit',$trade->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('trade.destroy',$trade->id) }}" method="POST">
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