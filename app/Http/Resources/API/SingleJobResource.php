<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class SingleJobResource extends JsonResource
{
    /**
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
        // sd
        // return parent::toArray($request);
        if (request('lang') == 'ar') {
            return [
                'title' => $this->ar_title ?? $this->en_title,
                'desc' => $this->ar_desc ?? $this->en_desc,
                'phone_number' => $this->phone_number,
                'manger_accept' => $this->manger_accept,
                'isPhone_visable' => $this->isPhone_visable,
                'qualification' => $this->qualification,
                'age' => $this->age,
                'salary' => $this->salary,
                'work_hour' => $this->work_hour,
                'extra_work_hour' => $this->extra_work_hour,
                'work_hour_rent' => $this->work_hour_rent,
                'driving_license' => $this->driving_license,
                'picture' => $listOfPicture,
                'is_special' => $this->is_special,
                'watch_count' => $this->watch_count,
                'user' => ($this->User->first_name ?? null) . ($this->User->last_name ?? null),
                'governorate' => $this->governorate->ar_name ?? null,
                'area' => $this->Area->ar_name ?? null,
                'jobs_categorie' => $this->JobCategory->ar_name ?? null,
                'lang' => $this->PersonLanguage->ar_name ?? null,
                'YOE' => $this->YearsOfExperience->ar_name ?? null,
                'ad_type' => $this->AdType->ar_name ?? null,
                'ad_statuse' => $this->AdStatus->ar_name ?? null,
                'created_at' => $this->created_at ?? null,
            ];
        }
        if (request('lang') == 'en') {
            return [
                'title' => $this->en_title ?? $this->ar_title,
                'desc' => $this->en_desc ?? $this->ar_desc,
                'phone_number' => $this->phone_number,
                'manger_accept' => $this->manger_accept,
                'isPhone_visable' => $this->isPhone_visable,
                'qualification' => $this->qualification,
                'age' => $this->age,
                'salary' => $this->salary,
                'work_hour' => $this->work_hour,
                'extra_work_hour' => $this->extra_work_hour,
                'work_hour_rent' => $this->work_hour_rent,
                'driving_license' => $this->driving_license,
                'picture' => $listOfPicture,
                'is_special' => $this->is_special,
                'watch_count' => $this->watch_count,
                'user' => ($this->User->first_name ?? null) . ($this->User->last_name ?? null),
                'governorate' => $this->governorate->en_name ?? null,
                'area' => $this->Area->en_name ?? null,
                'jobs_categorie' => $this->JobCategory->en_name ?? null,
                'lang' => $this->PersonLanguage->en_name ?? null,
                'YOE' => $this->YearsOfExperience->en_name ?? null,
                'ad_type' => $this->AdType->en_name ?? null,
                'ad_statuse' => $this->AdStatus->en_name ?? null,
                'created_at' => $this->created_at ?? null,
            ];
        }
    }
}
