<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jalon;

class JalonController extends Controller
{
    public function index()
    {
        return Jalon::all();
    }

    public function show($id)
    {
        return Jalon::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Jalon::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Jalon::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        return Jalon::destroy($id);
    }
}
