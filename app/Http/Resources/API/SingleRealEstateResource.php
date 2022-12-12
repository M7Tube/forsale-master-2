<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class SingleRealEstateResource extends JsonResource
{
    /**fds
     * Transform the resource into an array.
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
                'apartment_size' => $this->apartment_size,
                'land_size' => $this->land_size,
                'building_size' => $this->building_size,
                'floor' => $this->floor,
                'room_count' => $this->room_count,
                'elevator' => $this->elevator,
                'user' => ($this->User->first_name ?? null) . ($this->User->last_name ?? null),
                'RentOrSale' => $this->RentOrSale->ar_name ?? null,
                'RealEstateMainCategory' => $this->RealEstateMainCategory->ar_name ?? null,
                'apartment_status' => $this->ApartmentStatus->ar_name ?? null,
                'building_statuse' => $this->BuildingStatus->ar_name ?? null,
                'CommercialAndArtificialType' => $this->CommercialAndArtificialType->ar_name ?? null,
                'land_type' => $this->LandType->ar_name ?? null,
                'governorate' => $this->governorate->ar_name ?? null,
                'area' => $this->Area->ar_name ?? null,
                'neighborhood' => $this->Neighborhood->ar_name ?? null,
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
                'apartment_size' => $this->apartment_size,
                'land_size' => $this->land_size,
                'building_size' => $this->building_size,
                'floor' => $this->floor,
                'room_count' => $this->room_count,
                'elevator' => $this->elevator,
                'user' => ($this->User->first_name ?? null) . ($this->User->last_name ?? null),
                'RentOrSale' => $this->RentOrSale->en_name ?? null,
                'RealEstateMainCategory' => $this->RealEstateMainCategory->en_name ?? null,
                'apartment_status' => $this->ApartmentStatus->en_name ?? null,
                'building_statuse' => $this->BuildingStatus->en_name ?? null,
                'CommercialAndArtificialType' => $this->CommercialAndArtificialType->en_name ?? null,
                'land_type' => $this->LandType->en_name ?? null,
                'governorate' => $this->governorate->en_name ?? null,
                'area' => $this->Area->en_name ?? null,
                'neighborhood' => $this->Neighborhood->en_name ?? null,
                'ad_type' => $this->AdType->en_name ?? null,
                'ad_statuse' => $this->AdStatus->en_name ?? null,
                'created_at' => $this->created_at ?? null,
            ];
        }
    }
}
