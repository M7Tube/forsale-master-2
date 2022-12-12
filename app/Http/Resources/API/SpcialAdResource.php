<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class SpcialAdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->en_title) {
            return [
                'spcial_ad_id' => $this->spcial_ad_id,
                'title' => $this->en_title,
                'desc' => $this->en_desc,
                'is_golden' => $this->is_golden,
                'duration' => $this->duration,
                'picture' => 'https://waseetco.com/storage/app/img/' . $this->picture,
                'user_id' => $this->user_id,
            ];
        }
        if ($this->ar_title) {
            return [
                'spcial_ad_id' => $this->spcial_ad_id,
                'title' => $this->ar_title,
                'desc' => $this->ar_desc,
                'is_golden' => $this->is_golden,
                'duration' => $this->duration,
                'picture' => 'https://waseetco.com/storage/app/img/' . $this->picture,
                'user_id' => $this->user_id,
            ];
        }
        // return parent::toArray($request);
    }
}
