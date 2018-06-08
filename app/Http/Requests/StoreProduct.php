<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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

    public function messages()
    {
        return [
            'name.required' => ' Product name is required',
            'category_id.required'  => 'Category name is required',
            'sub_category_id.required'  => 'Sub-category name is required',
            'images[].required'=>'Atleast one image is required'
        ];
    }


    public function rules()
    {
        return [
            'name'=>'required|min:2|max:255',
            'price'=>'required|numeric',
            // 'category_id'=>'required',
            // 'sub_category_id'=>'required',
            'description'=>'nullable|sometimes|max:255',
            'images[]'=>'required|image',
            // 'variation[]'=>'sometimes|max:255',
            // 'variation_images[]'=>'sometimes|image|max:150',
            // 'variation_price[]'=>'sometimes|numeric'
        ];
    }
}
