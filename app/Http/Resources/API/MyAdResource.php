<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class MyAdResource extends JsonResource
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
        if (request('lang') == 'ar') {
            return [
                'id' => $this->data->cars->car_id ?? null,
                'title' => $this->data->cars->ar_title ?? null,
                'desc' => $this->data->cars->ar_desc ?? null,
                'phone_number' => $this->data->cars->phone_number ?? null,
                'picture' =>  'https://waseetco.com/storage/app/img/' . ($this->data->cars->picture ?? null),
                'is_special' => $this->data->cars->is_special ?? null,
                'price' => $this->data->cars->price ?? null,
                'manger_accept' => $this->data->cars->manger_accept ?? null,
                'governorate' => $this->data->cars->governorate->ar_name ?? null,
                'created_at' => $this->data->cars->created_at ?? null,
                // 'real_estates' => [],
                // 'jobs' => []
            ];
        } else {
        }
    }
}
