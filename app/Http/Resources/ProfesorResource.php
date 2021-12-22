<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfesorResource extends JsonResource
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
            'jmbg' => $this->resource->jmbg,
            'email' => $this->resource->email,
            'adresa' => $this->resource->adresa,
            'predmet' => $this->resource->predmet,
            'skola' => new SkolaResource($this->resource->skola)
        ];
    }
}
