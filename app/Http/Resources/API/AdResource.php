<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class AdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        // return [
        //     'ad_id' => $this->ad_id,
        //     'name' => $this->name,
        //     'descriptions' => $this->descriptions,
        //     'phone_number' => $this->phone_number,
        //     'picture' => 'https://waseetco.com/storage/app/img/' . $this->picture,
        //     'is_special' => $this->is_special,
        //     'price' => $this->price,
        //     'manger_accept' => $this->manger_accept,
        //     'created_at' => $this->created_at,
        // ];
    }
}
