<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Services\CloudinaryService;

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
            'image' => 'nullable|image|max:5120',
            'image_url' => 'nullable|string',
        ]);

        $data = $request->only(['name', 'image_url']);

        if ($request->hasFile('image')) {
            $uploadedUrl = CloudinaryService::upload($request->file('image'));
            if ($uploadedUrl) {
                $data['image_url'] = $uploadedUrl;
            }
        }

        $area = Area::create($data);

        return response()->json($area, 201);
    }

    public function show(Area $area)
    {
        return response()->json($area);
    }

    public function update(Request $request, Area $area)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|max:5120',
            'image_url' => 'nullable|string',
        ]);

        $data = $request->only(['name']);

        if ($request->filled('image_url')) {
            $data['image_url'] = $request->input('image_url');
        }

        if ($request->hasFile('image')) {
            $uploadedUrl = CloudinaryService::upload($request->file('image'));
            if ($uploadedUrl) {
                $data['image_url'] = $uploadedUrl;
            }
        }

        $area->update($data);

        return response()->json($area);
    }

    public function destroy(Area $area)
    {
        $area->delete();
        return response()->json($area);
    }
}
