<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use Illuminate\Http\Request;

class CultureController extends Controller
{
    public function index()
    {
        return Culture::all();
    }

    public function store(Request $request)
    {
        $culture = Culture::create($request->all());
        return response()->json($culture, 201);
    }

    public function show($id)
    {
        return Culture::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $culture = Culture::findOrFail($id);
        $culture->update($request->all());
        return response()->json($culture);
    }

    public function destroy($id)
    {
        Culture::destroy($id);
        return response()->json(null, 204);
    }
}
