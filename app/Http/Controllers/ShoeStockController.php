<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShoeStockRequest;
use App\Http\Requests\UpdateShoeStockRequest;
use App\Models\ShoeStock;
use App\Http\Resources\ShoeStockResource;

class ShoeStockController extends Controller
{
    public function index()
    {
        return ShoeStockResource::collection(ShoeStock::all());
    }

    public function store(StoreShoeStockRequest $request)
    {
        $shoeStock = ShoeStock::create($request->validated());
        return new ShoeStockResource($shoeStock);
    }

    public function show($id)
    {
        $shoeStock = ShoeStock::findOrFail($id);
        return new ShoeStockResource($shoeStock);
    }

    public function update(UpdateShoeStockRequest $request, $id)
    {
        $shoeStock = ShoeStock::findOrFail($id);
        $shoeStock->update($request->validated());
        return new ShoeStockResource($shoeStock);
    }

    public function destroy($id)
    {
        $shoeStock = ShoeStock::findOrFail($id);
        $shoeStock->delete();
        return response()->json(null, 204);
    }
}
