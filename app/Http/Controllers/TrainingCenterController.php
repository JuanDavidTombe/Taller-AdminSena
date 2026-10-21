<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    public function index()
    {
        $trainingCenters = Training_center::all();
        return response()->json($trainingCenters);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'location' => 'required|max:255',
        ]);
        $trainingCenter = Training_center::create($request->all());

        return response()->json($trainingCenter);
    }

    public function show(Training_center $training_center)
    {
        return response()->json($training_center);
    }

    public function update(Request $request, Training_center $training_center)
    {
        $request->validate([
            'name' => 'required|max:255',
            'location' => 'required|max:255',
        ]);

        $training_center->update($request->all());

        return response()->json($training_center);
    }

    public function destroy(Training_center $training_center)
    {
        $training_center->delete();
        return response()->json($training_center);
    }
}
