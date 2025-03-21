<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AimerCommentaire;

class AimerCommentaireController extends Controller
{
    public function index()
    {
        return AimerCommentaire::all();
    }

    public function show($id)
    {
        return AimerCommentaire::findOrFail($id);
    }

    public function store(Request $request)
    {
        return AimerCommentaire::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = AimerCommentaire::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        return AimerCommentaire::destroy($id);
    }
}
