{{-- @extends('layouts.app')

@section('content')
    <div class="dashboard-container">


        <div class="dashboard-aside-menu">

        </div>
        <div class="dashboard-main-content">
            <h2>Benvenuto nella tua Dashboard</h2>

            <p>Ciao, {{ auth()->user()->name }}! Sei connesso come {{ auth()->user()->email }}.</p>

            <p>Questa è un'area riservata agli utenti autenticati.</p>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>

        </div>
    </div>
@endsection --}}
<!-- resources/views/dashboard.blade.php -->
@extends('layouts.dashboard_layout')

@section('content')
    <h2>Benvenuto nella tua Dashboard</h2>

    <p>Ciao, {{ auth()->user()->name }}! Sei connesso come {{ auth()->user()->email }}.</p>

    <p>Questa è un'area riservata agli utenti autenticati.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

@endsection
