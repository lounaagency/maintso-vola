<?php

namespace App\Http\Controllers;

use App\Models\Investissement;
use Illuminate\Http\Request;

class InvestissementController extends Controller
{
    public function index()
    {
        return Investissement::all();
    }

    public function store(Request $request)
    {
        $investissement = Investissement::create($request->all());
        return response()->json($investissement, 201);
    }

    public function show($id)
    {
        return Investissement::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $investissement = Investissement::findOrFail($id);
        $investissement->update($request->all());
        return response()->json($investissement);
    }

    public function destroy($id)
    {
        Investissement::destroy($id);
        return response()->json(null, 204);
    }
}
