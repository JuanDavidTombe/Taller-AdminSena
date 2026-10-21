<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;

class ApprenticeController extends Controller
{
    public function consulta1()
    {
        $respuesta = Apprentice::with(['course.trainingCenter', 'course.teachers', 'computer'])->get();
        return response()->json($respuesta);
    }

    public function index()
    {
        $apprentices = Apprentice::all();
        return response()->json($apprentices);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|max:255',
        ]);
        $apprentice = Apprentice::create($request->all());

        return response()->json($apprentice);
    }

    public function show(Apprentice $apprentice)
    {
        return response()->json($apprentice);
    }

    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|max:255',
        ]);

        $apprentice->update($request->all());

        return response()->json($apprentice);
    }

    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return response()->json($apprentice);
    }
}
