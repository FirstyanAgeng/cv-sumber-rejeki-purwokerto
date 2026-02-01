@extends('layouts.app')
@section('title', 'Data Portofolio')
@section('content')

<div class="container">
    <a href="{{ url('/admin/portofolio/create') }}" class="btn btn-primary mb-3">create</a>
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
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($portofolio as $porto)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $porto->title }}</td>
                    <td>{!! $porto->description !!} </td>
                    <td><img src="/image/{{ $porto->image }}" alt="" class="img-fuid" width="100">
                    </td>
                    <td>
                        <a href="{{ route('portofolio.edit',$porto->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('portofolio.destroy',$porto->id) }}" method="POST">
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