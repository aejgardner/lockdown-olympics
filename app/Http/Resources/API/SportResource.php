<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class SportResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "start_time" => $this->start_time,
            "arena" => $this->arena,
            "category_id" => $this->category_id,
            "img_pathway" => $this->img_pathway,
        ];
    }
}
