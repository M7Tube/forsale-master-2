<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class FavoriteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *f
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->car_id != 0) {
            if (request('lang') == 'ar') {
                $listOfPicture = [];
                foreach (json_decode($this->car->picture) as $pic) {
                    if (Storage::exists('img/' . $pic)) {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    } else {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/default.png');
                    }
                }
                return [
                    'favorite_id' => $this->favorite_id,
                    'user' => ($this->user->first_name ?? null) . ' ' . ($this->user->last_name ?? null),
                    'created_at' => $this->created_at,
                    'ad' => [
                        'id' => $this->car->car_id ?? null,
                        'title' => $this->car->ar_title ?? $this->car->en_title,
                        'desc' => $this->car->ar_desc ?? $this->car->en_desc,
                        'phone_number' => $this->car->phone_number ?? null,
                        'picture' =>  $listOfPicture,
                        'is_special' => $this->car->is_special ?? null,
                        'price' => $this->car->price ?? null,
                        'governorate' => $this->car->governorate->ar_name ?? null,
                        'category' => 1,
                        'created_at' => $this->car->created_at ?? null,
                    ]
                ];
            } else if (request('lang') == 'en') {
                $listOfPicture = [];
                foreach (json_decode($this->car->picture) as $pic) {
                    if (Storage::exists('img/' . $pic)) {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    } else {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    }
                }
                return [
                    'favorite_id' => $this->favorite_id,
                    'user' => ($this->user->first_name ?? null) . ' ' . ($this->user->last_name ?? null),
                    'created_at' => $this->created_at,
                    'ad' => [
                        'id' => $this->car->car_id ?? null,
                        'title' => $this->car->en_title ?? $this->car->ar_title,
                        'desc' => $this->car->en_desc ?? $this->car->ar_desc,
                        'phone_number' => $this->car->phone_number ?? null,
                        'picture' =>  $listOfPicture,
                        'is_special' => $this->car->is_special ?? null,
                        'price' => $this->car->price ?? null,
                        'governorate' => $this->car->governorate->en_name ?? null,
                        'category' => 1,
                        'created_at' => $this->car->created_at ?? null,
                    ]
                ];
            }
        } else if ($this->real_estate_id != 0) {
            if (request('lang') == 'ar') {
                $listOfPicture = [];
                foreach (json_decode($this->real_estate->picture) as $pic) {
                    if (Storage::exists('img/' . $pic)) {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    } else {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    }
                }
                return [
                    'favorite_id' => $this->favorite_id,
                    'user' => ($this->user->first_name ?? null) . ' ' . ($this->user->last_name ?? null),
                    'created_at' => $this->created_at,
                    'ad' => [
                        'id' => $this->real_estate->real_estate_id,
                        'title' => $this->real_estate->ar_title ?? $this->real_estate->en_title,
                        'desc' => $this->real_estate->ar_desc ?? $this->real_estate->en_desc,
                        'phone_number' => $this->real_estate->phone_number,
                        'picture' => $listOfPicture,
                        'is_special' => $this->real_estate->is_special,
                        'price' => $this->real_estate->price,
                        'governorate' => $this->real_estate->governorate->ar_name,
                        'category' => 2,
                        'created_at' => $this->real_estate->created_at,
                    ]
                ];
            } else if (request('lang') == 'en') {
                $listOfPicture = [];
                foreach (json_decode($this->real_estate->picture) as $pic) {
                    if (Storage::exists('img/' . $pic)) {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    } else {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    }
                }
                return [
                    'favorite_id' => $this->favorite_id,
                    'user' => ($this->user->first_name ?? null) . ' ' . ($this->user->last_name ?? null),
                    'created_at' => $this->created_at,
                    'ad' => [
                        'id' => $this->real_estate->real_estate_id,
                        'title' => $this->real_estate->en_title ?? $this->real_estate->ar_title,
                        'desc' => $this->real_estate->en_desc ?? $this->real_estate->ar_desc,
                        'phone_number' => $this->real_estate->phone_number,
                        'picture' => $listOfPicture,
                        'is_special' => $this->real_estate->is_special,
                        'price' => $this->real_estate->price,
                        'governorate' => $this->real_estate->governorate->en_name,
                        'category' => 2,
                        'created_at' => $this->real_estate->created_at,
                    ]
                ];
            }
        } else if ($this->job_id != 0) {
            if (request('lang') == 'ar') {
                $listOfPicture = [];
                foreach (json_decode($this->job->picture) as $pic) {
                    if (Storage::exists('img/' . $pic)) {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    } else {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    }
                }
                return [
                    'favorite_id' => $this->favorite_id,
                    'user' => ($this->user->first_name ?? null) . ' ' . ($this->user->last_name ?? null),
                    'created_at' => $this->created_at,
                    'ad' => [
                        'id' => $this->job->job_id,
                        'title' => $this->job->ar_title ?? $this->job->en_title,
                        'desc' => $this->job->ar_desc ?? $this->job->en_desc,
                        'phone_number' => $this->job->phone_number,
                        'picture' => $listOfPicture,
                        'is_special' => $this->job->is_special,
                        'price' => $this->job->salary,
                        'governorate' => $this->job->governorate->ar_name,
                        'category' => 3,
                        'created_at' => $this->job->created_at
                    ]
                ];
            } else if (request('lang') == 'en') {
                $listOfPicture = [];
                foreach (json_decode($this->job->picture) as $pic) {
                    if (Storage::exists('img/' . $pic)) {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    } else {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    }
                }
                return [
                    'favorite_id' => $this->favorite_id,
                    'user' => ($this->user->first_name ?? null) . ' ' . ($this->user->last_name ?? null),
                    'created_at' => $this->created_at,
                    'ad' => [
                        'id' => $this->job->job_id,
                        'title' => $this->job->en_title ?? $this->job->ar_title,
                        'desc' => $this->job->en_desc ?? $this->job->ar_desc,
                        'phone_number' => $this->job->phone_number,
                        'picture' => $listOfPicture,
                        'is_special' => $this->job->is_special,
                        'price' => $this->job->salary,
                        'governorate' => $this->job->governorate->en_name,
                        'category' => 3,
                        'created_at' => $this->job->created_at
                    ]
                ];
            }
        } else if ($this->mobile_id != 0) {
            if (request('lang') == 'ar') {
                $listOfPicture = [];
                foreach (json_decode($this->mobile->picture) as $pic) {
                    if (Storage::exists('img/' . $pic)) {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    } else {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    }
                }
                return [
                    'mobile_id' => $this->mobile_id,
                    'user' => ($this->user->first_name ?? null) . ' ' . ($this->user->last_name ?? null),
                    'created_at' => $this->created_at,
                    'ad' => [
                        'id' => $this->mobile->mobile_id,
                        'title' => $this->mobile->ar_title ?? $this->mobile->en_title,
                        'desc' => $this->mobile->ar_desc ?? $this->mobile->en_desc,
                        'phone_number' => $this->mobile->phone_number,
                        'picture' => $listOfPicture,
                        'is_special' => $this->mobile->is_special,
                        'price' => $this->mobile->price,
                        'governorate' => $this->mobile->governorate->ar_name,
                        'category' => 4,
                        'created_at' => $this->mobile->created_at,
                    ]
                ];
            } else if (request('lang') == 'en') {
                $listOfPicture = [];
                foreach (json_decode($this->mobile->picture) as $pic) {
                    if (Storage::exists('img/' . $pic)) {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    } else {
                        array_push($listOfPicture, 'https://waseetco.com/storage/app/img/' . $pic);
                    }
                }
                return [
                    'favorite_id' => $this->favorite_id,
                    'user' => ($this->user->first_name ?? null) . ' ' . ($this->user->last_name ?? null),
                    'created_at' => $this->created_at,
                    'ad' => [
                        'id' => $this->mobile->mobile_id,
                        'title' => $this->mobile->en_title ?? $this->mobile->ar_title,
                        'desc' => $this->mobile->en_desc ?? $this->mobile->ar_desc,
                        'phone_number' => $this->mobile->phone_number,
                        'picture' => $listOfPicture,
                        'is_special' => $this->mobile->is_special,
                        'price' => $this->mobile->price,
                        'governorate' => $this->mobile->governorate->en_name,
                        'category' => 4,
                        'created_at' => $this->mobile->created_at,
                    ]
                ];
            }
        }
    }
}
