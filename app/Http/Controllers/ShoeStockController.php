<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShoeStockRequest;
use App\Http\Requests\UpdateShoeStockRequest;
use App\Models\ShoeStock;
use Illuminate\Http\Request;

class ShoeStockController extends Controller
{
    public function index()
    {
        return ShoeStock::all();
    }

    public function store(StoreShoeStockRequest $request)
    {
        ShoeStock::create($request->validated());
        return response()->json('Chaussure ajoutée avec succès', 200);
    }

    public function show($id)
    {
        return ShoeStock::find($id);
    }

    public function update(UpdateShoeStockRequest $request, $id)
    {
        $shoeStock = ShoeStock::findOrFail($id);
        $shoeStock->update($request->validated());
        return response()->json($shoeStock, 200);
    }

    public function destroy($id)
    {
        ShoeStock::destroy($id);
        return response()->json(null, 200);
    }
}