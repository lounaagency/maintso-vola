<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AimerProjet;

class AimerProjetController extends Controller
{
    public function index()
    {
        return AimerProjet::all();
    }

    public function show($id)
    {
        return AimerProjet::findOrFail($id);
    }

    public function store(Request $request)
    {
        return AimerProjet::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = AimerProjet::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        return AimerProjet::destroy($id);
    }
}
