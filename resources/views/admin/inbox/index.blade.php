@extends('layouts.app')
@section('title', 'Data Inbox')
@section('content')

<div class="container">
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Hp</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($inboxes as $inbox)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $inbox->name }}</td>
                    <td>{{ $inbox->email }}</td>
                    <td>{{ $inbox->handphone }}</td>
                    <td>{{ $inbox->message }}</td>

                    <td>
                        <form action="{{ route('inbox.destroy',$inbox->id) }}" method="POST">
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