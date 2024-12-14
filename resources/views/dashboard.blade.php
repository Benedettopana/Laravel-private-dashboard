@extends('layouts.app')

@section('content')
    <h1>Benvenuto nella tua Dashboard</h1>

    <p>Ciao, {{ auth()->user()->name }}! Sei connesso come {{ auth()->user()->email }}.</p>

    <p>Questa è un'area riservata agli utenti autenticati.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
        {{-- <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a> --}}
    </form>
@endsection
