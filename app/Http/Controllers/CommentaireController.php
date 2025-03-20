<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function index()
    {
        return Commentaire::all();
    }

    public function store(Request $request)
    {
        $commentaire = Commentaire::create($request->all());
        return response()->json($commentaire, 201);
    }

    public function show($id)
    {
        return Commentaire::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $commentaire = Commentaire::findOrFail($id);
        $commentaire->update($request->all());
        return response()->json($commentaire);
    }

    public function destroy($id)
    {
        Commentaire::destroy($id);
        return response()->json(null, 204);
    }
}
