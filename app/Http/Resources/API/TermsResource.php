<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class TermsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->ar_terms_conditions) {
            return [
                'term_id' => $this->term_id,
                'terms_conditions' => $this->ar_terms_conditions,
            ];
        }
        if ($this->en_terms_conditions) {
            return [
                'term_id' => $this->term_id,
                'terms_conditions' => $this->en_terms_conditions,
            ];
        }
        // return parent::toArray($request);
    }
}
