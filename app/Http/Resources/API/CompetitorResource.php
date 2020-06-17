<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class CompetitorResource extends JsonResource
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
            "bio" => $this->bio,
            "dob" => $this->dob,
            "sport" => $this->sport->name,
            "img_pathway" => $this->img_pathway,
        ];
    }
}
