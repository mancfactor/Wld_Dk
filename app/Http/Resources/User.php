<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class User extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // customize what you return 
        return [
            'name' => $this->name,
            'email' => $this->email,
            'admin' => ($this->admin === 1)
        ];
    }

    // Additional stuff alongside data
    public function with($request) {
        return ['status' => 'success'];
    }

}
