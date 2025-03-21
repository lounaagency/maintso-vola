<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index()
    {
        return Photo::all();
    }

    public function show($id)
    {
        return Photo::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Photo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Photo::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        return Photo::destroy($id);
    }
}
