<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        return Projet::all();
    }

    public function store(Request $request)
    {
        $projet = Projet::create($request->all());
        return response()->json($projet, 201);
    }

    public function show($id)
    {
        return Projet::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $projet = Projet::findOrFail($id);
        $projet->update($request->all());
        return response()->json($projet);
    }

    public function destroy($id)
    {
        Projet::destroy($id);
        return response()->json(null, 204);
    }
}
