<!-- resources/views/dashboard/courses/edit.blade.php -->
@extends('layouts.dashboard_layout')

@section('content')
    <h2>Modifica Corso</h2>

    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Indica che questa è una richiesta PUT per aggiornare il corso -->

        <div class="form-group">
            <label for="title">Titolo del Corso</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $course->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Descrizione del Corso</label>
            <textarea name="description" class="form-control" id="description" required>{{ old('description', $course->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="instructor">Istruttore</label>
            <input type="text" name="instructor" class="form-control" id="instructor" value="{{ old('instructor', $course->instructor) }}" required>
        </div>

        <div class="form-group">
            <label for="duration">Durata (in ore)</label>
            <input type="number" name="duration" class="form-control" id="duration" value="{{ old('duration', $course->duration) }}" required>
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" name="price" class="form-control" id="price" step="0.01" value="{{ old('price', $course->price) }}" required>
        </div>

        <div class="form-group">
            <label for="published">Pubblicato</label>
            <select name="published" class="form-control" id="published" required>
                <option value="1" {{ $course->published ? 'selected' : '' }}>Sì</option>
                <option value="0" {{ !$course->published ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna Corso</button>
    </form>
@endsection
