<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddmovieRequest extends FormRequest
{


    
    public function rules()
    {
        return [
            'category_id'=>[],
            'name'=> [],
            'description'=>[],
            'image'=>[],
            'preview'=> ['string','max:255'],
            'srcvideo'=> ['string','max:255'],

        ];
    }
}
