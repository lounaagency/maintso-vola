<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjetCulture;

class ProjetCultureController extends Controller
{
    public function index()
    {
        return ProjetCulture::all();
    }

    public function show($id)
    {
        return ProjetCulture::findOrFail($id);
    }

    public function store(Request $request)
    {
        return ProjetCulture::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = ProjetCulture::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        return ProjetCulture::destroy($id);
    }
}
