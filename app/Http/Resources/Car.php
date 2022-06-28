<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Car extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'descriptions' => $this->descriptions,
            'price' => $this->price,
            'image' => "http://127.0.0.1/image/".$this->image,
            'mf_id' => $this->mf_id,
        ];
    }
}
