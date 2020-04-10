<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'store_type_id' => $this->store_type_id,
            'phone_number' => $this->phone_number,
            'name' => $this->name,
            'address_line_1' => $this->address,
            'city' => $this->city,
            'zip' => $this->postcode,
            'photo' => $this->photo,
            'delivery' => $this->delivery,
            'schedule' => $this->schedule,
        ];
    }
}
