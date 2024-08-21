<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ShoeStock;
use Faker\Factory as Faker;

class ShoeStockController extends Controller
{
    public function index()
    {
        return ShoeStock::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'shoe_name' => 'required|string|max:255',
            'size' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        ShoeStock::create($validated);
        return response()->json('Chaussure ajoutée avec succès', 200);
    }

    public function show($id)
    {
        return ShoeStock::find($id);
    }

    public function update(Request $request, $id)
    {
        $shoeStock = ShoeStock::findOrFail($id);
        $shoeStock->update($request->all());
        return response()->json($shoeStock, 200);
    }

    public function destroy($id)
    {
        ShoeStock::destroy($id);
        return response()->json(null, 200);
    }
}