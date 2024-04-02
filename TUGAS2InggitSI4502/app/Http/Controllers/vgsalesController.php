<?php

namespace App\Http\Controllers;

use App\Models\vgsale;
use Illuminate\Http\Request;

class vgsalesController extends Controller
{
    // Read data keseluruhan
    public function index()
    {
        $vgsales = vgsale::all();
        return response()->json($vgsales);
    }

    // Create data baru
    public function store(Request $request)
    {
        $vgsales = vgsale::create($request->all());
        return response()->json(['message' => 'Video Games Created successfully'], 201);
    }

    // Read detail satuan
    public function show($id)
    {
        $vgsales = vgsale::findOrFail($id);
        return response()->json($vgsales);
    }
    
    // Update data
    public function update(Request $request, $id)
    {
        $vgsales = vgsale::findOrFail($id);
        $vgsales->update($request->all());

        return response()->json(['message' => 'Video Games updated successfully'], 200);
    }

    // Delete data
    public function destroy($id)
    {
        $vgsales = vgsale::findOrFail($id);
        $vgsales->delete();

        return response()->json(['message' => 'Video Games deleted successfully'], 200);
    }
}
