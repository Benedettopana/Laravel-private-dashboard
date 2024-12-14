<!-- resources/views/dashboard/courses/show.blade.php -->
@extends('layouts.dashboard_layout')

@section('content')
    <h2>Dettaglio Corso: {{ $course->title }}</h2>

    <div class="course-detail">
        <p><strong>Titolo:</strong> {{ $course->title }}</p>
        <p><strong>Descrizione:</strong> {{ $course->description }}</p>
        <p><strong>Istruttore:</strong> {{ $course->instructor }}</p>
        <p><strong>Durata:</strong> {{ $course->duration }} ore</p>
        <p><strong>Prezzo:</strong> €{{ number_format($course->price, 2) }}</p>
        <p><strong>Pubblicato:</strong> {{ $course->published ? 'Sì' : 'No' }}</p>

        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Torna alla lista corsi</a>
        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Modifica Corso</a>
    </div>
@endsection
