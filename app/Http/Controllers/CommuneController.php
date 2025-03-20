<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    public function index()
    {
        return Commune::all();
    }

    public function store(Request $request)
    {
        $commune = Commune::create($request->all());
        return response()->json($commune, 201);
    }

    public function show($id)
    {
        return Commune::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $commune = Commune::findOrFail($id);
        $commune->update($request->all());
        return response()->json($commune);
    }

    public function destroy($id)
    {
        Commune::destroy($id);
        return response()->json(null, 204);
    }
}
