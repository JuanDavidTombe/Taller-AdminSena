<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return response()->json($computers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|max:255',
            'brand' => 'required|max:255',
        ]);
        $computer = Computer::create($request->all());

        return response()->json($computer);
    }

    public function show(Computer $computer)
    {
        return response()->json($computer);
    }

    public function update(Request $request, Computer $computer)
    {
        $request->validate([
            'number' => 'required|max:255',
            'brand' => 'required|max:255',
        ]);

        $computer->update($request->all());

        return response()->json($computer);
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();
        return response()->json($computer);
    }
}
