<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSetting extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'layout'=>'required',
            'colour'=>'required|colour',
            'logo'=>'nullable|sometimes|image',
            'working_hours'=>'nullable|sometimes|max:255',
            'address'=>'nullable|sometimes|max:255',
            'mobile'=>'nullable|sometimes|max:255',
            'email'=>'required|email|max:255',
            'facebook'=>'nullable|sometimes|max:255',
            'twitter'=>'nullable|sometimes|max:255',
            'instagram'=>'nullable|sometimes|max:255',
            'slider_images[]'=>'sometimes|image',
            'brand_images[]'=>'sometimes|image',
        ];
    }
}
