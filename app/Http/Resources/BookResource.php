<?php

namespace App\Http\Resources;
use App\Http\Resources\AuthorResource;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'author' =>  AuthorResource::collection($this->author)
        ];
    }
}