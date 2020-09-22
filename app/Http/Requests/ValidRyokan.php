<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidRyokan extends FormRequest
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
            //
            'ryokan_name'=>'required',
            'ryokan_place'=>'required',
            // 'ryokan_img'=>'required',
            'ryokan_discription'=>'required',
            'ryokan_url'=>'required',
            'ryokan_region'=>'required',
        ];
    }
}
