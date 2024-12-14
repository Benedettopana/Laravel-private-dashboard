<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // View di tutti i corsi
    public function index(){
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    // View del form add new Course
    public function create(){
        return view('courses.create');
    }

    // Save del new Course
    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'published' => 'required|boolean',
        ]);

        Course::create($validated); // Crea un nuovo corso

        return redirect()->route('courses.index')->with('success', 'Corso creato con successo.');
    }

    // View del singolo corso
    public function show(Course $course){
        return view('courses.show', compact('course'));
    }

    // view del form edit
    public function edit(Course $course){
        return view('courses.edit', compact('course'));
    }

    // edit Course
    public function update(Request $request, Course $course){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'published' => 'required|boolean',
        ]);

        $course->update($validated); // Aggiorna il corso

        return redirect()->route('courses.index')->with('success', 'Corso aggiornato con successo.');
    }

     // Delete Course
    public function destroy(Course $course)
    {
        $course->delete(); // Elimina il corso

        return redirect()->route('courses.index')->with('success', 'Corso eliminato con successo.');
    }
}
