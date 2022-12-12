<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class SingleCarResource extends JsonResource
{
    /**
     * Transform the resoadurce into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $listOfPicture = [];
        foreach (json_decode($this->picture) as $pic) {
            if (Storage::exists('img/' . $pic)) {
                array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
            } else {
                array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
            }
        }
        // return parent::toArray($request);
        if ($this->ar_title) {
            return [
                'title' => $this->ar_title ?? $this->en_title,
                'desc' => $this->ar_desc ?? $this->en_desc,
                'phone_number' => $this->phone_number,
                'manger_accept' => $this->manger_accept,
                'isPhone_visable' => $this->isPhone_visable,
                'price' => $this->price,
                'picture' => $listOfPicture,
                'is_special' => $this->is_special,
                'watch_count' => $this->watch_count,
                'manufacturing_year' => $this->manufacturing_year,
                'kilometrag' => $this->kilometrag,
                'car_type' => $this->CarType->ar_name ?? null,
                'car_status' => $this->CarStatus->ar_name ?? null,
                'continent' => $this->ContinentOfOrigins->ar_name ?? null,
                'RentOrSale' => $this->RentOrSale->ar_name ?? null,
                'motion_vector' => $this->MotionVector->ar_name ?? null,
                'user' => ($this->User->first_name ?? null) . ($this->User->last_name ?? null),
                'CountryOfManufacture' => $this->CountryOfManufacture->ar_name ?? null,
                'rental_time' => $this->RentalTime->ar_rent_name ?? null,
                'color' => $this->Color->ar_name ?? null,
                'governorate' => $this->governorate->ar_name ?? null,
                'ad_type' => $this->AdType->ar_name ?? null,
                'ad_statuse' => $this->AdStatus->ar_name ?? null,
                'created_at' => $this->created_at ?? null,
            ];
        }
        if ($this->en_title) {
            return [
                'title' => $this->en_title ?? $this->ar_title,
                'desc' => $this->en_desc ?? $this->ar_desc,
                'phone_number' => $this->phone_number,
                'manger_accept' => $this->manger_accept,
                'isPhone_visable' => $this->isPhone_visable,
                'price' => $this->price,
                'picture' => $listOfPicture,
                'is_special' => $this->is_special,
                'watch_count' => $this->watch_count,
                'manufacturing_year' => $this->manufacturing_year,
                'kilometrag' => $this->kilometrag,
                'car_type' => $this->CarType->en_name ?? null,
                'car_status' => $this->CarStatus->en_name ?? null,
                'continent' => $this->ContinentOfOrigins->en_name ?? null,
                'RentOrSale' => $this->RentOrSale->en_name ?? null,
                'motion_vector' => $this->MotionVector->en_name ?? null,
                'user' => ($this->User->first_name ?? null) . ($this->User->last_name ?? null),
                'CountryOfManufacture' => $this->CountryOfManufacture->en_name ?? null,
                'rental_time' => $this->RentalTime->en_rent_name ?? null,
                'color' => $this->Color->en_name ?? null,
                'governorate' => $this->governorate->en_name ?? null,
                'ad_type' => $this->AdType->en_name ?? null,
                'ad_statuse' => $this->AdStatus->en_name ?? null,
                'created_at' => $this->created_at ?? null,
            ];
        }
    }
}
