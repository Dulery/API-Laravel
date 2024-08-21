<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class ShoeStockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->shoe_name,
            'quantity' => $this->quantity,
            'created_at' => $this->created_at,
            'updated_at' => $this->when(false, $this->updated_at),
        ];
    }
}