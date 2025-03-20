<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    public function index()
    {
        return Terrain::all();
    }

    public function store(Request $request)
    {
        $terrain = Terrain::create($request->all());
        return response()->json($terrain, 201);
    }

    public function show($id)
    {
        return Terrain::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $terrain = Terrain::findOrFail($id);
        $terrain->update($request->all());
        return response()->json($terrain);
    }

    public function destroy($id)
    {
        Terrain::destroy($id);
        return response()->json(null, 204);
    }
}
