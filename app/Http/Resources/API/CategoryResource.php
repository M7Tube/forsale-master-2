<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->en_name) {
            return [
                'main_categorie_id' => $this->main_categorie_id,
                'name' => $this->en_name,
                'icon' => $this->icon,
            ];
        }
        if ($this->ar_name) {
            return [
                'main_categorie_id' => $this->main_categorie_id,
                'name' => $this->ar_name,
                'icon' => $this->icon,
            ];
        }
        // return parent::toArray($request);
    }
}
