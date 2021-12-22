<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UcenikResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'ime' => $this->resource->ime,
            'prezime' => $this->resource->prezime,
            'adresa' => $this->resource->adresa,
            'email' => $this->resource->email,
            'profesor' => new ProfesorResource($this->resource->profesor)
        ];
    }
}
