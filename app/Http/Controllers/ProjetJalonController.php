<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjetJalon;

class ProjetJalonController extends Controller
{
    public function index()
    {
        return ProjetJalon::all();
    }

    public function show($id)
    {
        return ProjetJalon::findOrFail($id);
    }

    public function store(Request $request)
    {
        return ProjetJalon::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = ProjetJalon::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        return ProjetJalon::destroy($id);
    }
}
