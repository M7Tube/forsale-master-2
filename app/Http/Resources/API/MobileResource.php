<?php

namespace App\Http\Resources\API;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

class MobileResource extends JsonResource
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
        $listOfPicture = [];
        foreach (json_decode($this->picture) as $pic) {
            if (Storage::exists('img/' . $pic)) {
                array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
            } else {
                array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
            }
        }
        // return parent::toArray($request);
        if (request('lang') == 'ar') {
            return [
                'id' => $this->mobile_id,
                'title' => $this->ar_title ?? $this->en_title,
                'picture' => $listOfPicture,
                'is_special' => $this->is_special,
                'price' => $this->price,
                'category' => 4,
                'manger_accept' => $this->manger_accept,
                'governorate' => $this->governorate->ar_name ?? "",
                'created_at' => $this->created_at
            ];
        }
        if (request('lang') == 'en') {
            return [
                'id' => $this->mobile_id,
                'title' => $this->en_title ?? $this->ar_title,
                'picture' => $listOfPicture,
                'is_special' => $this->is_special,
                'price' => $this->price,
                'category' => 4,
                'manger_accept' => $this->manger_accept,
                'governorate' => $this->governorate->en_name ?? "",
                'created_at' => $this->created_at
            ];
        }
    }
}
