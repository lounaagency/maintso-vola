<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeCulture;

class TypeCultureController extends Controller
{
    public function index()
    {
        return TypeCulture::all();
    }

    public function show($id)
    {
        return TypeCulture::findOrFail($id);
    }

    public function store(Request $request)
    {
        return TypeCulture::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = TypeCulture::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        return TypeCulture::destroy($id);
    }
}
