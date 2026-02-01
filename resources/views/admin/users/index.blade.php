@extends('layouts.app')
@section('title', 'Data User')
@section('content')

<div class="container">
    <a href="{{ url('user/create') }}" class="btn btn-primary mb-3">create</a>
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
                    <th>Aksi</th>


                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($users as $user)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.edit',$user->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('user.destroy',$user->id) }}" method="POST">
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