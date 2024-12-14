<!-- resources/views/dashboard/courses/create.blade.php -->
@extends('layouts.dashboard_layout')

@section('content')
    <h2>Aggiungi un nuovo corso</h2>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo del Corso</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>

        <div class="form-group">
            <label for="description">Descrizione del Corso</label>
            <textarea name="description" class="form-control" id="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="instructor">Istruttore</label>
            <input type="text" name="instructor" class="form-control" id="instructor" required>
        </div>

        <div class="form-group">
            <label for="duration">Durata (in ore)</label>
            <input type="number" name="duration" class="form-control" id="duration" required>
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" name="price" class="form-control" id="price" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="published">Pubblicato</label>
            <select name="published" class="form-control" id="published" required>
                <option value="1">Sì</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="d-flex gap-3 mt-4">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary ">Crea Corso</button>
        </div>
    </form>
@endsection
