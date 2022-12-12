<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class RentalTimeResource extends JsonResource
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
        if ($this->ar_rent_name) {
            return [
                'rental_time_id' => $this->rental_time_id,
                'name' => $this->ar_rent_name,
            ];
        }
        if ($this->en_rent_name) {
            return [
                'rental_time_id' => $this->rental_time_id,
                'name' => $this->en_rent_name,
            ];
        }
    }
}
