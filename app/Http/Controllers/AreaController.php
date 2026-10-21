<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return response()->json($areas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $area = Area::create($request->all());

        return response()->json($area);
    }

    public function show(Area $area)
    {
        return response()->json($area);
    }

    public function update(Request $request, Area $area)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $area->update($request->all());

        return response()->json($area);
    }

    public function destroy(Area $area)
    {
        $area->delete();
        return response()->json($area);
    }
}
