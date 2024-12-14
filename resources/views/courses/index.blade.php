@extends('layouts.dashboard_layout')

@section('content')
    <div class="pb-5">
        <h1>Corsi</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Aggiungi Corso</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Istruttore</th>
                    <th>Durata</th>
                    <th>Prezzo</th>
                    <th>Pubblicato</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->instructor }}</td>
                        <td>{{ $course->duration }} ore</td>
                        <td>{{ $course->price }} €</td>
                        <td>{{ $course->published ? 'Sì' : 'No' }}</td>
                        <td>
                            <a href="{{ route('courses.show', $course) }}" class="btn btn-info btn-sm">Dettagli</a>
                            <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning btn-sm">Modifica</a>
                            <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
