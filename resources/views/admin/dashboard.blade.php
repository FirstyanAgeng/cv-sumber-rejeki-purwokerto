@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<h1>Selamat Datang, {{ Auth::user()->name }}</h1>

@endsection