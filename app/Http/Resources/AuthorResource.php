<?php

namespace App\Http\Resources;
use App\Http\Resources\ProductResource;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'github' => $this->github,
            'twitter' => $this->twitter,
            'location' => $this->location,
            'product' =>  ProductResource::collection($this->product) 
        ];
    }
}