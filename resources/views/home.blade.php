@extends('layouts.app')

@section('content')
    <h1>Benvenuto nella Homepage</h1>

    <p class="my-5">
        Ciao, <a href="{{ route('register.form')}}">Registrati</a> o effettua il <a href="{{ route('login.form')}}">Login</a>
    </p>


    {{-- <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a> --}}
@endsection
