<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return response()->json($matakuliah);
    }

    public function store(Request $request)
    {
        $matakuliah = Matakuliah::create($request->all());
        return response()->json($matakuliah, 201);
    }

    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return response()->json($matakuliah);
    }

    public function update(Request $request, $id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->update($request->all());
        return response()->json($matakuliah);
    }

    public function destroy($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->delete();
        return response()->json(null, 204);
    }
}
