@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Selamat datang {{ Auth::user()->name }}</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
@endsection
