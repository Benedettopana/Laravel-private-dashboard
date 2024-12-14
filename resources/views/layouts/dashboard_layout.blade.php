<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app" class="bg-main">
        {{-- header --}}
        @include('partials.header')

    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="dashboard-aside-menu">
            <div class="">
                <ul>
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('courses.index') }}">I tuoi corsi</a></li>
                    <li><a href="{{ route('courses.create') }}">Aggiungi un Corso</a></li>

                </ul>
            </div>

            <div class="">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>

        <!-- Main content -->
        <div class="dashboard-main-content">
            @yield('content') <!-- Qui verrà iniettato il contenuto specifico di ogni pagina -->
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
