<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMixPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|Max:500',
            'cost' => 'required|min:1|Max:25',
            'existence' => 'required|min:1|max:1000',
            'type' => 'required|min:1|max:500',
            'description' => 'required|min:1|max:1000',
            'brand' => 'required|min:1|max:500'
        ];
    }
}
