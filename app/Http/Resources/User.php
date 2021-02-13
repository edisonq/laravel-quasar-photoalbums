<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'         => $this->id,
            'name'       => $this->name,
            'email'    => $this->email,
            'address'    => $this->email,
            'phone'    => $this->phone,
            'website'    => $this->website,
            'company'    => $this->copmany,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
