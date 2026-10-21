<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_number' => 'required|max:255',
            'day' => 'required|in:Lunes,Martes,Miércoles,Jueves,Viernes',
        ]);
        $course = Course::create($request->all());

        return response()->json($course);
    }

    public function show(Course $course)
    {
        return response()->json($course);
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_number' => 'required|max:255',
            'day' => 'required|in:Lunes,Martes,Miércoles,Jueves,Viernes',
        ]);

        $course->update($request->all());

        return response()->json($course);
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return response()->json($course);
    }
}
